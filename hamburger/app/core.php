<?php
	// load slim vendor
	require 'hamburger/app/vendor/Slim/Slim.php'; 
	use Slim\Slim;
	\Slim\Slim::registerAutoloader();
	$app = new \Slim\Slim(array(
	    'templates.path' => 'hamburger/app/template'
	));

	// load MarkdownExtra vendor
	require 'hamburger/app/vendor/Michelf/MarkdownExtra.inc.php';
	use \Michelf\MarkdownExtra;

	// load personal config file
	$my_hamburger = json_decode(file_get_contents("my_hamburger/my_hamburger.json"), true);

	// load resource
	require 'hamburger/app/resource/article.php';