<?php $app->render('header.php', array('path' => $path)); // load ui ?>
      <div id="wall" style="background : url('<?= $path; ?>my_hamburger/<?= $my_hamburger['image_wall_blog']; ?>'); background-size: cover; z-index:999 " >
       	<div class="row">
          <div class="large-12 columns">
            <center>
              <a href="">
                <h1><?= $my_hamburger['title_blog']; ?></h1>
                <h2><?= $my_hamburger['subtitle_blog']; ?></h2>
              </a>
            </center>
          </div>
        </div>
      </div>
     

      <div id="content">
        <div class="row">
          <div class="large-9 medium-11 medium-centered large-centered columns">

            <div class="post_list">
              <a href="article/<?= $article[0]['href']; ?>">
                <div class="post_list_img" style="background : url('<?= $path; ?>my_hamburger/article/<?= $article[0]['href']; ?>/images/<?= $article[0]['wall']; ?>'); background-size: cover; " >
                  <div class="post_list_title"><?= $article[0]['title']; ?></div>
                  <div class="post_list_subtitle"><?= $article[0]['subtitle']; ?></div>
                  <div class="post_list_info">
                    <center>
                      <img src="<?= $path; ?>my_hamburger/avatar/<?= $article[0]['avatar']; ?>" />
                      <span class="mention"><?= $article[0]['author']; ?> <?= $article[0]['date']; ?></span>
                    </center>
                  </div>
                </div>
              </a>

              <div class="post_list_content">
                <div class="post_list_description">
                  <p>
                   <?= $article[0]['ads']; ?> <br /><a href="article/<?= $article[0]['href']; ?>">Read +</a>
                  </p>
                </div>
              </div>
              <hr />
            </div>

            <div class="row">
              <?php 
              $i=1;
              $number_article = count($article);
              if($number_article > 1){
                if ($number_article%2 == 0){
                  while ($i <= ($number_article -2)) {
                    echo'
                    <div class="large-6  columns">
                      <div class="post_list">
                        <a href="article/'.$article[$i]['href'].'">
                          <div class="post_list_img" style="background : url(\''.$path.'my_hamburger/article/'.$article[$i]['href'].'/images/'.$article[$i]['wall'].'\'); background-size: cover; " >
                            <div class="post_list_title">'.$article[$i]['title'].'</div>
                            <div class="post_list_subtitle">'.$article[$i]['subtitle'].'</div>
                            <div class="post_list_info">
                              <center>
                                <img src="'.$path.'my_hamburger/avatar/'.$article[$i]['avatar'].'" />
                                <span class="mention">'.$article[$i]['author'].' '.$article[$i]['date'].'</span>
                              </center>
                            </div>
                          </div>
                        </a>

                        <div class="post_list_content">
                          <div class="post_list_description">
                            <p>
                             '.$article[$i]['ads'].' <br /><a href="article/'.$article[$i]['href'].'">Read +</a>
                            </p>
                          </div>
                        </div>
                        <hr />
                      </div>
                    </div>'; 
                    $i++;
                  }
                  $i = $number_article-1;
                  echo'
                    <div class="large-12  columns">
                      <div class="post_list">
                        <a href="article/'.$article[$i]['href'].'">
                          <div class="post_list_img" style="background : url(\''.$path.'my_hamburger/article/'.$article[$i]['href'].'/images/'.$article[$i]['wall'].'\'); background-size: cover; " >
                            <div class="post_list_title">'.$article[$i]['title'].'</div>
                            <div class="post_list_subtitle">'.$article[$i]['subtitle'].'</div>
                            <div class="post_list_info">
                              <center>
                                <img src="'.$path.'my_hamburger/avatar/'.$article[$i]['avatar'].'" />
                                <span class="mention">'.$article[$i]['author'].' '.$article[$i]['date'].'</span>
                              </center>
                            </div>
                          </div>
                        </a>

                        <div class="post_list_content">
                          <div class="post_list_description">
                            <p>
                             '.$article[$i]['ads'].' <br /><a href="article/'.$article[$i]['href'].'">Read +</a>
                            </p>
                          </div>
                        </div>
                        <hr />
                      </div>
                    </div>';
                }
                else{
                  while ($i <= ($number_article -1)) {
                    echo'
                    <div class="large-6  columns">
                      <div class="post_list">
                        <a href="article/'.$article[$i]['href'].'">
                          <div class="post_list_img" style="background : url(\''.$path.'my_hamburger/article/'.$article[$i]['href'].'/images/'.$article[$i]['wall'].'\'); background-size: cover; " >
                            <div class="post_list_title">'.$article[$i]['title'].'</div>
                            <div class="post_list_subtitle">'.$article[$i]['subtitle'].'</div>
                            <div class="post_list_info">
                              <center>
                                <img src="'.$path.'my_hamburger/avatar/'.$article[$i]['avatar'].'" />
                                <span class="mention">'.$article[$i]['author'].' '.$article[$i]['date'].'</span>
                              </center>
                            </div>
                          </div>
                        </a>

                        <div class="post_list_content">
                          <div class="post_list_description">
                            <p>
                             '.$article[$i]['ads'].' <br /><a href="article/'.$article[$i]['href'].'">Read +</a>
                            </p>
                          </div>
                        </div>
                        <hr />
                      </div>
                    </div>'; 
                    $i++;
                  }
                }
                  
                
              } 
              ?>
            </div> 

          </div>
        </div>
      </div>

      <?php $app->render('footer.php', array('path' => $path)); // load en ui ?>