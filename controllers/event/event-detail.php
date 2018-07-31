<?php

	$eventDetail = new XTemplate('views/event/event-detail/index.html');

	require('models/get_event_database/get_event_database.php');
	require('models/get_slide_database/get_slide_database.php');
	

	$p = $_GET['p'];

	//for ($i = 0; $i < count($getEvent); $i++) {

		/*if ($p == '1'){//$getEvent[$i]['eventID']){
			$eventDetail->assign('eventName',$getEvent[1]['eventName']);
			$eventDetail->assign('eventTime',$getEvent[1]['eventTime']);
			$eventDetail->assign('eventDetailText',$getEvent[1]['eventDetailText']);

		}

		if($p == '2'){
			$eventDetail->assign('eventName',$getEvent[2]['eventName']);
			$eventDetail->assign('eventTime',$getEvent[2]['eventTime']);
			$eventDetail->assign('eventDetailText',$getEvent[2]['eventDetailText']);
		}*/

	for ($i = 0; $i < count($getEvent); $i++){
		if($p == $getEvent[$i]['eventID']){
			$eventDetail->assign('eventName',$getEvent[$i]['eventName']);
			$eventDetail->assign('eventTime',$getEvent[$i]['eventTime']);
			$eventDetail->assign('eventDetailText',$getEvent[$i]['eventDetailText']);

			/*foreach($getSlide[$i]['eventID'] as $s=>$ESlide){
		
				$eventDetail->insert_loop('EVENT_DETAIL.SLIDE',array('SLIDE'=>$ESlide));
			}*/
		};
	}

		print_r($getSlide);
	//}

	$eventDetail->parse('EVENT_DETAIL');

	$content = $eventDetail->text('EVENT_DETAIL');

?>