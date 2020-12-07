<?php get_header(); ?>
<?php 
	$i = 0; //Counter
 ?>
	<?php $featured_query = new WP_Query(array(
		'category_name' => 'featured' )); ?>
		<?php while ($featured_query -> have_posts()) : $featured_query -> the_post();?>
		<?php 
				$i++;
				if ($i % 2 != 0) {
					//Odd
					$reverse = '';
				}else{
					//Even
					$reverse = 'reverse';
				}

			 ?> 


		<article>
			<div class="grid-container">
			    <div class="grid-x grid-padding-x">
			    	<div class="<?php echo $reverse; ?>">
			    		<div class="post-desc">
				          <span><?php the_time('F j, Y g:i a'); ?></span>
				          <h3><?php the_title(); ?></h3>
				          <?php the_excerpt(); ?>
				          <h3><a href="<?php the_permalink(); ?>" class="read-btn read-more-btn hvr-bounce-out">Read More</a></h3>
			      		</div>
					    <div class="post-img">
					      <?php the_post_thumbnail('home-thumb'); ?>
					    </div>
			    	</div>
			    </div>
			</div> 
		</article>
		<?php endwhile; ?>
<?php get_footer(); ?>