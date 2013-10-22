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
    <div class="main-wrapper">
        <header>
            <!-- Start Topbar -->
            <div class="topbar-header">
                <div class="container">
                    <ul class="contact nav navbar-nav hidden-xs">
                        <li class="phone"><span class="glyphicon glyphicon-earphone"></span>
                            04-3734-9747
                        </li>
                        <li class="mail"><span class="glyphicon glyphicon-envelope"></span>
                            contact@atmarkcafe.org
                        </li>
                        <li>
                            <span class="glyphicon glyphicon-flag"></span>
                            <!-- Select language-->
                            <?php
                            $instance['type'] = 'dropdown';
                            $instance['hide-title'] = 1;
                            $args['before_widget'] = '<div class="acv-language">';
                            $args['after_widget'] = '</div>';
                            the_widget( 'qTranslateWidget', $instance, $args);
                            ?>
        
                        </li>
                    </ul>
        
                    <!-- Form search -->
                    <?php get_search_form(); ?>
                </div>
    
                <div class="clearfix"></div>
            </div>
            <!-- End Topbar -->
        
            <div class="container">
                <!-- Start Navbar -->
                <div class="topnav-header navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo navbar-brand" href="<?php echo qtrans_convertURL(get_bloginfo('home')); //get_option('home'); ?>/">
                            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="top-logo" class="img-responsive">
                        </a>
                    </div>
    
                    <nav class="navbar-right navbar-collapse collapse" role="navigation">
                        <?php wp_nav_menu(
                            array(
                                'menu'=>'Menu Top1',
                                'menu_id' => '',
                                'menu_class' => 'menu-header nav navbar-nav ',
                                'container' => false,
                                'walker' => new Walker_Nav_Menu_Custom()
                            )
                        ); ?>
                    </nav>
    
                </div>
                <!-- End Navbar -->
            </div>
        </header>
