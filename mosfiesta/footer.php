<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<footer class="footer">
  <div class="footer__wrapper container">
    <a class="logo footer__logo" href="<?= home_url(); ?>">
      <img class="logo__image footer__logo-image" src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Mosfiesta" />
    </a>
    <ul class="footer__menu">
      <li class="footer__menu-item">
        <a class="footer__menu-link" href="#about">О нас</a>
      </li>
      <li class="footer__menu-item">
        <a class="footer__menu-link" href="#we-do">Мы делаем</a>
      </li>
      <li class="footer__menu-item">
        <a class="footer__menu-link" href="#portfolio">Портфолио</a>
      </li>
      <li class="footer__menu-item">
        <a class="footer__menu-link" href="#reviews">Отзывы</a>
      </li>
      <li class="footer__menu-item">
        <a class="footer__menu-link" href="#contacts">Контакты</a>
      </li>
    </ul>
    <div class="social footer__social">
      <a class="social__item" href="<?php the_field('c_fb', $frontpage_id); ?>" aria-label="Facebook" target="_blank">
        <svg class="social__icon footer__social-icon">
          <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#facebook"></use>
        </svg>
      </a>
      <a class="social__item" href="<?php the_field('c_im', $frontpage_id); ?>" aria-label="Instagram" target="_blank">
        <svg class="social__icon footer__social-icon">
          <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#instagram"></use>
        </svg>
      </a>
      <a class="social__item" href="<?php the_field('c_tw', $frontpage_id); ?>" aria-label="Twitter" target="_blank">
        <svg class="social__icon social__icon--twitter footer__social-icon">
          <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#twitter"></use>
        </svg>
      </a>
    </div>
  </div>
</footer>
<?php wp_footer();?>
</body>
</html>