<footer class="footer">
    <div class="footer__container container">
      <p class="footer__copyright">&copy; "СКОРП"</p>

      <div class="footer__logo">
        <div class="logo">
          <a class="logo__link" href="<?php echo home_url(); ?>">
            <img class="logo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" width="70" height="75">
          </a>
        </div>
      </div>
      <div class="footer__breadcrumbs">
        <nav class="breadcrumbs">
          <?php 
            echo strip_tags(
              wp_nav_menu([
                'theme_location'  => 'breadcrumbs_privacy_policy',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              ]), '<a>' );
          ?>
        </nav>
      </div>

      <div class="about-us">
        <button class="about-us__button">
          <svg class="about-us__button-icon">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-about-us"></use>
          </svg>
        </button>

        <ul class="about-us__list">
          <li class="about-us__item">
            <a href="#" class="about-us__link about-us__link--manifest">Манифест</a>
          </li>
          <li class="about-us__item">
            <a href="<?php echo home_url('about-us'); ?>" class="about-us__link">О проекте</a>
          </li>
          <li class="about-us__item">
            <a href="<?php echo home_url('privacy-policy'); ?>" class="about-us__link">Политика конфиденциальности</a>
          </li>
        </ul>

        <div class="manifest">
          <button class="manifest__close">
            <svg class="manifest__close-icon">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-cancel"></use>
            </svg>
          </button>
          <h4 class="manifest__title">Манифест</h4>
          <div class="manifest__text">
            <p>
              Мыслители, мечтатели, гении, безумцы, изобретатели. Все мы, кто из мусора и гвоздей воплощают в гаражах свои мысли.
              Я обращаюсь ко всем тем, кто не страшится заново изобретать велосипед. Наш проект объявляет всеобщий клич, на объединение в одно сообщество. Вместе мы сможем реализовать идеи и мысли, а также покажем, как зарабатывать на своем хобби. Хватит сидеть и мечтать, будем создавать будущее вместе!
            </p>
          </div>

          <div class="manifest__comment">
            <p class="manifest__comment-slogan">Всё начинается с идеи!</p>
            <div class="manifest__comment-player">
              <div class="player">
                <audio controls class="player__audio" src="<?php echo get_template_directory_uri(); ?>/assets/audio/audio.mp3"></audio>
                <button class="player__button player__button--play" type="button"></button>
                <div class="player__progress">
                  <span class="player__progress-bar"></span>
                </div>
                <span class="player__duration">7:32</span>
              </div>
            </div>
            <p class="manifest__comment-author">Савченко С.Н.</p>
            <p class="manifest__comment-position">Изобретатель</p>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>