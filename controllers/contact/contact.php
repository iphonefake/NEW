<?php

	$contact = new XTemplate('views/contact/index.html');

	$contact->parse('BLOCK5');

	$content = $contact->text('BLOCK5');

?>