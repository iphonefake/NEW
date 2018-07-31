<?php

			//Ket noi Database
			$connect = mysqli_connect('localhost','root','','NEW');
			//Kiem tra ket noi
			if (mysqli_connect_errno()){
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
 			}
 			//Lay du lieu trong bang
 			$result = $connect->query('SELECT * FROM Event');
 			//Khoi tao bien database lay du lieu
 			$getEvent = array();
 			//Kiem tra va lay du lieu
 			//Kiem tra
 			if($result->num_rows >0) {
 				while($data = mysqli_fetch_assoc($result)) {
 					$getEvent[] = $data;
 				}
 			}

 			return $getEvent;

 			//Phan trang
 			//Cong thuc tinh start
 			//
 			//Tim tong so record

 			/*$PaginationResult = mysqli_query($connect, 'SELECT count(eventID) AS TOTAL FROM Event');
 			$row = mysqli_fetch_assoc($PaginationResult);
 			$total_record = $row['TOTAL'];

 			//Tim limit va current page

 			$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
 			$limit = 4;

 			//Tinh total page va start
 			//Tong so trang
 			$total_page = ceil($total_record / $limit);

 			//Gioi han current page tu 1 den total page

 			if($current_page > $total_page){
 				$current_page = $total_page;
 			}

 			else if ($current_page < 1){	
 				$current_page = 1;
 			}

 			//Tim start
 			$start = ($current_page - 1) * $limit;*/






?>