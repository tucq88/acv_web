<style>
/*============= Custom style for recruit ============*/
.recruit-main-page {
    margin-bottom: 50px;
}

.recruit-intro h1 {
    margin-top: 30px;
    margin-bottom: 20px;
}

.recruit-intro p {
    text-indent: 50px;
    font-size: 16px;
    line-height: 1.6;
}

.recruit-menu {
    margin-top: 30px;
}

.recruit-menu a {
    display: block;
    position: relative;
    overflow: hidden;
    height: 250px;
}

.recruit-menu .menu-intro {
    color: #fff;
    background-color: #D15966;
    font-size: 24px;
    font-weight: 300;
    padding-left: 15px;
    padding-top: 10px;
    position: absolute;
    width: 100%;
    height: 60px;
    bottom: 0;
    z-index: 100;
}

.recruit-menu a img {
    width: 100%;
    height: 100%;
    display: inline-block;
    position: relative;
}

.modal-dialog-center {
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
}
</style>

<?php 
//Testing
$thisCat = get_the_category();
$thisCatID = $thisCat[0]->cat_ID;
debug($thisCa)
?>


<div class="recruit-main-page">
    <div class="recruit-intro">
        <img data-src="holder.js/1140x250" class="img-responsive recruit-banner">
        
        <?php  while (have_posts() && in_category($thisCatID)) :
                the_post(); 
        ?>
            <h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
            
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
    <div class="recruit-menu-list">
        <div class="row">
            <div class="recruit-menu col-md-4">
                <a href="#" data-toggle="modal" data-target="#myModal"> <span class="menu-intro">About
                        us</span> <img data-src="holder.js/800x300" class="img-responsive">
                </a>
            </div>
            <div class="recruit-menu col-md-4">
                <a href="#"> <span class="menu-intro">Lorem ipsum dolor</span> <img
                    data-src="holder.js/800x300" class="img-responsive">
                </a>
            </div>
            <div class="recruit-menu col-md-4">
                <a href="#"> <span class="menu-intro">Lorem ipsum dolor</span> <img
                    data-src="holder.js/800x300" class="img-responsive">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="recruit-menu col-md-4">
                <a href="#"> <span class="menu-intro">Lorem ipsum dolor</span> <img
                    data-src="holder.js/800x300" class="img-responsive">
                </a>
            </div>
            <div class="recruit-menu col-md-4">
                <a href="#"> <span class="menu-intro">Lorem ipsum dolor</span> <img
                    data-src="holder.js/800x300" class="img-responsive">
                </a>
            </div>
            <div class="recruit-menu col-md-4">
                <a href="#"> <span class="menu-intro">Lorem ipsum dolor</span> <img
                    data-src="holder.js/800x300" class="img-responsive">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Tam thoi khong hien thi -->
<div class="hide">
    <div></div>
    <div>
    <?php  while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?>>
            <h2 id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </h2>
    
            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
    
            <div class="entry">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
</div>