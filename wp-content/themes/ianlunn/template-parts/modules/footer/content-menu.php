<?php
  $menus = get_field('menu', 'option');
  if ($menus) { ?>
  <ul class="footer__top_elem footer__top_elem--menu">
    <?php
      foreach ($menus as $menu) {
        $menu_title = $menu['menu_link']['title'];
        $menu_url = $menu['menu_link']['url'];
        $short_description = $menu['short_description'];

        if ($menu_title || $menu_url || $short_description) { ?>
        <li class="footer__menu_list">
          <a href="<?php echo $menu_url; ?>" class="footer__menu_link" title="<?php echo $menu_title; ?>">
            <span class="footer__menu_name"><?php echo $menu_title; ?></span>
            <p class="footer__short_description"><?php echo $short_description; ?></p>
          </a>
        </li>
      <?php }
      } ?>
    </ul>
  <?php } ?>