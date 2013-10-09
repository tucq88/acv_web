<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-xs-12 ">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
        </div>
        <div class="col-sm-4 hidden-xs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
                <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <p>I'm in Section 1.</p>
                </div>
                <div class="tab-pane" id="tab2">
                    <p>Howdy, I'm in Section 2.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>