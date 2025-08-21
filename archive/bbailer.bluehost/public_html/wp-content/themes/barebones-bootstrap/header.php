<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

    <style type="text/css">
    	body {
    		font-family: 'Roboto', sans-serif;
    		font-weight: 575;
        font-size: 15px;
		}
		.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    		color: #fff;
    		background-color: #4D6A78;
		}

    .menu-item {
      font-size: 15px;
    }
 
    </style>
    
	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>


    <div id="main-container" class="container">

    <nav class="navbar navbar-default" role="navigation" style="height: 256px; width: 1195px; padding: 0px;"">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    
        <div style="position: relative; float: left; padding: 0;">
          <a class="navbar-brand" href="<?php echo home_url(); ?>" style="padding: 0;">
          <img src="<? echo get_template_directory_uri(); ?>/images/bryn.png" style="height: 255px; width: 230px;">
            <?php //bloginfo( 'name' ); ?>
          </a>
        </div>

        <div style="position: relative; float: right; padding: 0;">
          <img src="<?php echo get_template_directory_uri(); ?>/images/banner.gif" style="height: 255px; width: 960px;">
        </div>

      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <!--
      <div class="collapse navbar-collapse">
       <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
      </div>
      -->
      <!-- /.navbar-collapse -->
    </nav>