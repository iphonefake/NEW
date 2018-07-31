<?php

			//Ket noi Database
			$connect = mysqli_connect('localhost','root','','NEW');
			//Kiem tra ket noi
			if (mysqli_connect_errno()){
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
 			}
 			//Lay du lieu trong bang
 			$resultSlide = $connect->query("SELECT * FROM 'Gallery' WHERE 'Gallery.eventID' = 'Event.eventID'");
 			//Khoi tao bien database lay du lieu
 			$getSlide = array();
 			//Kiem tra va lay du lieu
 			//Kiem tra
 			if($resultSlide->num_rows >0) {
 				while($data = mysqli_fetch_assoc($result)) {
 					$getSlide[] = $data;
 				};
 			}
 			//Lay du lieu
 			return $getSlide;
?>