<?php

	$event = new XTemplate('views/event/index.html');
	require('models/get_event_database/get_event_database.php');

	foreach($getEvent as $g=>$gEvent){
		
		$event->insert_loop('BLOCK3.BLOCK3_1',array('BLOCK3_1'=>$gEvent));
	}

	//Phan trang


	$event->parse('BLOCK3');

	$content = $event->text('BLOCK3');

?>