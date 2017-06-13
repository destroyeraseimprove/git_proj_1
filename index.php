<?php
	
	include(dirname(__FILE__).'/php/Bootstrap.php');
	
	include(dirname(__FILE__).'/TranslateUrls.php');

	//translate 



	spl_autoload_register(function($classname) {require_once(ROOT.'/php/'.str_replace('_', '/', $classname).'.php');});
	
	new Core_Auth();
	
	new Core_Router($requestPath, $requestRule);
	
	//Model_getData::getDbDump();
?>