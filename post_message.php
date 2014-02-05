<?php 
	include "utilities.php";
	
	if(!empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['message'])){
		$name = $_POST['fname'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$approved = 'N';
		if(ctype_alpha($name)){
			$find1 = '@';
			$search1 = stripos($email, $find1);
			if($search1 !== false){
				$find2 = '.';
				$search2 = stripos($email, $find2);
				if($search2 !== false){
					create_message($name, $email, $message, $approved);
					header("location:backend.php");
				}else{
				echo "<script>alert('Your Email is not valid');window.location.href='MessageFront.php'</script>";
				}
			}else{
				echo "<script>alert('Your Email is not valid');window.location.href='MessageFront.php'</script>";
			}
		
		}else{
			echo "<script>alert('Please enter your name in Alphabet only');window.location.href='MessageFront.php'</script>";
		}
	}else{
		echo "<script>alert('Please insert Messages');window.location.href='MessageFront.php'</script>";
	}
	
?>