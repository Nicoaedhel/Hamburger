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
			if ($file != "." && $file != ".." && $file != ".DS_Store" && $file != "new-article-copy-me") {
				$json = json_decode(file_get_contents("my_hamburger/article/$file/info.json"), true);
				$article[$i]['title'] = $json['title'];
				$article[$i]['subtitle'] = $json['subtitle'];
				$article[$i]['author'] = $json['author'];
				$article[$i]['date'] = $json['date'];
				$article[$i]['avatar'] = $json['avatar'];
				$article[$i]['wall'] = $json['wall'];
				$article[$i]['ads'] = $json['ads'];
				$article[$i]['href'] = $file;
				$i++;
			}
		}
	}
	closedir($dir);
	usort($article, function($a, $b) {
	    return $a['date'] < $b['date'];
	}); 
	$number_article = $i;
	$i = 0;
	while ($i <= $number_article -1) {
		$article[$i]['date'] = "on ".date("F j, Y", strtotime($article[$i]['date']));
		$i++;
	}
	$my_hamburger = json_decode(file_get_contents("my_hamburger/my_hamburger.json"), true);
	$app->render('home.php', array(
		'app' => $app, 
		'path' => $path, 
		'article' => $article,
		'my_hamburger' => $my_hamburger
	));

}

function _article_view($article){

	$path = "../"; 
	$app = \Slim\Slim::getInstance();
	if(file_exists("my_hamburger/article/$article")){
		$article_list = [];
		$i=0;
		if($dir = opendir("my_hamburger/article/")){
			while(false !== ($file = readdir($dir))){
				if ($file != "." && $file != ".." && $file != ".DS_Store" && $file != "new-article-copy-me") {
					$json = json_decode(file_get_contents("my_hamburger/article/$file/info.json"), true);
					$article_list[$i]['title'] = $json['title'];
					$article_list[$i]['date'] = $json['date'];
					$article_list[$i]['href'] = $file;
					$i++;
				}
			}
		}
		closedir($dir);
		usort($article_list, function($a, $b) {
		    return $a['date'] < $b['date'];
		});
		$number_article = $i;
		$i = 0;
		if($number_article == 1){
			$next_title = $article_list[0]['title'];
			$next_href = $article_list[0]['href'];
			$previous_title = $article_list[0]['title'];
			$previous_href = $article_list[0]['href'];
		}
		else{
			while ($i <= $number_article -1) {
				if($article_list[$i]['href'] == $article){
					if($i == 0){
						$next_title = $article_list[$i+1]['title'];
						$next_href = $article_list[$i+1]['href'];
						$previous_title = $article_list[$number_article -1]['title'];
						$previous_href = $article_list[$number_article -1]['href'];
					}
					elseif($i == $number_article - 1){
						$next_title = $article_list[0]['title'];
						$next_href = $article_list[0]['href'];
						$previous_title = $article_list[$i -1]['title'];
						$previous_href = $article_list[$i -1]['href'];
					}
					elseif($i+1 < $number_article){
						$next_title = $article_list[$i+1]['title'];
						$next_href = $article_list[$i+1]['href'];
						$previous_title = $article_list[$i-1]['title'];
						$previous_href = $article_list[$i-1]['href'];
					}
				}
				$i++;
			}
		}
		$json = json_decode(file_get_contents("my_hamburger/article/$article/info.json"), true);
		$json['date'] = "on ".date("F j, Y", strtotime($json['date']));
		$md =  \Michelf\MarkdownExtra::defaultTransform(file_get_contents("my_hamburger/article/$article/article.md"));
		$app->render('article.php', array(
			'json' => $json, 
			'md' => $md,
			'article' => $article,
			'next_title' => $next_title,
			'next_href' => $next_href,
			'previous_title' => $previous_title,
			'previous_href' => $previous_href,
			'app' => $app,
			'path' => $path
		)); // load ui
	}
	else {
	    $app->render('home.php', array('app' => $app, 'path' => $path));
	}

}