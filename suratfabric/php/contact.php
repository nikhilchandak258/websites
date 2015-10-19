<?php
require_once("db.php");					/* Database Class */
require_once('utils/is_email.php');		/* Email Validation Script */

/* Handle Ajax Request */
if(isset($_POST['newcontact'])){
	$contact = new Contact();
	unset($contact);
}
else{
	header('Location: /');
}

/* Class Contact */
class Contact{
	
	private $db; 						/* the database obj */
	
	private $errors 		= array();  /* holds error messages */
	private $num_errors;   				/* number of errors in submitted form */
	
	public function __construct(){
		$this->db = new DB();
		if(isset($_POST['newcontact']))
			$this->processNewMessage();
		else
			header("Location: /");
	}

	public function processNewMessage(){
		
		$email		= $_POST['email'];
		$name		= $_POST['name'];
		$message	= $_POST['message'];
		$mobile		= $_POST['cntno'];
		$country	= $_POST['country'];
		$state		= $_POST['state'];
		$address	= $_POST['address'];
		
		/* Server Side Data Validation */
		
		/* Email Validation */
		if(!$email || mb_strlen($email = trim($email)) == 0)
			$this->setError('email','required field');
		else{
			if(!is_email($email))
				$this->setError('email', 'invalid email');
			else if(mb_strlen($email) > 120)
				$this->setError('email', 'too long! 120');
		}
		
		/* Name Validation */
		if(!$name || mb_strlen($name = trim($name)) == 0)
			$this->setError('name', 'required field');
		else if(mb_strlen(trim($name)) > 120)
			$this->setError('name', 'too long! 120 characters');

		
		/* Message Validation */
		$message = trim($message);
		if(!$message || mb_strlen($message = trim($message)) == 0)
			$this->setError('message','required field');
		elseif(mb_strlen($message) > 300)
			$this->setError('message', 'too long! 300 characters');
			
				/* Number Validation */
		if(!$mobile || mb_strlen($mobile = trim($mobile)) == 0)
			$this->setError('cntno', 'required field');
		else if(!is_numeric($mobile))
			$this->setError('cntno', 'Enter a valid Number');
			
		if($state=="0" && $country=="India")
			$this->setError('state', 'required field');	
		
		if($country=="0")
			$this->setError('country', 'required field');	
		
		/* Errors exist */
		if($this->countErrors() > 0){
			$json = array(
				'result' => -1, 
				'errors' => array(
								array('name' => 'email'		,'value' => $this->error_value('email')),
								array('name' => 'name' 		,'value' => $this->error_value('name')),
								array('name' => 'message'	,'value' => $this->error_value('message')),
								array('name' => 'cntno'		,'value' => $this->error_value('cntno')),
								array('name' => 'state'		,'value' => $this->error_value('state')),
								array('name' => 'country'	,'value' => $this->error_value('country'))
								
							)
				);				
			$encoded = json_encode($json);
			echo $encoded;
			unset($encoded);
		}
		/* No errors, insert in db*/
		else{
			if(($ret = $this->db->dbNewMessage($email, $name, $mobile, $country,$state,$address,$message)) > 0){
				$json = array('result' 		=> 1); 
				if(SEND_EMAIL)
					$this->sendEmail($email,$name,$mobile, $country,$state,$address,$message);
			}	
			else
				$json = array('result' 		=> -2); /* something went wrong in database insertion  */
			$encoded = json_encode($json);
			echo $encoded;
			unset($encoded);
		}
	}
	
	public function sendEmail($email,$name,$mobile,$country,$state,$address,$message){
		/* Just format the email text the way you want ... */
		$message_body		= "Hi, ".$name." sent you a message from Contact Form\n"
									."Mobile Number: ".$mobile."\n"
									."email: ".$email."\n"
									."Country: ".$country."\n"
									."Address: ".$address."\n"
									."State: ".$state."\n"
									."message: ".$message; 
		$headers			= "From: ".EMAIL_FROM_NAME." <".EMAIL_FROM_ADDR.">";
		
		return mail(EMAIL_TO,MESSAGE_SUBJECT,$message_body,$headers);
	}
	
	public function setError($field, $errmsg){
		$this->errors[$field] 	= $errmsg;
		$this->num_errors 		= count($this->errors);
	}
	
	public function error_value($field){
		if(array_key_exists($field,$this->errors))
			return $this->errors[$field];
		else
			return '';
	}
	
	public function countErrors(){
		return $this->num_errors;
	}
};
?>