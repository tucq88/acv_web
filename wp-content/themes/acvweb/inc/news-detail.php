<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12 ">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div style="color: #666562;" <?php post_class() ?> id="post-<?php the_ID(); ?>">

                    <h2><?php the_title(); ?></h2>
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(array('class' => 'breadcrumbs-news'), true); ?>

                    <?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>

                    <div class="content-news">

                        <?php the_content(); ?>

                        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                        <?php the_tags( 'Tags: ', ', ', ''); ?>

                    </div>

                    <?php edit_post_link('Edit this entry','','.'); ?>

                </div>

                <?php comments_template(); ?>

            <?php endwhile; endif; ?>


        </div>
        <div class="col-md-4 col-sm-4 top-menu-left">

            <ul class="nav nav-tabs menu-left hidden-sm">
                <li class="active"><a href="#tab1" data-toggle="tab"><?php _e('Latest posts', 'acvweb'); ?></a></li>
                <li><a href="#tab2" data-toggle="tab"><?php _e('Prelated news', 'acvweb'); ?></a></li>
            </ul>

            <ul class="nav menu-left visible-sm">
                <li class="active"><a href="#tab1" data-toggle="tab"><?php _e('Latest posts', 'acvweb'); ?></a></li>
                <li><a href="#tab2" data-toggle="tab"><?php _e('Prelated news', 'acvweb'); ?></a></li>
            </ul>

            <div class="tab-content content-left">
                <!-- latest post -->
                <div class="tab-pane active tab1-left" id="tab1">
                <?php
                    $defaults = array(
                        'numberposts' => 8, 'offset' => 0,
                        'category' => $categoryID, 'orderby' => 'post_date',
                        'order' => 'DESC', 'include' => '',
                        'exclude' => '', 'meta_key' => '',
                        'meta_value' =>'', 'post_type' => 'post', 'post_status' => 'publish',
                        'suppress_filters' => true
                    );
                    $latestPost = wp_get_recent_posts($defaults, OBJECT); // get recent posts
                    if($latestPost):
                        foreach($latestPost as $post):
//                            echo '<pre>'; var_dump($post); die();
                            setup_postdata($post);
                ?>
                    <div class="post-item list-inline">
                        <div class="pull-left post-img">
                            <?php the_post_thumbnail('thumbnail', array('class'=>'img-responsive')) ?>
                        </div>
                        <div class="post-description">
                            <h5><a href="<?php the_permalink() ?>" class=""><?php the_title() ?></a></h5>
                            <?php echo truncateString(get_the_excerpt(), 100, 1) ; ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                <?php
                        endforeach;
                        wp_reset_postdata();
                    endif;
                ?>
                </div>

                <!-- prelate post -->
                <div class="tab-pane tab2-left" id="tab2">
                    <p>Howdy, I'm in Section 2.</p>
                </div>
            </div>
        </div>
    </div>
</div>