<?php
  // for classic editor
  add_filter('use_block_editor_for_post', '__return_false');

  // enqueue the style and script files
  add_action('wp_enqueue_scripts', 'test_theme_script');
  function test_theme_script() {
    wp_enqueue_style('custom-styling', get_template_directory_uri().'/assets/sass/style.css');
  }

  // theme support
  add_action('after_setup_theme', 'custom_theme_setup');
  function custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
      'primary' => __('Primary Menu', 'customtheme')
    ) );
  }

  //custom menu structure
  function custom_menu($location_name) {
    if (($locations = get_nav_menu_locations()) && $locations[$location_name]) {
      $menu_id = get_nav_menu_locations()[$location_name];
      $menu_items = wp_get_nav_menu_items($menu_id);

      $menu_list = '<nav class="navbar navbar--'.$location_name.'">';
      $menu_list .= '<ul class="navbar__menu">';
      foreach ($menu_items as $menu_item) {
        $title = $menu_item->title;
        $url = $menu_item->url;
        $menu_list .= '<li class="navbar__menu_list">';
        $menu_list .= '<a href="'.$url.'" class="navbar__menu_list_item" title="'.$title.'">'.$title.'</a>';
        $menu_list .= '</li>';
      }
      $menu_list .= '</ul>';
      $menu_list .= '</nav>';
    }
    echo $menu_list;
  }

  // custom post type
  add_action( 'init', function() {
    custom_post_type('project', 'dashicons-portfolio');
  });
  function custom_post_type($cpt, $icon = 'dashicons-admin-post') {
    $capitalize_cpt = ucfirst($cpt);
    $labels = array(
      'name'                => _x( $capitalize_cpt.'s', 'Post Type General Name', 'customtheme' ),
      'singular_name'       => _x( $cpt, 'Post Type Singular Name', 'customtheme' ),
      'menu_name'           => __( $capitalize_cpt.'s', 'customtheme' ),
      'all_items'           => __( 'All '.$capitalize_cpt.'s', 'customtheme' ),
      'add_new'             => __( 'Add New', 'customtheme' ),
      'edit_item'           => __( 'Edit '.$capitalize_cpt, 'customtheme' ),
      'update_item'         => __( 'Update '.$capitalize_cpt, 'customtheme' ),
      'search_items'        => __( 'Search '.$capitalize_cpt.'s', 'customtheme' ),
      'not_found'           => __( 'Not Found', 'customtheme' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'customtheme' ),
    );
    $args = array(
      'label'               => __( $cpt, 'customtheme' ),
      'description'         => __( $cpt.' description', 'customtheme' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail' ),
      'hierarchical'        => true,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 4,
      'menu_icon'           => $icon,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
    );
    register_post_type( $cpt, $args );
  }

  // for option page
  if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
      'page_title' 	=> 'Custom Option Page',
      'menu_title'	=> 'Custom Option Page',
      'menu_slug' 	=> 'custom-option-page',
      'icon_url'    => 'dashicons-admin-settings',
    ));

    acf_add_options_sub_page(array(
      'page_title' 	=> 'Footer Section',
      'menu_title'	=> 'Footer',
      'parent_slug' => 'custom-option-page',
    ));
  }
?>