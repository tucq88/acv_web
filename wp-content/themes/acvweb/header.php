<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <!-- Start Topbar -->
            <div class="topbar-header hidden-xs">
                <ul class="contact nav navbar-nav">
                    <li class="phone"><span class="glyphicon glyphicon-earphone"></span>
                        xxx-xxx-xxxx
                    </li>
                    <li class="mail"><span class="glyphicon glyphicon-envelope"></span>
                        contact@sample.domain
                    </li>
                    <li><span class="glyphicon glyphicon-flag"></span>
                        <select>
                            <option>Language</option>
                            <option>English</option>
                            <option>Japan</option>
                        </select>
                    </li>
                </ul>

                <form class="search navbar-right">
                    <input type="text" placeholder="Search here ...">
                </form>
                <div class="clearfix"></div>
            </div>
            <!-- End Topbar -->

            <!-- Start Navbar -->
            <div class="topnav-header navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo navbar-brand" href="<?php echo get_option('home'); ?>/"><img src="holder.js/190x80" class="img-responsive"></a>
                </div>

                <nav class="navbar-right navbar-collapse collapse" role="navigation">
                    <?php wp_nav_menu(
                        array(
                            'menu'=>'Menu',
                            'menu_id' => '',
                            'menu_class' => 'menu-header nav navbar-nav ',
                            'container' => false,
                            'walker' => new Walker_Nav_Menu_Custom()
                        )
                    ); ?>
                </nav>

            </div>
            <!-- End Navbar -->

            <!-- Start main slide -->
            <div class="slider">
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img data-src="holder.js/1140x400/auto/#98dd98:#79b079/text:First slide"
                                 alt="First slide">
                            <div class="container">
                                <div class="carousel-caption">Caption 1</div>
                            </div>
                        </div>
                        <div class="item">
                            <img data-src="holder.js/1140x400/auto/#98dd98:#79b079/text:Second slide"
                                 alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption">Caption 2</div>
                            </div>
                        </div>
                        <div class="item">
                            <img data-src="holder.js/1140x400/auto/#98dd98:#79b079/text:Third slide"
                                 alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption">Caption 3</div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span
                            class="glyphicon glyphicon-chevron-left"></span>
                    </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span
                            class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
                <article class="slogan">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>Pellentesque luctus felis augue, scelerisque porta ligula fermentum at. Proin ultricies faucibus sapien at facilisis</p>
                </article>
            </div>
            <!-- End main slide -->
        </div>
    </header>
