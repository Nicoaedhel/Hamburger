<?php $app->render('header.php', array('path' => $path, 'my_hamburger' => $my_hamburger)); // load ui ?>
<div id="wall" style="background : url('<?= $path; ?>my_hamburger/article/<?= $article?>/images/<?= $json['wall']?>'); background-size: cover; " >
 	<div class="row">
    <div class="large-12 columns">
      <center>
        <a href="">
          <h1><?= $json['title']?></h1>
          <h2><?= $json['subtitle']?></h2>
        </a>

      </center>
    </div>
  </div>
</div>

<div id="content">
  <div class="row">
    <div class="large-9 large-centered columns">

      <ul class="breadcrumbs" >
        <li><a href="../">Home</a></li>
        <li class="current"><a href="#"><?= $json['title']?></a></li>
      </ul>

      <div id="post_info">
        <img src="<?= $path; ?>my_hamburger/avatar/<?= $json['avatar']?>" />
        <span class="mention"><?= $json['author']?> <?= $json['date']?></span>
      </div>
      
      <?= $md;?>

      <div id="post_info_footer">
        <hr />
        <div class="title_info_footer">WRITTEN BY</div>
        <img src="<?= $path; ?>my_hamburger/avatar/<?= $json['avatar']?>" />
        <div class="mention">
          <span><?= $json['author']?></span> <br /> <?= $json['author_description']?>
        </div>
      </div>

      <div class="post_article_link">
        <hr />
        <p>
          <a href="<?= $previous_href?>" style="float:left;">&laquo; Previous - <?= $previous_title?></a>
          <a href="<?= $next_href?>" style="float:right;"><?= $next_title?> ! - Next &raquo; </a>
        </p>
      </div>

    </div>
  </div>
</div>
<?php $app->render('footer.php', array('path' => $path)); // load ui ?>