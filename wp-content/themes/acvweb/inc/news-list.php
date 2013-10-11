<div class="row pagetitle-wrapper">
    <div class="col-md-12">
        <h3>
            <?php single_cat_title(); ?>
        </h3>
    </div>
</div>
<br><br>
<div class="news">
    <?php  while (have_posts()) : the_post(); ?>

        <div <?php post_class() ?>>

            <div class="title-news" id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink() ?>"><span><?php the_title(); ?></span></a>
                <em class="pull-right"><?php the_time('d.m.Y') ?></em>
            </div>

            <?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
            <p>
            <?php the_post_thumbnail('news-medium-thumb', array('class'=>'img-responsive img-center full-width') ) ?>
            </p>
            <div class="entry">
                <?php the_excerpt() ;?>
            </div>

        </div>

    <?php endwhile; ?>
</div>