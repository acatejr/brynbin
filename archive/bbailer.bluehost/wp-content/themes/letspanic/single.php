<?php get_header(); ?>

 <!-- posts  -->
<div id="posts" class="span-16 prepend-1 append-1">
	<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
	
		<div class="post" id="post-<?php the_ID(); ?>">
			<table style="padding:0;margin:0;"><tr><td style="padding:0;margin:0;"><div  id="category"><?php the_category(', '); ?></div>
				<div id="posttitle">
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2></td><td style="text-align:right">
					<span id="postmeta"><?php the_time('j F'); ?></span></td></tr></table>
			<div id="postauthor"><?php the_author_link(); ?></div>

			<div class="postcontent"><?php the_content(__('<br/>Read more...')); ?></div>
			<div class="posttags"><?php the_tags('Tags: ', ', ', ''); ?></div>			<div class="postheader">
				<div id="commentcount">
					<a href="<?php comments_link(); ?>">
					<?php comments_number(__('0'), __('1'), __('%')) ?> 
					</a>
				</div>
			</div>
		</div><hr>
		
		<?php comments_template(); ?>
	<?php endwhile; ?>
	
	<div class="navlinks">		
		<a href="#posts"><img src="<?php bloginfo('template_directory'); ?>/images/backtotopicon.gif" alt="Back to top" />Top</a>
	</div>
	
	<?php else : ?>
	
	<div class="post">
		<h2>Not found!</h2>
		<p><?php _e('Sorry, the requested page was not found. You can try search for even better page.'); ?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>	
	</div>
		
<?php endif; ?>
</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>