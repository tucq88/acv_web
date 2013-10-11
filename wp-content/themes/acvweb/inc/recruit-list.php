<div class="recruit-main-page">
    <div class="recruit-intro">
<!--        <img data-src="holder.js/1140x250" class="img-responsive recruit-banner">-->
        <img  width="1140" height="250" src="<?php bloginfo( 'template_url' ) ?>/img/recruit_top_img.jpg" class="img-responsive recruit-banner">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php /*
            <h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
            */ ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>

    <div class="recruit-menu-list">
        <div class="row">
            <?php
            // show grid page in recruit
            $pages = get_pages('child_of='.$post->ID.'&sort_column=order&sort_order=esc');
            foreach($pages as $post): setup_postdata($post); ?>
                <div class="recruit-menu col-md-4">
                    <a href="<?php the_permalink() ?>">
                        <span class="menu-intro"><?php the_title(); ?></span>
                        <?php if(has_post_thumbnail()):?>
                            <?php the_post_thumbnail('news-medium-thumb', array('class'=>'img-responsive') ); ?>
                        <?php else:?>
                            <img data-src="holder.js/800x300" class="img-responsive">
                        <?php endif ?>
                    </a>
                </div>
            <?php endforeach; ?>

            <?php
            //get category jobs
            $cateJobs = get_category(10);
            // Get the URL of this category
            $category_link = get_category_link( $cateJobs->term_id);
            ?>
            <div class="recruit-menu col-md-4">
                <a href="<?php echo esc_url( $category_link ); ?>">
                    <span class="menu-intro"><?php echo $cateJobs->name ?></span>
                    <img width="800" height="300" class="img-responsive wp-post-image" src="<?php bloginfo( 'template_url' ) ?>/img/job-recruit.jpg">
                </a>
            </div>
        </div>
    </div>
</div>