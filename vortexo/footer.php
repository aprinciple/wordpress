<footer class="footer">
  <div class="container footer__wrapper">
    <div class="subscription footer__subscription">
      <h6 class="subscription__title" data-san="animate__fadeInLeft">Подпишитесь на нашу рассылку</h6>
      <p class="subscription__subtitle" data-san="animate__fadeInUp" data-san-delay="300">
        Будьте в курсе наших новостей и новых предложений
      </p>
      <?= do_shortcode( '[form_request]' ); ?>
    </div>
  </div>
</footer>

<div class="share-dialog">
  <h3 class="share-dialog__title">Поделиться</h3>
  <button class="share-dialog__close" type="button">
    <svg class="share-dialog__close-icon">
      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#cross"></use>
    </svg>
  </button>
  <div class="share-dialog__items">
    <a class="share-dialog__item" href="https://vk.com/share.php?url=<?= home_url(); ?>" target="_blank">
      VKontakte
    </a>
    <a class="share-dialog__item" href="http://www.facebook.com/sharer.php?s=100&p[url]=<?= home_url(); ?>" target="_blank">
      Facebook
    </a>
    <a class="share-dialog__item" href="https://www.odnoklassniki.ru/dk?st.cmd=addShare&st._surl=<?= home_url(); ?>" target="_blank">
      Одноклассники
    </a>
    <a 
      class="share-dialog__item" 
      href="mailto:?subject=Я хочу поделиться с тобой&amp;body=Взгляни на этот сайт <?= home_url(); ?>." 
      title="Поделиться через почту" 
      target="_blank">
      Email
    </a>
  </div>
  <div class="share-dialog__link">
    <div class="share-dialog__url"><?= home_url(); ?></div>
    <button class="share-dialog__copy" type="button">
      Копировать
    </button>
  </div>
</div>
  <?php wp_footer();?>
</body>
</html>