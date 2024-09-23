<?php

require get_theme_file_path('/inc/search-route.php');
function RR_custom_api_field() {
    register_rest_field( 'feature', 'custom_links', array(
        'get_callback' => function( $object ) {
            return get_permalink( $object['id'] ); // Get the permalink of the specific page
        }
    ));
}
add_action('rest_api_init', 'RR_custom_api_field');




// Enqueue styles and scripts
function RR() {
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css');
    
    // Enqueue Google Fonts
    wp_enqueue_style('fonts', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap');
    
    // Enqueue Bootstrap Icons
    wp_enqueue_style('bootstrap-icon', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
    
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('css/bootstrap.min.css'));
    
    // Enqueue Extra Styles
    wp_enqueue_style('extra-css', get_theme_file_uri('css/style.css'));
    
    // Enqueue Animate CSS
    wp_enqueue_style('animate', get_theme_file_uri('lib/animate/animate.min.css'));
    
    // Enqueue Lightbox CSS
    wp_enqueue_style('lightbox', get_theme_file_uri('lib/lightbox/css/lightbox.min.css'));
    
    // Enqueue Carousel CSS
    wp_enqueue_style('carousel', get_theme_file_uri('lib/owlcarousel/assets/owl.carousel.min.css'));

    // Register and Enqueue JavaScript Files
    wp_enqueue_script('googleapi', '//ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'), '3.6.4', true);
    wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true);
    wp_enqueue_script('easing', get_theme_file_uri('lib/easing/easing.min.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('wow', get_theme_file_uri('lib/wow/wow.min.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('waypoints', get_theme_file_uri('lib/waypoints/waypoints.min.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('counterup', get_theme_file_uri('lib/counterup/counterup.min.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('lightbox', get_theme_file_uri('lib/lightbox/js/lightbox.min.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('owlcarousel', get_theme_file_uri('lib/owlcarousel/owl.carousel.min.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery'), '1.0.0', true);
    wp_localize_script('main-university-js', 'universityData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
      ));
}
add_action('wp_enqueue_scripts', 'RR');

// Register navigation menus
function register_my_menus() {
    register_nav_menus(array(
        'header_nav' => __('Header Menu Location'),
        'header_nav_sub' => __('Header Menu Location Sub'),
        'footer1MenuLocation' => __('Footer 1 Menu Location'),
        'footer2MenuLocation' => __('Footer 2 Menu Location')
    ));
}
add_action('init', 'register_my_menus');

// Custom walker class to add a class to menu links
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Start the element output.
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= '<li' . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="nav-link"'; // Add custom class

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

// Redirect subscribers away from wp-admin
add_action('admin_init', 'redirectSubsToFrontend');
function redirectSubsToFrontend() {
    $ourCurrentUser = wp_get_current_user();
    if (count($ourCurrentUser->roles) == 1 && $ourCurrentUser->roles[0] == 'subscriber') {
        wp_redirect(site_url('/'));
        exit;
    }
}

// Remove admin bar for subscribers
add_action('wp_loaded', 'noSubsAdminBar');
function noSubsAdminBar() {
    $ourCurrentUser = wp_get_current_user();
    if (count($ourCurrentUser->roles) == 1 && $ourCurrentUser->roles[0] == 'subscriber') {
        show_admin_bar(false);
    }
}



add_action('login_enqueue_scripts', 'ourLoginCSS');
function ourLoginCSS() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

// Customize the login screen by removing the WordPress logo and adding the site name
function custom_login_logo() {
    ?>
    <style type="text/css">
        /* Hide the default WordPress logo */
        .login h1 a {
            background-image: none !important;
            pointer-events: none;
        }
        /* Add custom text (site name) instead of the logo */
        .login h1::after {
            content: '<?php echo get_bloginfo('name'); ?>'; /* Site Name */
            font-size: 50px;
            font-weight: bold;
            color: #333; /* You can change this to the color of your choice */
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'custom_login_logo');


// Change the login URL to your site's homepage
add_filter('login_headerurl', 'ourHeaderUrl');
function ourHeaderUrl() {
    return esc_url(site_url('/'));
}

// Change the login screen's title to your site's name
add_filter('login_headertitle', 'ourLoginTitle');
function ourLoginTitle() {
    return get_bloginfo('name');
}

function RR_image() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('RRLand', 400, 260, true);
  }
  
  add_action('after_setup_theme', 'RR_image');



  function university_adjust_queries($query) {
    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
      $today = date('Ymd');
      $query->set('meta_key', 'event_date');
      $query->set('orderby', 'meta_value_num');
      $query->set('order', 'ASC');
      $query->set('meta_query', array(
                array(
                  'key' => 'event_date',
                  'compare' => '>=',
                  'value' => $today,
                  'type' => 'numeric'
                )
              ));
    }
  }
  
  add_action('pre_get_posts', 'university_adjust_queries');

  function use_blog_archive_template($archive_template) {
    if (is_post_type_archive('blog')) {
        $archive_template = get_template_directory() . '/archive-blog.php';
    }
    return $archive_template;
}
add_filter('archive_template', 'use_blog_archive_template');

?>
