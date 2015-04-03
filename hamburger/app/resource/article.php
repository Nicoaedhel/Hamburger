<?php

$app->get(    '/',            				'_article_list');
$app->get(    '/:article/',            		'_article_view');


function _article_list(){
	
	$app = \Slim\Slim::getInstance();
	$app->render('home.php');

}

function _article_view($article){

	$app = \Slim\Slim::getInstance();
	if(file_exists("my_hamburger/article/$article")){
		$json = json_decode(file_get_contents("my_hamburger/article/$article/info.json"), true);
		$md =  \Michelf\MarkdownExtra::defaultTransform(file_get_contents("my_hamburger/article/$article/article.md"));
		$app->render('article.php', array('json' => $json, 'md' => $md, 'article' => $article));
	}
	else {
	    $app->render('home.php');
	}

}