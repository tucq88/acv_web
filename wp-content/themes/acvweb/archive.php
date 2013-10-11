<?php get_header(); ?>
<div class="container">
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php $categoryNews = false; $categoryRecruit = false; ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
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
<!--				<h2>Archive for the &#8216;--><?php //single_cat_title(); ?><!--&#8217; Category</h2>-->

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                <?php $categoryNews = true; ?>
                <div class="row pagetitle-wrapper">
                    <div class="col-md-12">
                        <h3><?php _e('Posts Tagged', 'acvweb'); ?> &nbsp; &#8216;<?php single_tag_title(); ?>&#8217;</h3>
                    </div>
                </div>
                <br>
<!--				<h2>Posts Tagged &#8216;--><?php //single_tag_title(); ?><!--&#8217;</h2>-->

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2>Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2>Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2>Blog Archives</h2>
			
			<?php } ?>


			<?php //include (TEMPLATEPATH . '/inc/nav.php' ); ?>

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

<?php //get_sidebar(); ?>

<?php get_footer(); ?>