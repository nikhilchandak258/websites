	<?php




	//Validatros COmmand
	if(isset($_POST['submit'])) 
{
		$email		= $_POST['email'];
		$fname		= $_POST['fname'];
		$message	= $_POST['message'];
		$country	= $_POST['country'];
		$state		= $_POST['state'];
		$mobile		= $_POST['contact'];
		$address	= $_POST['address'];
		$mailto		="prakash.suratfabric@gmail.com";
		$subject	="Order/Enquiry Form";


		
			include 'php/connect.php';
			
		//$sql="INSERT INTO order(srno,name,number,email,country,state,address,message) VALUES (null,'$fname','$mobile','$email','$country','$state','$address','$message')";
$sql="INSERT INTO `stfabric`.`order` (`srno`, `name`, `number`, `email`, `country`, `state`, `address`, `message`) VALUES (NULL, '$fname','$mobile','$email','$country','$state','$address','$message')";
	if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  else
  {
    echo "<div id='success'>We have received your enquiry.<br /> We will revert back with necessary details as urgently as possible.";
  echo "<br /><button id='clrmsg' style='margin-top: 10px;' >OK</button>";
			
  echo "</div>";
		$message_body		= "Hi, ".$fname." has made an ORDER QUERY \n"
									."Mobile Number: ".$mobile."\n"
									."email: ".$email."\n"
									."Country: ".$country."\n"
									."Address: ".$address."\n"
									."State: ".$state."\n"
									."message: ".$message; 
		
		return mail($mailto,$subject,$message_body,null);




}
exit();
			}
			