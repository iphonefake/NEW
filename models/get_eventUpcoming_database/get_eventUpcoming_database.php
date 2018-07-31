<?php

			//Ket noi Database
			$connect = mysqli_connect('localhost','root','','NEW');
			//Kiem tra ket noi
			if (mysqli_connect_errno()){
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
 			}
 			//Lay du lieu trong bang
 			$resultEventUpComing = $connect->query('SELECT * FROM EventUpcoming');
 			//Khoi tao bien database lay du lieu
 			$getEventUpcoming = array();
 			//Kiem tra va lay du lieu
 			//Kiem tra
 			if($resultEventUpComing->num_rows >0) {
 				while($data = mysqli_fetch_assoc($resultEventUpComing)) {
 					$getEventUpcoming[] = $data;
 				}
 			}

 			return $getEventUpcoming;