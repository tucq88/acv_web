<?php get_header(); ?>
<?php /*
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

 */ ?>

<?php //get_sidebar(); ?>
    <div class="main">
        <!-- slide -->
        <?php 
            if (is_front_page() || is_home()) {
                include (TEMPLATEPATH . '/inc/slider.php');
            }
        ?>
        <!-- out service -->
        <?php include (TEMPLATEPATH . '/inc/services.php'); ?>

        <!-- latest post -->
        <?php include (TEMPLATEPATH . '/inc/latest-post.php'); ?>

        <!-- popular post -->
        <?php include (TEMPLATEPATH . '/inc/popular-post.php'); ?>

        <!-- contact us -->
        <?php include (TEMPLATEPATH . '/inc/contact-us.php'); ?>
    </div>

<?php get_footer(); ?>