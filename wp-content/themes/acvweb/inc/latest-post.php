<div class="latest main-block">
    <h1 class="block-title"><span>LATEST POSTS</span></h1>
    <div class="latest-content container">

        <?php
        $defaults = array(
            'numberposts' => 10, 'offset' => 0,
            'category' => 0, 'orderby' => 'post_date',
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
                $maxWidth = 3000;

            ?>
            <?php foreach($latestPost as $post):
                setup_postdata($post);
                $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail' );
                $imgwidth = $imgdata[1]; // thumbnail's width
                $imgheight = $imgdata[2]; // thumbnail's height
                $totalWidth += $imgwidth+14;
                if($imgwidth == 712)
                    $col =2;
                else
                    $col =1;

                if ($totalWidth < $maxWidth):
                    if($i==0): ?>
                        <div style="width: <?php echo $maxWidth ?>px;">
                    <?php endif; ?>
                            <article class="<?php echo ($col == 2) ? 'two' : 'one';?>">
                                <?php the_post_thumbnail() ?>
                                <div class="description">
                                    <time><?php echo date('Y/m/d', strtotime($post->post_date)) ?></time>
                                    <h4><?php the_title() ?></h4>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink() ?>" class="read-more btn btn-default">Read More</a>
                                </div>
                            </article>
                <?php
                else:
                    $totalWidth = $imgwidth+14; ?>
                        </div>
                        <div style="width: <?php echo $maxWidth ?>px;">
                            <article class="<?php echo ($col == 2) ? 'two' : 'one';?>">
                                <?php the_post_thumbnail() ?>
                                <div class="description">
                                    <time><?php echo date('Y/m/d', strtotime($post->post_date)) ?></time>
                                    <h4><?php the_title() ?></h4>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink() ?>" class="read-more btn btn-default">Read More</a>
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