<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <div class="row pagetitle-wrapper">
                <div class="col-md-12">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </div>
            </div>
            <?php // include (TEMPLATEPATH . '/inc/meta.php' ); ?>
            <div class="row entry">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
                <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                <?php include (TEMPLATEPATH . '/inc/medium-map.php' ); ?>
            </div>
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
        </div>
        <?php // comments_template(); ?>
    <?php endwhile; endif; ?>
</div>
