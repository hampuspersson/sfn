<?php
/* Template name: Page with header image */
get_header();
?>
<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
<div class="main">
	<?php if (have_posts()) while (have_posts()) : the_post(); ?>
		<div class="box full-post">
			<p class="post-meta"><span class="date"><?php the_time( get_option( 'date_format' ) ) ?></span> <?php if ( comments_open() ) : ?>, <span class="comments"><?php comments_popup_link( _x( '0', 'comments number', 'gray_white_black' ), _x( '1', 'comments number', 'gray_white_black' ), _x( '%', 'comments number', 'gray_white_black' ) ); ?></span> <?php endif; ?> </p>
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<p class="pages"><strong>'.__('Pages', 'gray_white_black').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<?php if ( comments_open() ) : ?>
			<div id="comments" class="box comments"><?php comments_template(); ?></div>
		<?php endif; ?>
		<p class="pages"><?php wp_link_pages(); ?></p>
	<?php endwhile; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>