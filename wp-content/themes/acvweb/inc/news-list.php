<div class="news">
    <?php  while (have_posts()) : the_post(); ?>

        <div <?php post_class() ?>>

            <div class="title-news" id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink() ?>"><span><?php the_title(); ?></span></a>
                <em class="pull-right"><?php the_time('d.m.Y') ?></em>
            </div>

            <?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
            <?php the_post_thumbnail('post-thumbnail', array('class'=>'img-responsive img-center') ) ?>
            <div class="content-news">
                <?php the_content(); ?>
            </div>

        </div>

    <?php endwhile; ?>
</div>