<?php get_header(); ?>
    <div class="container">
        <div class="row pagetitle-wrapper">
            <div class="col-md-12">
                <h3>
                    <span class="glyphicon glyphicon-search"></span> 
                    <?php _e('Search Results for ', 'acvweb') ?>
                    <?php echo '"' . $_GET['s'] . '"' ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
            	<?php if (have_posts()) : ?>
            		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
            
            		<?php while (have_posts()) : the_post(); ?>
            			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            			    <div class="row">
            			        <div class="col-sm-3">
            			            <div class="searchtitle-time searchtitle-info"><?php the_time('F jS, Y') ?></div>
            			            <div class="searchtitle-info">
            			                <span class="glyphicon glyphicon-user"></span>  
            			                <i><?php the_author() ?></i>
        			                </div>
            			            <div class="searchtitle-info">
            			                <span class="glyphicon glyphicon-comment"></span>  
            			                <i><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></i>
        			                </div>
            			        </div>
            			        <div class="col-sm-9">
            			            <div class="searchtitle-content">
                			            <h4><a href="<?php the_permalink() ?>" class="searchtitle-link"><span><?php the_title(); ?></span></a></h4>
                			            <div>
                        					<?php the_excerpt(); ?>
                        				</div>
                    				</div>
            			        </div>
            			    </div>
                            <?php // include (TEMPLATEPATH . '/inc/meta.php' ); ?>
            				
            			</div>
                        <hr>
        				
            		<?php endwhile; ?>
            		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
            
            	<?php else : ?>
            
            		<h4>No posts found.</h4>
            
            	<?php endif; ?>
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>