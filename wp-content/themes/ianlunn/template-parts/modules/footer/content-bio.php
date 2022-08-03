<?php
  $bio = get_field('bio', 'option');
  if ($bio) { ?>
  <div class="footer__bio">
    <?php echo $bio; ?>
  </div>
<?php } ?>