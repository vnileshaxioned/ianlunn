<?php
  $about_cta = get_sub_field('about_cta');
  $title = $about_cta['title'];
  $url = $about_cta['url'];
  if ($title && $url) { ?>
  <section class="portfolio-about">
    <div class="wrapper wrapper--portfolio-about">
      <a href="<?php echo $url ?>" class="about__link"><?php echo $title ?></a>
    </div>
  </section>
<?php } ?>