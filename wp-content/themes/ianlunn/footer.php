    </main>
    <!--main section end-->
    <!--footer section start-->
    <footer>
      <div class="wrapper">
        <div class="footer__top">
          <?php
            get_template_part('template-parts/modules/footer/content', 'bio');
            get_template_part('template-parts/modules/footer/content', 'social-link');
            get_template_part('template-parts/modules/footer/content', 'menu');
          ?>
        </div>
        <?php get_template_part('template-parts/modules/footer/content', 'copyright'); ?>
      </div>
    </footer>
    <!--footer section end-->
  </div>
  <!--container end-->
  <?php wp_footer(); ?>
</body>
</html>