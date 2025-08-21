<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="7 Days" />

	<title>
		<?php if ( is_home() ) { ?><? bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php echo $s; ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php wp_title(''); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_category() ) { ?>Archives <?php single_cat_title(); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_month() ) { ?>Archives <?php the_time('F'); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_tag() ) { ?><?php single_tag_title();?> | <? bloginfo('name'); ?><?php } ?>
	</title>
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/screen.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/print.css" type="text/css" media="print" /> 
	<!--[if IE]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
	<!--[if lt IE 7]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ielt7.css" type="text/css" media="screen, projection" />
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="shortcut icon" type="image/x-png" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>	
</head>

<body>
	<div>
		<div id="top" class="span-24">
	<table width="100%" border="1"><tr><td id="title" class="span-15 prepend-1" align="left" width="20px" style="width:20px;"><a href="<?php bloginfo('url'); ?>"><img align="left" class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" align="left" style="margin-top: 20px;"></a></td><td style="text-align:left;" align="left" id="header">
						<h1 style="text-align:left;" align="left" id="title" STYLE="word-break: keep-all"><?php echo str_replace(' ','&nbsp;',get_bloginfo('name')); ?></h1>
						<h2 style="text-align:left;" align="left" id="descr" STYLE="word-break: keep-all"><?php echo str_replace(' ','&nbsp;',get_bloginfo('description')); ?></h2>
				</td><td class="menu" style="text-align:right"></td><td width="200px;">
				<ul style="margin-right:0;" style="text-align:right">
					<li class="page_item <?php if ( is_home() ) { ?>current_page_item<?php } ?>"><a href="<?php bloginfo('url'); ?>">Home</a></li>
					<?php wp_list_pages('title_li=&depth=-1&sort_column=ID'); ?>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to RSS">RSS <img src="<?php bloginfo('template_directory'); ?>/images/feed.png" alt="Подписаться на RSS" /></a></li>
				</ul>
		</td></tr></table><hr class="hr1">
		<div id="contentwrapper" class="span-24" style="margin-top: 20px;">
			<?/*здесь мог бы быть банер
			<?php if (file_exists(TEMPLATEPATH . '/' . 'banner.html')) : ?>
			<div id="bannercontainer" class="span-22 prepend-1 append-1 last">
				<div id="banner">
					<div id="bannertext" class="span-15">
						<?php readBanner('banner.html'); ?>
					</div><!--А тут может быть картинка для баннера-->
				</div>
			</div>
			<?php endif; ?>*/?>
