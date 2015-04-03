<div id="wall" style="background : url('my_hamburger/article/<?= $article?>/images/wall.jpg'); background-size: cover; " >
       	<div class="row">
          <div class="large-12 columns">
            <center>
              <h1><?= $json['title']?></h1>
              <h2><?= $json['subtitle']?></h2>
            </center>
          </div>
        </div>
      </div>

      <div id="content">
        <div class="row">
          <div class="large-9 large-centered columns">

            <ul class="breadcrumbs" >
              <li><a href="./">Home</a></li>
              <li class="current"><a href="#"><?= $json['title']?></a></li>
            </ul>

            <div id="post_info" style="display:left">
              <img src="my_hamburger/avatar/<?= $json['avatar']?>" />
              <span class="mention"><?= $json['author']?> <?= $json['date']?></span>
            </div>
            
            <?= $md;?>

            <div id="post_info_footer">
              <hr />
              <div class="title_info_footer">WRITTEN BY</div>
              <img src="my_hamburger/avatar/<?= $json['avatar']?>" />
              <div class="mention">
                <span><?= $json['author']?></span> <br /> <?= $json['author_description']?>
              </div>
            </div>

            <div class="post_article_link">
              <hr />
              <p>
                <a href="" style="float:left;">&laquo; Previous - Welcome to Hamburger !</a>
                <a href="" style="float:right;">Welcome to Hamburger ! - Next &raquo; </a>
              </p>
            </div>

          </div>
        </div>
      </div>