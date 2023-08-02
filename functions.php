<?php
require_once('wp_bootstrap_navwalker.php');

add_action( 'wp_enqueue_scripts', 'sela_scripts' );

function sela_scripts() {
    wp_enqueue_style( 'style_css', get_stylesheet_uri());
    wp_enqueue_style( 'media_css', get_template_directory_uri()."/css/media.css" );
    wp_enqueue_style( 'accessibility_css', get_template_directory_uri()."/css/accessibility.css" );

    wp_enqueue_script("jquery", get_template_directory_uri()."/js/jquery-3.5.1.min.js");
    wp_enqueue_script("main_js", get_template_directory_uri()."/js/main.js");
    wp_enqueue_script("tabs_js", get_template_directory_uri()."/js/tabs-automatic.js");

    wp_enqueue_script( 'owlcarousel', get_stylesheet_directory_uri() . '/inc/owl/owl.carousel.min.js', array( 'jquery' ), false, true );
    wp_enqueue_style( 'owlcarousel-style', get_stylesheet_directory_uri() . '/inc/owl/owl.carousel.css' );
    wp_enqueue_style( 'owlcarousel-theme', get_stylesheet_directory_uri() . '/inc/owl/owl.theme.default.css' );
    wp_enqueue_style( 'fontawesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );

    wp_enqueue_style('aos_css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');
    wp_enqueue_script('aos_js','https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js');
}

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer menu' ));
}

add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'theme_functions' );

function theme_functions() {

    add_theme_support( 'title-tag' );

}

// Register Custom Post Type
function agent_type() {

    $labels = array(
        'name'                  => _x( 'סוכנים', 'Post Type General Name', 'sela' ), //Agents
        'singular_name'         => _x( 'Agent', 'Post Type Singular Name', 'sela' ),
        'menu_name'             => __( 'סוכנים', 'sela' ), //Agents
        'name_admin_bar'        => __( 'Agent', 'sela' ),
        'archives'              => __( 'Agent Archives', 'sela' ),
        'attributes'            => __( 'Agent Attributes', 'sela' ),
        'parent_item_colon'     => __( 'Parent Agent:', 'sela' ),
        'all_items'             => __( 'כל הסוכנים', 'sela' ), //All Agenta
        'add_new_item'          => __( 'הוספת סוכן', 'sela' ), // Add New Agent
        'add_new'               => __( 'הוספת סוכן', 'sela' ),
        'new_item'              => __( 'New Agent', 'sela' ),
        'edit_item'             => __( 'Edit Agent', 'sela' ),
        'update_item'           => __( 'Update Agent', 'sela' ),
        'view_item'             => __( 'View Agent', 'sela' ),
        'view_items'            => __( 'View Agents', 'sela' ),
        'search_items'          => __( 'חיפוש סוכן', 'sela' ), // Search Agent
        'not_found'             => __( 'Not found', 'sela' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'sela' ),
        'featured_image'        => __( 'Featured Image', 'sela' ),
        'set_featured_image'    => __( 'Set featured image', 'sela' ),
        'remove_featured_image' => __( 'Remove featured image', 'sela' ),
        'use_featured_image'    => __( 'Use as featured image', 'sela' ),
        'insert_into_item'      => __( 'Insert into agent', 'sela' ),
        'uploaded_to_this_item' => __( 'Uploaded to this agent', 'sela' ),
        'items_list'            => __( 'Agents list', 'sela' ),
        'items_list_navigation' => __( 'Agents list navigation', 'sela' ),
        'filter_items_list'     => __( 'Filter agents list', 'sela' ),
    );
    $args = array(
        'label'                 => __( 'Agent', 'sela' ),
        'description'           => __( 'Post Type Description', 'sela' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-editor-textcolor',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'agent', $args );

}
add_action( 'init', 'agent_type', 0 );

// Custom function should return a string
function custom_seperator( $sep ) {
    return '-';
}
//add_filter( 'document_title_separator', 'custom_seperator', 10 );

// Custom function should return an array
function custom_html_title( $title ) {
    global $post;
    $page_name = get_the_title($post->ID);

    return array(
        'title' => $page_name,
        'site'  => wp_title()
    );
}
//add_filter( 'document_title_parts', 'custom_html_title', 10 );

//add_filter( 'option_blogname', 'custom_option_blogname' );
function custom_option_blogname( $name ){
    global $post;

    $site_name = $name;
    $page_name = get_the_title($post->ID);

    if ( is_front_page() ) {
        return $site_name; }

    if( is_page() ) {
        return "{$page_name} | {$site_name}"; }

    return $name;
}

//add_filter('the_title','some_callback');
function some_callback($data){
    global $post;
    return  $post->ID . '-'. wp_title();
}

add_action( 'template_redirect', 'prefix_redirect_single_cpt' );
// Redirect Testimonials CPT Singles
function prefix_redirect_single_cpt() {
    if ( is_singular( 'agent' )) {
        wp_redirect( '/הסוכנים', 301 );
        exit;
    }
}


add_filter( 'wpcf7_validate_text', 'custom_name_confirmation_validation_filter', 5, 2 );

function custom_name_confirmation_validation_filter( $result, $tag ) {

    if ( 'full-name' == $tag->name ) {
        $your_name = isset( $_POST['full-name'] ) ? trim( $_POST['full-name'] ) : '';

        if ( !$your_name ) {
            $result->invalidate( $tag, "שם מלא הוא שדה חובה" );
        } 
    }

    return $result;
}

add_filter( 'wpcf7_validate_email', 'custom_email_confirmation_validation_filter', 5, 2 );
  
function custom_email_confirmation_validation_filter( $result, $tag ) {
  if ( 'your-email' == $tag->name ) {
    $your_email = isset( $_POST['your-email'] ) ? trim( $_POST['your-email'] ) : '';
  
    if ( !$your_email ) {
      $result->invalidate( $tag, "מייל (דואר אלקטרוני) הוא שדה חובה" );
    }
  }
  
  return $result;
}

add_filter( 'wpcf7_validate_tel', 'custom_phone_confirmation_validation_filter', 5, 2 );
  
function custom_phone_confirmation_validation_filter( $result, $tag ) {
  if ( 'phone' == $tag->name ) {
    $phone = isset( $_POST['phone'] ) ? trim( $_POST['phone'] ) : '';
  
    if ( !$phone ) {
      $result->invalidate( $tag, "טלפון הוא שדה חובה" );
    }
  }
  
  return $result;
}

add_filter( 'wpcf7_validate_textarea', 'custom_message_confirmation_validation_filter', 5, 2 );
  
function custom_message_confirmation_validation_filter( $result, $tag ) {
  if ( 'message' == $tag->name ) {
    $message = isset( $_POST['message'] ) ? trim( $_POST['message'] ) : '';
  
    if ( !$message ) {
      $result->invalidate( $tag, "הודעה היא שדה חובה" );
    }
  }
  
  return $result;
}