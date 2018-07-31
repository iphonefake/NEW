<?php

	$connect = mysqli_connect('localhost','root','','NEW');
			//Kiem tra ket noi
			if (mysqli_connect_errno()){
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
 			}

	$resultHomeComment = $connect->query('SELECT * FROM HomeComment');
 			//Khoi tao bien database lay du lieu
 			$getHomeComment = array();
 			//Kiem tra va lay du lieu
 			//Kiem tra
 			if($resultHomeComment->num_rows >0) {
 				while($data = mysqli_fetch_assoc($resultHomeComment)) {
 					$getHomeComment[] = $data;
 				}
 			}

 			return $getHomeComment;
?>