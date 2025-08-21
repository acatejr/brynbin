<?php get_header(); ?>

<div class="row">

	<div class="col-md-3">

		<!--
		-->
		
		<?php 
			wp_nav_menu( array('menu' => 'Main Menu', 'menu_class' => 'nav nav-pills nav-stacked', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); 
			//wp_nav_menu( array( 'menu_class' => 'nav nav-pills nav-stacked', 'theme_location' => 'primary' ) );
		?>

		<?php
		 if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : //  Sidebar name
	    ?>
		<?php
			endif;
		?>

		<br/>
		<a href="https://twitter.com/BrynBailer" class="twitter-follow-button" data-show-count="false">Follow @BrynBailer</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<br/>
		
	</div>

	<div class="col-md-9">

		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php //the_title('<h2>','</h2>'); ?>
		 		<?php the_content(); ?>
			</div>
			<?php
			if (is_singular()) {
				// support for pages split by nextpage quicktag
				wp_link_pages();

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				// Previous/next post navigation.
				// the_post_navigation( array(
				// 	'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
				// 		'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
				// 		'<span class="post-title">%title</span>',
				// 	'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
				// 		'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
				// 		'<span class="post-title">%title</span>',
				// ) );

				// // tags anyone?
				// the_tags();
			}
			?>
		   <?php endwhile; ?>

		<?php if (!is_singular()) : ?>
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php endif; ?>

		<?php else : ?>

		<div class="alert alert-info">
		  <strong>No content in this loop</strong>
		</div>

		<?php endif; ?>
	</div>

</div>




<?php get_footer(); ?>