<?php get_header() ?>
	<section class="title-section">
      <p class="welcome-text">Welcome to</p>
      <h1>Gallery</h1>
      <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</p>
    </section>



<?php $gallery_query = new WP_Query( array('category_name' => 'gallery' )); ?>


<section class="gallery">
      <div class="grid-x grid-padding-x grid-container">
        <?php while ($gallery_query -> have_posts()): $gallery_query -> the_post(); ?>
          <div class="large-4 small-12 columns">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'hvr-grow')); ?></a>
          </div>
        <?php endwhile; ?>
      </div>
    </section>

<?php get_footer(); ?>