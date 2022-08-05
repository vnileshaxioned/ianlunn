<?php
  $social_links = get_field('social_link', 'option');
  if ($social_links) { ?>
  <ul class="footer__top_elem footer__top_elem--social_link">
    <?php
      foreach ($social_links as $social_link) {
        $name = $social_link['name'];
        $url = $social_link['url'];
        $short_description = $social_link['short_description'];

        if ($name || $url || $short_description) { ?>
        <li class="footer__social_list">
          <a href="<?php echo $url; ?>" class="footer__social_icon footer__social_icon--<?php echo strtolower($name); ?>">
            <?php echo $short_description; ?>
          </a>
        </li>
      <?php }
      } ?>
    </ul>
  <?php } ?>