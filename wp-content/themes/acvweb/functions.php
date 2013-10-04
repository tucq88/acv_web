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

    // register script
    wp_register_script('html5shiv', get_bloginfo('template_directory').'/js/html5shiv.js');
    wp_enqueue_script('html5shiv');
    wp_register_script('respond.min', get_bloginfo('template_directory').'/js/respond.min.js');
    wp_enqueue_script('respond.min');

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
        'description'   => 'These are widgets for the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
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
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');


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
?>