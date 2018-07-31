<?php
	
	require('models/get_eventUpcoming_database/get_eventUpcoming_database.php');

	//require('models/get_homeComment_database/get_homeComment_database.php');

	//require('models/post_contact_to_database/post_contact_to_database.php');


	$home = new XTemplate('views/home/home.html');

	foreach($getEventUpcoming as $k=>$EUpcoming){
		
		$home->insert_loop('BLOCK1.BLOCK1_1',array('BLOCK1_1'=>$EUpcoming));
	}

	/*foreach($getHomeComment as $h=>$HomeComment){
		
		$home->insert_loop('BLOCK1.BLOCK1_2',array('BLOCK1_2'=>$HomeComment));
	}*/
	//print_r($database);

	//$home->parse('BLOCK1.GALLERY');

	$home->parse('BLOCK1');

	$content = $home->text('BLOCK1');

?>