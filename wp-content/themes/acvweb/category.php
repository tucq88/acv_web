<?php get_header(); ?>
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php $categoryNews = false; $categoryRecruit = false; ?>
            <?php
                $categoryID = the_category_ID(false);
                if($categoryID==7){
                    //category news
                    $categoryNews = true;
                }elseif($categoryID==10){
                    //category recruit
                    $categoryRecruit = true;
                }
            ?>
            <?php
            if($categoryNews===true){
                include (TEMPLATEPATH . '/inc/news-list.php' );
            }elseif($categoryRecruit===true){
                include (TEMPLATEPATH . '/inc/job-list.php' );
            }else{
                while (have_posts()) : the_post(); ?>
                    <div <?php post_class() ?>>
                        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
                        <div class="entry">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile;
            }
            ?>
            <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
        <?php else : ?>
            <h2><?php _e('Nothing found', 'acvweb'); ?></h2>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>