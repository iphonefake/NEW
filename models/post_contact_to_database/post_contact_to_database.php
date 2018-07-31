<?php
			session_start();

			//Ket noi Database
			$connect = mysqli_connect('localhost','root','','NEW');
			//Kiem tra ket noi
			if (mysqli_connect_errno()){
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
 			}

 			//LAY DU LIEU TU FORM 
 			$contactFName 		= $_POST['contactFName'];
			//$contactLName 		= $_POST['contactLName'];
			$contactEmail 		= $_POST['contactEmail'];
			$contactPhone		= $_POST['contactPhone'];

			$contactMessage		= $_POST['contactMessage'];


			

			$sql = "INSERT INTO `Contact` (`contactID`, `contactFName`, `contactEmail`, `contactPhone`,`contactMessage`) 
					VALUES (NULL, '{$contactFName}', '{$contactEmail}', '{$contactPhone}','{$contactMessage}');";

			
			
			//echo $sql;

			$rs = $connect->query($sql);

			if($rs) {
				return $_session['Success_msg'] = "alert(Login Successful! Hello user <3)";
			}
			else{
				return $_session['Error_msg'] = "alert(Login Error!)";
			}

			/*
 			//insert du lieu vao bang
 			$sql = "INSERT INTO newEvent (eventName, eventAddress, eventTitle, eventPopUpLink)
 					VALUES('$eventName','$eventAddress','$eventTitle','$eventPopUpLink') "
 				
 			if ($connect->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $connect->error;
			}*/


?>