<?php get_header(); ?>
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