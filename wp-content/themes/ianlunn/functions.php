<?php
  // for classic editor
  add_filter('use_block_editor_for_post', '__return_false');

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
?>