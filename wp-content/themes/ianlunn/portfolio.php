<?php
  /* Template Name: Portfolio */
  get_header();
  if (get_field('banner_content')) {
    get_template_part('template-parts/pages/portfolio/content', 'banner');
  }
  if (have_rows('portfolio_content')) {
    while (have_rows('portfolio_content')) {
      the_row();
      switch (get_row_layout()) {
        case 'project_section':
          get_template_part('template-parts/pages/portfolio/content', 'project');
          break;
        case 'client_testimonial':
          get_template_part('template-parts/pages/portfolio/content', 'client-testimonial');
          break;
        case 'about_section':
          get_template_part('template-parts/pages/portfolio/content', 'about');
          break;
      }
    }
  }
  get_footer();
?>