<?php
  $contents = get_field('banner_content');
  $title = $contents['title'];
  $short_description = $contents['short_description'];
  $portfolio_cta_title = $contents['view_portfolio_cta']['title'];
  $portfolio_cta_url = $contents['view_portfolio_cta']['url'];
  if ($title || $short_description || $portfolio_cta_title || $portfolio_cta_url) { ?>
  <section class="portfolio-banner">
    <div class="wrapper">
      <?php if ($title) { ?>
        <h2 class="portfolio-banner__heading"><?php echo $title; ?></h2>
      <?php } if ($short_description) { ?>
        <p class="portfolio-banner__description"><?php echo $short_description ?></p>
      <?php } if ($portfolio_cta_title && $portfolio_cta_url) { ?>
        <div class="portfolio-banner__cta">
          <a href="<?php echo $portfolio_cta_url ?>" class="portfolio-banner__cta_button"><?php echo $portfolio_cta_title ?></a>
        </div>
      <?php } ?>
    </div>
  </section>
<?php } ?>