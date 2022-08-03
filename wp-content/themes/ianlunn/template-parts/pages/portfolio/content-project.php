<?php
  $projects = get_sub_field('select_project');
  if ($projects) { ?>
  <section class="portfolio-project">
    <div class="wrapper wrapper--portfolio-project">
      <ul class="portfolio-project__container">
        <?php
          foreach ($projects as $project) {
            $post_id = $project->ID;
            $title = $project->post_title;
            $image = get_the_post_thumbnail_url($post_id);
            if ($title || $image) { ?>
            <li class="portfolio-project__list">
              <figure class="portfolio-project__image">
                <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
              </figure>
            </li>
          <?php }
          } ?>
        </ul>
      </div>
    </section>
  <?php } ?>