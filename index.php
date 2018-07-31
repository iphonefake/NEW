<?php
	
	include('./libs/XTemplate.class.php');
	$tpl = new XTemplate('views/index.html');

	define('CONTROLLER_DEFAULT', 'home');
	define('ACTION_DEFAULT', 'home');

	//$c = $_GET['c'];
	//$a = $_GET['a'];

	// Neu khong truyen vao gia tri controller va array thi lay gia tri mac dinh

	$c = empty($_GET['c']) ? CONTROLLER_DEFAULT : $_GET['c'];
	$a = empty($_GET['a']) ? ACTION_DEFAULT : $_GET['a'];
	
	$module_action = "controllers/{$c}/{$a}.php"; //?c={class}&a={action}
	
	if(file_exists($module_action)){
		require($module_action);
	}else{
		$content = "404 Not found action";
	}


	
	$tpl->assign('content',$content);
	//$tpl->parse('LAYOUT.CONTENT');
	$tpl->parse('LAYOUT');
	$tpl->out('LAYOUT');