<?php
	
// Add RSS links to <head> section
automatic_feed_links();

// Load jQuery
if ( !is_admin() ) {
    // register style
    wp_register_style( 'bootstrap-style', get_bloginfo('template_directory').'/css/bootstrap.css');
    wp_enqueue_style( 'bootstrap-style' );
    wp_register_style( 'override-style', get_bloginfo('template_directory').'/css/override.css');
    wp_enqueue_style( 'override-style' );
    wp_register_style( 'custom-style', get_bloginfo('template_directory').'/css/custom.css' );
    wp_enqueue_style( 'custom-style' );
}

// Clean up the <head>
function removeHeadLinks() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Declare sidebar widget zone
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar Widgets',
        'id'   => 'sidebar-widgets',
        'class'         => 'nav-list',
        'description'   => 'These are widgets for the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-custom">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="searchtitle-link">',
        'after_title'   => '</h3>'
    ));
}

// create menu support for theme.
if (function_exists('register_nav_menus')) {
    register_nav_menus (
        array(
            'main_nav' => 'Main Navigation Menu'
        )
    );
}

// create post thumbnail
if(function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

/**
 *  static function
 *
 * @param $str
 * @param $chars
 * @param $to_space
 * @param string $replacement
 * @return string
 */
function truncateString($str, $chars, $to_space, $replacement="...") {
    if($chars > strlen($str)) return $str;

    $str = substr($str, 0, $chars);

    $space_pos = strrpos($str, " ");
    if($to_space && $space_pos >= 0) {
        $str = substr($str, 0, strrpos($str, " "));
    }

    return($str . $replacement);
}

// config length excerpt
function new_excerpt_length($length) {
    return $length;
}
add_filter('excerpt_length', 'new_excerpt_length');
// Changing excerpt more
function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * Override to wp-includes\nav-menu-template.php
 *
 * Create HTML list of nav menu items.
 *
 * @package WordPress
 * @since 3.0.0
 * @uses Walker
 */
class Walker_Nav_Menu_Custom extends Walker_Nav_Menu {

    /**
     * @see Walker::start_lvl()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of page. Used for padding.
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        //custom by HoaNX: change class ul from sub-menu to dropdown-menu
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param int $current_page Menu item ID.
     * @param object $args
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a'.($args->has_children ? ' data-toggle="dropdown" class="dropdown-toggle" href="javascript:void()"' : '' ). $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= $args->has_children ? '&nbsp;<b class="caret"></b>' : '' ;
        $item_output .= '</a>';

        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    /**
     * add has children to start_el function
     *
     * @see Walker->display_element
     *
     * @param object $element Data object
     * @param array $children_elements List of elements to continue traversing.
     * @param int $max_depth Max depth to traverse.
     * @param int $depth Depth of current element.
     * @param array $args
     * @param string $output Passed by reference. Used to append additional content.
     * @return null Null on failure with no changes to parameters.
     */
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
    {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }


}

load_theme_textdomain( 'acvweb', get_template_directory() . '/languages' );

function breadcrumbs($option = array(), $showTime = false) {

    //Variable (symbol >> encoded) and can be styled separately.
    //Use >> for different level categories (parent >> child >> grandchild)
    $delimiter = '<span> &raquo; </span>';
    //Use bullets for same level categories ( parent . parent )
    $delimiter1 = '<span> &bull; </span>';
    //text link for the 'Home' page
    $main = __('Home', 'acvweb');
    //Display only the first 30 characters of the post title.
    $maxLength= 30;
    //variable for archived year
    $arc_year = get_the_time('Y');
    //variable for archived month
    $arc_month = get_the_time('F');
    //variables for archived day number + full
    $arc_day = get_the_time('d');
    $arc_day_full = get_the_time('l');
    //variable for the URL for the Year
    $url_year = get_year_link($arc_year);
    //variable for the URL for the Month
    $url_month = get_month_link($arc_year,$arc_month);
    /*is_front_page(): If the front of the site is displayed, whether it is posts or a Page. This is true
    when the main blog page is being displayed and the 'Settings > Reading ->Front page displays'
    is set to "Your latest posts", or when 'Settings > Reading ->Front page displays' is set to
    "A static page" and the "Front Page" value is the current Page being displayed. In this case
    no need to add breadcrumb navigation. is_home() is a subset of is_front_page() */
    //Check if NOT the front page (whether your latest posts or a static page) is displayed. Then add breadcrumb trail.
    if (!is_front_page()) {
    //If Breadcrump exists, wrap it up in a div container for styling.
    //You need to define the breadcrumb class in CSS file.
        echo '<div class="'.(isset($option['class']) ? $option['class'] : '').'">';
        //global WordPress variable $post. Needed to display multi-page navigations.
        global $post, $cat;
        //A safe way of getting values for a named option from the options database table.
        $homeLink = qtrans_convertURL(get_bloginfo('home')); // get_option('home'); //same as: $homeLink = get_bloginfo('url');
        //If you don't like "You are here:", just remove it.
        echo '<a href="' . $homeLink . '">' . $main . '</a>' . $delimiter;
        //Display breadcrumb for single post
        if (is_single()) { //check if any single post is being displayed.
        //Returns an array of objects, one object for each category assigned to the post.
        //This code does not work well (wrong delimiters) if a single post is listed
        //at the same time in a top category AND in a sub-category. But this is highly unlikely.
            $category = get_the_category();
            $num_cat = count($category); //counts the number of categories the post is listed in.
            //If you have a single post assigned to one category.
            //If you don't set a post to a category, WordPress will assign it a default category.
            if ($num_cat <=1)  //I put less or equal than 1 just in case the variable is not set (a catch all).
            {
                echo get_category_parents($category[0],  true,' ' . $delimiter . ' ');
                //Display the full post title.
                echo ' <span class="news-select">' . get_the_title() .'</span>';
            }
            //then the post is listed in more than 1 category.
            else {
                //Put bullets between categories, since they are at the same level in the hierarchy.
                echo the_category( $delimiter1, multiple);
                //Display partial post title, in order to save space.
                if (strlen(get_the_title()) >= $maxLength) { //If the title is long, then don't display it all.
                    echo ' <span>' . $delimiter . trim(substr(get_the_title(), 0, $maxLength)) . ' …</span>';
                }
                else { //the title is short, display all post title.
                    echo ' <span>' . $delimiter . get_the_title().'</span>';
                }
            }

            //add custom show create time post single
            if($showTime===true){
                echo '<em class="pull-right">'. get_the_time('d.m.Y') .'</em>';
            }
        }
        //Display breadcrumb for category and sub-category archive
        elseif (is_category()) { //Check if Category archive page is being displayed.
            //returns the category title for the current page.
            //If it is a subcategory, it will display the full path to the subcategory.
            //Returns the parent categories of the current category with links separated by '»'
            echo 'Archive Category: "' . get_category_parents($cat, true,' ' . $delimiter . ' ') . '"' ;
        }
        //Display breadcrumb for tag archive
        elseif ( is_tag() ) { //Check if a Tag archive page is being displayed.
            //returns the current tag title for the current page.
            echo 'Posts Tagged: "' . single_tag_title("", false) . '"';
        }
        //Display breadcrumb for calendar (day, month, year) archive
        elseif ( is_day()) { //Check if the page is a date (day) based archive page.
            echo '<a href="' . $url_year . '">' . $arc_year . '</a> ' . $delimiter . ' ';
            echo '<a href="' . $url_month . '">' . $arc_month . '</a> ' . $delimiter . $arc_day . ' (' . $arc_day_full . ')';
        }
        elseif ( is_month() ) {  //Check if the page is a date (month) based archive page.
            echo '<a href="' . $url_year . '">' . $arc_year . '</a> ' . $delimiter . $arc_month;
        }
        elseif ( is_year() ) {  //Check if the page is a date (year) based archive page.
            echo $arc_year;
        }
        //Display breadcrumb for search result page
        elseif ( is_search() ) {  //Check if search result page archive is being displayed.
            echo 'Search Results for: "' . get_search_query() . '"';
        }
        //Display breadcrumb for top-level pages (top-level menu)
        elseif ( is_page() && !$post->post_parent ) { //Check if this is a top Level page being displayed.
            echo get_the_title();
        }
        //Display breadcrumb trail for multi-level subpages (multi-level submenus)
        elseif ( is_page() && $post->post_parent ) {  //Check if this is a subpage (submenu) being displayed.
            //get the ancestor of the current page/post_id, with the numeric ID
            //of the current post as the argument.
            //get_post_ancestors() returns an indexed array containing the list of all the parent categories.
            $post_array = get_post_ancestors($post);
            //Sorts in descending order by key, since the array is from top category to bottom.
            krsort($post_array);
            //Loop through every post id which we pass as an argument to the get_post() function.
            //$post_ids contains a lot of info about the post, but we only need the title.
            foreach($post_array as $key=>$postid){
                //returns the object $post_ids
                $post_ids = get_post($postid);
                //returns the name of the currently created objects
                $title = $post_ids->post_title;
                //Create the permalink of $post_ids
                echo '<a href="' . get_permalink($post_ids) . '">' . $title . '</a>' . $delimiter;
            }
            the_title(); //returns the title of the current page.
        }
        //Display breadcrumb for author archive
        elseif ( is_author() ) {//Check if an Author archive page is being displayed.
            global $author;
            //returns the user's data, where it can be retrieved using member variables.
            $user_info = get_userdata($author);
            echo  'Archived Article(s) by Author: ' . $user_info->display_name ;
        }
        //Display breadcrumb for 404 Error
        elseif ( is_404() ) {//checks if 404 error is being displayed
            echo  'Error 404 – Not Found.';
        }
        else {
        //All other cases that I missed. No Breadcrumb trail.
        }
        echo '</div>';
    }
}

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'news-large-thumb', 712, 240, true ); //(cropped)
    add_image_size( 'news-small-thumb', 356, 240, true ); //(cropped)
    add_image_size( 'news-medium-thumb', 800, 400, true ); //(cropped)
}

?>