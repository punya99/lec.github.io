<?php

{session_start();

	
    
//Do you stuff
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$question=$_POST['question'];
$subjcet=$_POST['subjcet'];
$message=$_POST['message'];

//email working 

				// $to="info@lohaar.in, noorlohaar01@gmail.com";
				$to="";
				$subject="Lohaar Engineering and Construction Pvt Ltd Enquiry.";
				$msg="A Potential Client tried to  Contact Us. Here is the message : $message..\n\n
				Name Of Person : $name 
				Email : $email 
				Phone : $phone
				Question : $question
				subjcet : $subjcet
				Message : $message


			
				-------------------------------------------------------
				\n ";
				
					   
				$headers ='From: '.$name;
				
				
				$success=mail($to,$subject,$msg,$headers);
				//echo $success;
				if(!empty($success)||$success!=0)
				{
				
				echo '<script>alert ("Thank you for Contacting Us , We will revert back you soon")</script>';
				echo "<script>window.location.href='index.html'</script>";
				}
				else
					{
					
					echo '<script>alert ("Mail is not Sent.Please try again. ")</script>';
					echo "<script>window.location.href='index.html'</script>";
					
					}
				
			}
			
			
?>
