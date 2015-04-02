<?php
	require 'hamburger/back/vendor/Slim/Slim.php'; // gere le routage
	use Slim\Slim;
	\Slim\Slim::registerAutoloader();
	$app = new \Slim\Slim(array(
		'templates.path' => './templates'
		));