<?php
  $copyright = get_field('copyright', 'option');
  $content = $copyright['content'];
  $link_title = $copyright['link']['title'];
  $link_url = $copyright['link']['url'];
  if ($content || $link_title || $link_url) { ?>
  <span class="footer__content"><?php echo $content; ?></span>
  <a href="<?php echo $link_url ?>" class="footer__link"><?php echo $link_title; ?></a>
<?php } ?>