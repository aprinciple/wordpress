<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<footer class="footer">
  <div class="container footer__wrapper">
    <a 
      class="footer__logo" 
      data-san="fade-in-left" 
      href="<?= home_url(); ?>"
    >
      <img 
        class="footer__logo-image" 
        src="<?= get_template_directory_uri(); ?>/assets/img/logo-footer.svg" 
        alt="Nims" />
    </a>
    <a 
      class="footer__phone" 
      data-san="fade-in-right" 
      data-san-delay="200" 
      href="tel:<?php the_field('footer_phone', $frontpage_id); ?>"
    >
      <?php the_field('footer_phone', $frontpage_id); ?>
    </a>
    <p 
      class="footer__copyright" 
      data-san="fade-in-bottom" 
      data-san-delay="400"
    >
      <?php the_field('footer_copy', $frontpage_id); ?>
    </p>
  </div>
</footer>
<?php get_template_part('template-parts/alert'); ?>
<?php wp_footer();?>
</body>
</html>