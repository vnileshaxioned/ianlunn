<?php
  $copyright = get_field('copyright', 'option');
  if ($copyright) { ?>
  <div class="footer__bottom">
    <?php echo $copyright; ?>
  </div>
<?php } ?>