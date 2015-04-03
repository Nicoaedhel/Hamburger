<?php
	// init app
	require 'hamburger/app/core.php';

	// load ui
	$app->render('header.php', array('my_hamburger' => $my_hamburger));
	$app->run(); // render data
	$app->render('footer.php'); // load en ui