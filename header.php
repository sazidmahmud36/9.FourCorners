<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hover-min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
 <?php wp_head(); ?>
  </head>
<body>
  <div class="top-bar-custom">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
            <div class="large-3 cell social">
              <a href="#"><i class="fa fa-facebook-square hvr-bounce-out"></i></a>
              <a href="#"><i class="fa fa-twitter-square hvr-bounce-out"></i></a>
              <a href="#"><i class="fa fa-linkedin hvr-bounce-out"></i></a>
              <a href="#"><i class="fa fa-google-plus-square hvr-bounce-out"></i></a>
              <a href="#"><i class="fa fa-youtube hvr-bounce-out"></i></a>
            </div>
            <div class="large-3 cell">
              <span><i class="fa fa-phone-square"></i> Phone: 1 800 555-5555</span>
            </div>
            <div class="large-3 cell">
              <span><i class="fa fa-envelope"></i> Email: info@email.com</span>
            </div>
            <div class="large-3 cell">
              <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="text" name="s" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>

    <header>
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="large-4 columns">
            <h3><a href="index.html"><?php bloginfo('name'); ?></a></h3>
          </div>
          <div class="large-8 columns">
          	<?php wp_nav_menu(array(
          		'theme_location' => 'primary', 
          		'menu_class' => 'menu'
          )); ?>
          </div>
        </div>
      </div>
    </header>