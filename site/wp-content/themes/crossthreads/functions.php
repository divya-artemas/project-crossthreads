<?php 
// Register custom navigation walker

add_theme_support( 'menus' );
/***************** Thumbnail Display *********************/
add_theme_support( 'post-thumbnails' );
/***************** End Thumbnail Display *****************/

/**************Woocommerce ****************************/
add_theme_support( 'woocommerce' );



/*************** wp_nav_menu *****************************/
register_nav_menus( array('header' => __('Header Navigation', 'crossthreads')));

/*************** end wp_nav_menu **************************/

/*************** wp_nav_menu footer *****************************/
register_nav_menus( array('footer' => __('Footer Navigation', 'crossthreads')));
/*************** end wp_nav_menu footer **************************/

/*************** Theme Scripts   **************************/
function crossthreads_scripts_styles() {
  /*
   * Adds JavaScript to pages with the comment form to support<p class="navLabelTxt">your questions</p>
   * sites with threaded comments (when in use).
   */
  // Add Genericons font, used in the main stylesheet.
 
  wp_enqueue_style( 'artemas-aos', get_template_directory_uri() . '/css/aos.css', array(), '1.00' ); 
  wp_enqueue_style( 'artemas-style', get_template_directory_uri() . '/css/default.css', array(), '1.00' );
  wp_enqueue_style( 'artemas-menu', get_template_directory_uri() . '/css/menu.css', array(), '1.00' );
  wp_enqueue_style( 'artemas-mobile', get_template_directory_uri() . '/css/mobile.css', array(), '1.00' );   
  wp_enqueue_style( 'artemas-flickity', get_template_directory_uri() . '/css/flickity.css', array(), '1.00' ); 
   
}

add_action( 'wp_enqueue_scripts', 'crossthreads_scripts_styles' );
/*************** end Theme Scripts ************************/

// Customising the body_class()
function custom_body_class( $classes ) {
  global $post;
  if(is_front_page()) {
    $classes[] = ' ';
  } 
  else {
    $classes[] = 'white-bg';
  }
  return $classes;     
}
add_filter( 'body_class','custom_body_class' );


/************** walker_nav_menu ****************************/
class themeslug_walker_nav_menu extends Walker_Nav_Menu {
  
  //add classes to ul sub-menus
 function crossthreadst_lvl( &$output, $depth = 0, $args = array() ) {
    // depth dependent classes
     $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
     $display_depth = ( $depth + 1); // because it counts the first submenu as 0
     $classes = array(
         'sub-menu',
        ( $display_depth % 2  ? '' : '' ),
        ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
        'sub-menu-' . $display_depth
        );
    $class_names = implode( ' ', $classes );
   
 //    // build html
     $output .= "\n" . $indent . '<ul class="'.$class_names.'">'."\n";
 }
 
   
 // add main/sub classes to li's and links
  function crossthreadst_el(  &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
     global $wp_query;
      
     $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
     
     // depth dependent classes
     $depth_classes = array(( $depth == 0 ? '' : '' ),
         ( $depth >=2 ? '' : '' ),
         ( $depth % 2 ? '' : '' ),);
     $depth_class_names = esc_attr( implode( ' ',$depth_classes) );
   
     // passed classes
     $classes = empty( $item->classes ) ? array() : (array) $item->classes;
     $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
       // build html
      
     $arrow="";
     if($depth==2)
     {
     $depth="sub";
     $arrow="arrow";
     }
     $output .= $indent . '<li class="'.$class_names.''.$class_names.'">';
   
     // link attributes
     $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
     $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
     $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
     $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
     //$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
   
     $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
         $args->before,
         $attributes,
         $args->link_before,
         apply_filters( 'the_title', $item->title, $item->ID ),
         $args->link_after,
         $args->after
     );
   
     // build html
     $output .= apply_filters( 'walker_nav_menu_crossthreadst_el', $item_output, $item, $depth, $args );
 }
 }
 /**************End walker_nav_menu ****************************/   
 
 
 /**************hide Admin Bar front end********************************/
 add_filter('show_admin_bar', '__return_false');
 /**************hide Admin Bar front end********************************/ 
 
 
 /****************Set active to current Menu link*****************************/ 
 add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
 
 function special_nav_class ($classes, $item) {
     if (in_array('current-menu-item', $classes) ){
         $classes[] = 'active ';
     }
     return $classes;
 }
 /****************End Menu active *****************************/ 

  
//remove woocommerce sidebar
 remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
 
/** Adding svg supporting code **/
function triq_myme_types($mime_types){
  $mime_types['svg'] = 'image/svg+xml'; 
  return $mime_types;
}
add_filter('upload_mimes', 'triq_myme_types', 1, 1);


 
 /**********  Creating Theme settings Page**********/
 add_action('acf/init', 'my_acf_op_init');
 function my_acf_op_init() {
 
     // Check function exists.
     if( function_exists('acf_add_options_page') ) {
 
         // Register options page.
         $option_page = acf_add_options_page(array(
             'page_title'    => __('Theme General Settings'),
             'menu_title'    => __('Theme Settings'),
             'menu_slug'     => 'theme-general-settings',
             'capability'    => 'edit_posts',
             'redirect'      => false
         ));
     }
 }
 /********** End Creating Option Page**********/
 
/*Custom Post type start*/
function cw_post_type_blogs() {
  $supports = array(
  'title', // post title
  'editor', // post content
  'author', // post author
  'thumbnail', // featured images
  'excerpt', // post excerpt
  'custom-fields', // custom fields
  'comments', // post comments
  'revisions', // post revisions
  'post-formats', // post formats
  );
  $labels = array(
  'name' => _x('Blogs', 'plural'),
  'singular_name' => _x('Blog', 'singular'),
  'menu_name' => _x('Blogs', 'admin menu'),
  'name_admin_bar' => _x('Blogs', 'admin bar'),
  'add_new' => _x('Add New', 'add new'),
  'add_new_item' => __('Add New Blog'),
  'new_item' => __('New Blog'),
  'edit_item' => __('Edit Blog'),
  'view_item' => __('View Blog'),
  'all_items' => __('All Blogs'),
  'search_items' => __('Search Blogs'),
  'not_found' => __('No blogs found.'),
  );
  $args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'query_var' => true, 
  'has_archive' => true,
  'hierarchical' => false,
  );
  register_post_type('blogs', $args);
  }
  add_action('init', 'cw_post_type_blogs');
  /*Custom Post type end*/

// Remove SKU

add_filter( 'wc_product_sku_enabled', '__return_false' );



//Change select option button

add_filter( 'woocommerce_product_add_to_cart_text', 'replace_loop_add_to_cart_button_text', 20, 2 );
function replace_loop_add_to_cart_button_text( $text, $product ) {
    if ( $product->is_type( 'variable' ) && $product->is_purchasable() ) {
        $text = __( 'ADD TO CART', 'woocommerce' );
    }
    return $text;
}


 ?>