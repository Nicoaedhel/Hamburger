<?php $app->render('header.php', array('path' => $path)); // load ui ?>
      <div id="wall" style="background : url('<?= $path; ?>my_hamburger/wall.jpg'); background-size: cover; " >
       	<div class="row">
          <div class="large-12 columns">
            <center>
              <h1>Welcome to Hamburger</h1>
              <h2>nOm nOm nOm nOm !</h2>
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum ... <a href="">Read +</a>
                  </p>
                </div>
              </div>
              <hr />
            </div>

            <div class="row">
              <div class="large-6  columns">

                <div class="post_list">
                  <a href="">
                    <div class="post_list_img" style="background : url('<?= $path; ?>my_hamburger/wall.jpg'); background-size: cover; " >
                      <div class="post_list_title">Welcome to Hamburger</div>
                      <div class="post_list_subtitle">nOm nOm nOm nOm !</div>
                      <div class="post_list_info">
                        <center>
                          <img src="<?= $path; ?>my_hamburger/avatar/default.png" />
                          <span class="mention">Monsieur Hiboux on March 16, 2015</span>
                        </center>
                      </div>
                    </div>
                  </a>

                  <div class="post_list_content">
                    <div class="post_list_description">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum ... <a href="">Read +</a>
                      </p>
                    </div>
                  </div>
                  <hr />
                </div>

              </div>

              <div class="large-6 columns">

                <div class="post_list">
                  <a href="">
                    <div class="post_list_img" style="background : url('<?= $path; ?>my_hamburger/wall.jpg'); background-size: cover; " >
                      <div class="post_list_title">Welcome to Hamburger</div>
                      <div class="post_list_subtitle">nOm nOm nOm nOm !</div>
                      <div class="post_list_info">
                        <center>
                          <img src="<?= $path; ?>my_hamburger/avatar/default.png" />
                          <span class="mention">Monsieur Hiboux on March 16, 2015</span>
                        </center>
                      </div>
                    </div>
                  </a>

                  <div class="post_list_content">
                    <div class="post_list_description">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum ... <a href="">Read +</a>
                      </p>
                    </div>
                  </div>
                  <hr />
                </div>

              </div>

            </div> 

          </div>
        </div>
      </div>

      <?php $app->render('footer.php', array('path' => $path)); // load en ui ?>