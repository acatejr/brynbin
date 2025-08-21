<?php get_header(); ?>



 <!-- posts  -->
<div id="posts" class="span-16 prepend-1 append-1" style="margin:0;padding:0;">
	<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); 
	
	$in=false;
$c=get_the_category();
if($c[0]->term_id==4||$c[1]->term_id==4||$c[2]->term_id==4||$c[3]->term_id==4)
	$in=true;?>
		<div class="post" id="post-<?php the_ID(); ?>" style="margin-left: 30px;">
			<table style="padding:0;margin:0;"><tr><td style="padding:0;margin:0;"><div  id="category"><?php the_category(', '); ?></div>
				<div id="posttitle">
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2></td><td style="text-align:right">
					<span id="postmeta"><?php the_time('j F'); ?></span></td></tr></table>
			<?if(!$in){?><div id="postauthor"><?php the_author_link(); ?></div><?}?>

			<table style="padding:0;"><tr><td><div class="postcontent"><?php the_content(__('<br/>Continue reading...')); ?></div></td><?if($in){?><td style="vertical-align: bottom;" valign="bottom"><div id="postauthor" style="float:right;position:relative;top:-20px;"><?php the_author_link(); ?></div></td><?}?></tr></table>
			<div class="posttags"><?php the_tags('Tags: ', ', ', ''); ?></div>			<div class="postheader">
				<div style="height: 30px; vertical-align:middle;" class="commentcounttext"><div id="commentpic"><img src="<?=bloginfo('template_directory');?>/images/count.png"></div><div id="commentcount">
					<a href="<?php comments_link(); ?>">
					<?php comments_number(__('0'), __('1'), __('%')) ?> 
					</a>
				</div> <div class="comms">comments</div></div>
			</div>
		</div><hr class="hr2">
		
	<?php endwhile; ?>
	
<div align="left" width="90%"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div><?/*
	<div class="navlinks">
		<?php next_posts_link('&laquo; Previous posts') ?> <?php previous_posts_link('Next posts &raquo;') ?><br/><br/>
		<a href="#posts"><img src="<?php bloginfo('template_directory'); ?>/images/backtotopicon.gif" alt="Back to top" />Back to top</a>
	</div>*/?>
	
	<?php else : ?>
	
	<div class="post">
		<h2>Not found!</h2>
		<p><?php _e('Please, go to the gym, rest a bit or find a girlfriend. Possibly, it wil help you to find the thing you requested.'); ?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>	
	</div>
		
<?php endif; ?>
</div>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>