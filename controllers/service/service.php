<?php

	$service = new XTemplate('views/service/index.html');

	$service->parse('BLOCK2');

	$content = $service->text('BLOCK2');

?>