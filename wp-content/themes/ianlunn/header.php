<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body>
  <!--container start-->
  <div class="container">
    <!--header section start-->
    <header>
      <div class="wrapper wrapper--header">
        <h1 class="logo">
          <a href="<?php bloginfo('url'); ?>" class="logo__link" title="<?php bloginfo('name'); ?>"><span class="logo__link_heading"><?php bloginfo('name'); ?></span><span class="logo__link_sub_heading"><?php bloginfo('description'); ?></span></a>
        </h1>
        <?php
          if (function_exists('custom_menu')) { 
            custom_menu('primary');
          } else {
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu_class' => 'navbar__menu',
              'container' => 'nav',
              'container_class' => 'navbar navbar--primary',
              'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            ));
          }

          $cta = get_field('hire_cta', 'option');
          $cta_title = $cta['title'];
          $cta_url = $cta['url'];
          if ($cta_title || $cta_url) { ?>
          <div class="hire">
            <a href="<?php echo $cta_url; ?>" class="hire__cta"><?php echo $cta_title ?></a>
          </div>
        <?php } ?>
      </div>
    </header>
    <!--header section end-->
    <!--main section start-->
    <main>