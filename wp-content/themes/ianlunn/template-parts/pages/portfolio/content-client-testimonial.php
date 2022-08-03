<?php
  $contents = get_sub_field('content');
  if ($contents) { ?>
  <section class="portfolio-client-testimonial">
    <div class="wrapper wrapper--portfolio-client-testimonial">
      <ul class="client-testimonial__container">
        <?php
          foreach ($contents as $content) {
            $review = $content['review']; ?>
          <li class="client-testimonial__list">
            <?php echo $review; ?>
          </li>
        <?php } ?>
      </ul>
    </div>
  </section>
<?php } ?>