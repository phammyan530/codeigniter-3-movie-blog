<div class="panel panel-default"><!-- Post -->
    <?php if(!empty($post->img)):?>
    <div class="panel-img">
     	<img src="<?php echo $post->img;?>" alt="" class="img-responsive">
    </div>
    <?php endif;?>
    <div class="panel-body content">
		<h2><a href="javascript:void(0)"><?php echo $post->movie ?></a> (<?php echo $post->year;?>)</h2>
		<div class="post-meta">
          <span class="text-left">Run Time: <?php echo $post->run_time?></span>&nbsp; | &nbsp;
          <span class="text-left">Genre: <?php echo $post->genre?></span>&nbsp; | &nbsp;
          <span class="text-left">Gross Total: <?php echo $post->total_gross?></span>
        </div>
		<?php echo $post->descrt;?>
		<div class="post-meta">
			<span class="text-left">Director: <a href="javascript:void(0)"><?php echo $post->director?></a></span><br/>
			<span class="text-left">Actors: <a href="javascript:void(0)"><?php echo $post->actors?></a></span>
        </div>
	</div>
	<div class="panel-footer">
        <div class="post-meta">
			<span class="fa fa-star" style="color:#dabe07"></span>
			<span class="fa fa-star" style="color:#dabe07"></span>
			<span class="fa fa-star" <?php if($post->rating > 7) echo 'style="color:#dabe07"'; ?>></span>
			<span class="fa fa-star" <?php if($post->rating > 8) echo 'style="color:#dabe07"'; ?>></span>
			<span class="fa fa-star" <?php if($post->rating > 9) echo 'style="color:#dabe07"'; ?>></span>
			<span class="text-left"><?php echo $post->rating?></span>
          <div class="pull-right share-icon"> 
            <span class="text-left">Total Rate: <?php echo number_format($post->total_rate)?></span>
          </div>
        </div>
     </div>
</div>