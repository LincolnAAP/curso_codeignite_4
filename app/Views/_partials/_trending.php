<div class="trending">
              <h3>Trending</h3>
              <ul class="trending-post">
              <?php foreach($posts as $index => $trending):?>
                <li>
                  <a href="single-post.html">
                    <span class="number"><?php echo ++$index ?></span>
                    <h3><?php echo $trending->title ?></h3>
                    <span class="author"><?php echo $trending->userFirstName ?> <?php echo $trending->userLastName ?></span>
                  </a>
                </li>
                <?php endforeach;?>
              </ul>
            </div>