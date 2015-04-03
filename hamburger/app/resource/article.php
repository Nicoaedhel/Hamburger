<?php

$app->get(    '/',            						'_article_list');
$app->get(    '/article/:article/',            		'_article_view');


function _article_list(){
	
	$app = \Slim\Slim::getInstance();
	$path = "./";
	$article = [];
	$i=0;
	if($dir = opendir("my_hamburger/article/")){
		while(false !== ($file = readdir($dir))){
			if ($file != "." && $file != ".." && $file != ".DS_Store") {
				$json = json_decode(file_get_contents("my_hamburger/article/$file/info.json"), true);
				$article[$i]['title'] = $json['title'];
				$article[$i]['subtitle'] = $json['subtitle'];
				$article[$i]['author'] = $json['author'];
				$article[$i]['date'] = $json['date'];
				$article[$i]['avatar'] = $json['avatar'];
				$article[$i]['wall'] = $json['wall'];
				$article[$i]['href'] = $file;
				$i++;
			}
		}
	}
	closedir($dir); 
	$app->render('home.php', array('app' => $app, 'path' => $path, 'article' => $article));

}

function _article_view($article){

	$path = "../"; 
	$app = \Slim\Slim::getInstance();
	if(file_exists("my_hamburger/article/$article")){
		$json = json_decode(file_get_contents("my_hamburger/article/$article/info.json"), true);
		$md =  \Michelf\MarkdownExtra::defaultTransform(file_get_contents("my_hamburger/article/$article/article.md"));
		$app->render('article.php', array(
			'json' => $json, 
			'md' => $md,
			'article' => $article,
			'app' => $app,
			'path' => $path
		)); // load ui
	}
	else {
	    $app->render('home.php', array('app' => $app, 'path' => $path));
	}

}