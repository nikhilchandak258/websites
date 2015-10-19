<?php
require_once("config.php"); /* Configuration File */

class DB{
	
	private $link;
	
	public function __construct(){
		$this->link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
		if (mysqli_connect_errno())
		    exit();
	}
	
	public function __destruct() {
		mysqli_close($this->link);
	}
	
	public function dbNewMessage($email,$name,$mobile,$country,$state,$address,$message){
		$email 	 	= mysqli_real_escape_string($this->link,$email);
		$name 		= mysqli_real_escape_string($this->link,$name);
		$message 	= mysqli_real_escape_string($this->link,$message);
		$mobile 	= mysqli_real_escape_string($this->link,$mobile);
		$state	 	= mysqli_real_escape_string($this->link,$state);
		$country 	= mysqli_real_escape_string($this->link,$country);
		$address 	= mysqli_real_escape_string($this->link,$address);
		
		mysqli_autocommit($this->link,FALSE);
		
		$query = "INSERT INTO contact(pk_contact,name,mobile,email,country,state,address,message) 
				  VALUES('NULL','$name','$mobile','$email','$country','$state','$address','$message')";
		mysqli_query($this->link,$query);
		
		if(mysqli_errno($this->link))
			return -1;
		else{
			mysqli_commit($this->link);
			return 1;
		}
	}   
};
?>