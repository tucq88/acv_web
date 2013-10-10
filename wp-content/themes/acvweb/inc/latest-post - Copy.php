<div class="latest main-block">
    <h1 class="block-title"><span><?php _e('LATEST POSTS', 'acvweb'); ?></span></h1>
    <div class="latest-content container">

        <?php
        $defaults = array(
            'numberposts' => 15, 'offset' => 0,
            'category' => 7, 'orderby' => 'post_date',
            'order' => 'DESC', 'include' => '',
            'exclude' => '', 'meta_key' => '',
            'meta_value' =>'', 'post_type' => 'post', 'post_status' => 'draft, publish, future, pending, private',
            'suppress_filters' => true
        );
        $latestPost = wp_get_recent_posts($defaults, OBJECT); // get recent posts?>
        <?php //$latestPost = get_posts('numberposts=10&order=DESC&orderby=post_date'); ?>
        <?php //echo '<pre>'; var_dump($latestPost); die(); ?>
        <?php if($latestPost):
                $totalWidth = $i = 0;
                $maxWidth = 3800;
            ?>
            <?php foreach($latestPost as $post):
                setup_postdata($post);

                // $col = rand(1, 2);
                if($i%3==0){
                    $col = 2;
                }else{
                    $col = 1;
                }
                if($col==1):
                    $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'news-small-thumb' );
                else:
                    $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'news-large-thumb' );
                endif;
                $imgwidth = $imgdata[1]; // thumbnail's width
                $imgheight = $imgdata[2]; // thumbnail's height
                $totalWidth += $imgwidth+14;
                /*
                if($imgwidth == 712)
                    $col =2;
                else
                    $col =1;
                */

                if ($totalWidth < $maxWidth):
                    if($i==0): ?>
                        <div style="width: <?php echo $maxWidth ?>px;">
                    <?php endif; ?>
                            <article class="<?php echo ($col == 2) ? 'two' : 'one';?>">
                                <?php (($col == 1) ? the_post_thumbnail('news-small-thumb') : the_post_thumbnail('news-large-thumb')) ?>
                                <div class="description">
                                    <time><?php the_time('F jS, Y') ?></time>
                                    <h4><?php the_title() ?></h4>
                                    <?php echo truncateString(get_the_excerpt(), 100, 1); ?>
                                    <a href="<?php the_permalink() ?>" class="read-more btn btn-default"><?php _e('Read More', 'acvweb'); ?></a>
                                </div>
                            </article>
                <?php
                else:
//                    if($col==1){
//                        $col = 2;
//                    }elseif($col==2){
//                        $col = 1;
//                    }
                    $totalWidth = $imgwidth+14; ?>
                        </div>
                        <div style="width: <?php echo $maxWidth ?>px;">
                            <article class="<?php echo ($col == 2) ? 'two' : 'one';?>">
                                <?php (($col == 1) ? the_post_thumbnail('news-small-thumb') : the_post_thumbnail('news-large-thumb')) ?>
                                <?php //the_post_thumbnail() ?>
                                <div class="description">
                                    <time><?php the_time('F jS, Y') ?></time>
                                    <h4><?php the_title() ?></h4>
                                    <?php echo truncateString(get_the_excerpt(), 100, 1); ?>
                                    <a href="<?php the_permalink() ?>" class="read-more btn btn-default"><?php _e('Read More', 'acvweb'); ?></a>
                                </div>
                            </article>
                <?php
                endif;
                $i++;
                ?>

            <?php endforeach; wp_reset_postdata(); ?>
                            </div>
        <?php endif; ?>

    </div>
</div>