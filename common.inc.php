<?php

require_once('vendor/autoload.php');

use smtech\StMarksSmarty\StMarksSmarty;

$secrets = simplexml_load_string(file_get_contents('secrets.xml'));
	
$smarty = StMarksSmarty::getSmarty();
$smarty->addTemplateDir(__DIR__ . '/templates');
$smarty->assign('category', '');
?>