<?php

			//Ket noi Database
			$connect = mysqli_connect('localhost','root','','NEW');
			//Kiem tra ket noi
			if (mysqli_connect_errno()){
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
 			}
 			//Lay du lieu trong bang
 			$result = $connect->query('SELECT * FROM Gallery');
 			//Khoi tao bien database lay du lieu
 			$database = [];
 			//Kiem tra va lay du lieu
 			//Kiem tra
 			if($result->num_rows >0) {
 				while($data = mysqli_fetch_assoc($result)) {
 					$database[] = $data
 				}
 			}
 			//Lay du lieu
 			return $database;
?>