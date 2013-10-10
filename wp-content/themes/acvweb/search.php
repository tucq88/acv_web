<style>
.pagetitle-wrapper {
    padding: 0px 10px 10px 10px;
    background: #ededed;
}
.pagetitle-wrapper h3 {
    color: #01AFEE;
    font-weight : 300;
}
.searchtitle-time {
    background: #D15966;
    color : #fff !important;
    font-size : 13px !important;
    text-align : center;
}
.searchtitle-info {
    padding : 5px 10px;
    font-size : 11px;
    color : #acb0b5;
    margin-top : 5px;
}
.searchtitle-content {
    padding : 0px 10px;
}
.searchtitle-link {
    font-size : 22px;
    text-decoration: none !important;
    font-weight : 300;
}
.sidebar-custom {
    padding : 10px;
}
.sidebar-custom ul {
    padding-left : 0px;
}
.sidebar-custom li {
    list-style : none; 
    border-bottom : 1px solid #979797;
    padding : 10px;
}
.sidebar-custom a {
    text-decoration: none !important;
    color : #979797;
}
</style>
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