<footer class="mt-auto">
  <div class="footer__container">
    <div class="footer__box">
      <?php the_custom_logo(); ?>
    </div>

    <div class="footer__box">
        <p class="footer__h">
          <?php the_field('heading-1', 'option'); ?>
        </p>

        <div class="footer__text">
        <?php the_field('heading-1-text', 'option'); ?>

        </div>
    </div>

    <div class="footer__box">
        <p class="footer__h">
          <?php the_field('heading-2', 'option'); ?>
        </p>

        <div class="footer__text">
        <?php the_field('heading-2-text', 'option'); ?>

        </div>
    </div>

    <div class="footer__box">
        <p class="footer__h">
          <?php the_field('heading-3', 'option'); ?>
        </p>

        <div class="footer__text">
        <?php the_field('heading-3-text', 'option'); ?>

        </div>
    </div>

    <div class="footer__box">
        <p class="footer__h">
          <?php the_field('heading-4', 'option'); ?>
        </p>

        <div class="footer__text">
        <?php the_field('heading-4-text', 'option'); ?>

        </div>
    </div>


  </div>


</footer>
<?php wp_footer(); ?>

</body>
</html>