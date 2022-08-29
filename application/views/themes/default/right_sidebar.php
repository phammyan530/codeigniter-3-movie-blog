
              <div class="widget default">
                <div class="widget-title">
                  <h3>Random Posts</h3>
                </div>
                <div class="list-group">
				<?php $randomPosts = $this->general->getRandomMovies();?>
					<?php if(!empty($randomPosts)):?>
                    <?php foreach ($randomPosts as $post):?>
                      <div class="list-group-item">
                        <?php if(!empty($post->img)):?>
                        <div class="row-picture">
                            <img class="circle" src="<?php echo $post->img?>" alt="icon">
                        </div>
                        <?php endif;?>
                        <div class="row-content">
                            <h4><a href="<?php echo site_url('read/'.$post->id) ?>"><?php echo $post->movie ?></a> (<?php echo $post->year ?>)</h4>
                        </div>
                      </div>
                      <div class="list-group-separator"></div>
                    <?php endforeach;?>
                  <?php endif;?>
                </div>
              </div>
			 