<?php

	$about = new XTemplate('views/about/index.html');

	$about->parse('BLOCK4');

	$content = $about->text('BLOCK4');

?>