<p>list recruit</p>
<?php  while (have_posts()) : the_post(); ?>

    <div <?php post_class() ?>>

        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

        <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

        <div class="entry">
            <?php the_content(); ?>
        </div>

    </div>

<?php endwhile; ?>