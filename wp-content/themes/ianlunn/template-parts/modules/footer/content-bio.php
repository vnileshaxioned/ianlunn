<?php
  $bio = get_field('bio', 'option');
  if ($bio) { ?>
  <div class="footer__top_elem footer__top_elem--bio">
    <?php echo $bio; ?>
  </div>
<?php } ?>