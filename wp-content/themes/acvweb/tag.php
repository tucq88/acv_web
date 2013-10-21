<?php get_header(); ?>

    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="row pagetitle-wrapper">
                <div class="col-md-12">
                    <h3><?php _e('Posts Tagged', 'acvweb'); ?> &nbsp; &#8216;<?php single_tag_title(); ?>&#8217;</h3>
                </div>
            </div>
            <br>
            <?php include (TEMPLATEPATH . '/inc/news-list.php' ); ?>
            <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

        <?php else : ?>

            <h2><?php _e('Nothing found', 'acvweb'); ?></h2>

        <?php endif; ?>
    </div>

<?php get_footer(); ?>