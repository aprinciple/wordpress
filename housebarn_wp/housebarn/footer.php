<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
  <footer class="footer">
    <div class="container footer__wrapper">
      <div class="footer__item footer__social">
        <h3 class="footer__item-title">Мы в соц-сетях</h3>
        <div class="social">
          <a 
            class="social__link social__link--tm" 
            href="tg://resolve?domain=<?php the_field('soc_tm', $frontpage_id); ?>" 
            target="_blank" 
            aria-label="Telegram">
          </a>
          <a 
            class="social__link social__link--wp" 
            href="https://wa.me/<?php the_field('soc_wp', $frontpage_id); ?>" 
            target="_blank" 
            aria-label="WhatsApp">
          </a>
          <a 
            class="social__link social__link--vk" 
            href="<?php the_field('soc_vk', $frontpage_id); ?>" 
            target="_blank" 
            aria-label="Vkontakte">
          </a>
          <a 
            class="social__link social__link--im" 
            href="<?php the_field('soc_im', $frontpage_id); ?>" 
            target="_blank" 
            aria-label="Instagram">
          </a>
        </div>
      </div>
      <div class="footer__item">
        <h3 class="footer__item-title">Контакты</h3>
        <div class="contacts">
          <div class="contacts__item">
            <a 
              class="contacts__link" 
              href="tel:<?php the_field('phone_num_nf', $frontpage_id); ?>">
              <?php the_field('phone_num', $frontpage_id); ?>
            </a>
            <a 
              class="contacts__link" 
              href="mailto:<?php the_field('ct_mail', $frontpage_id); ?>">
              <?php the_field('ct_mail', $frontpage_id); ?>
            </a>
          </div>
          <div class="contacts__item">
            <b>Наш адрес:</b>
            <?php the_field('ct_address', $frontpage_id); ?>
          </div>
          <div class="contacts__item">
            <b>Режим работы:</b>
            <?php the_field('ct_time', $frontpage_id); ?>
          </div>
        </div>
      </div>
      <div class="footer__item">
        <h3 class="footer__item-title">Категории</h3>
        <ul class="footer__list">
          <?php 
            $categories = get_categories( [
              'taxonomy'     => 'category',
              'type'         => 'post',
              'child_of'     => 0,
              'parent'       => '',
              'orderby'      => 'name',
              'order'        => 'ASC',
              'hide_empty'   => 1,
              'hierarchical' => 1,
              'exclude'      => '',
              'include'      => '',
              'number'       => 0,
              'pad_counts'   => false,
            ] );

            if( $categories ) {
              foreach( $categories as $cat ) {

            ?>
              <li class="footer__list-item">
                <a href="<?= get_category_link($cat->term_id); ?>"><?= $cat->name; ?></a>
              </li>
          <?php
              }
            }
          ?>
        </ul>
      </div>
      <div class="footer__item">
        <h3 class="footer__item-title">Страницы</h3>
        <?php wp_nav_menu([
          'theme_location' => 'footer_menu'
        ]); ?>
      </div>
      <p class="footer__copyright" data-san="fade-in-bottom" data-san-delay="400">
      <?php the_field('copyright', $frontpage_id); ?>
      </p>
    </div>
  </footer>
  <div class="alert">
    <span class="alert__message"></span>
  </div>
  <?php get_template_part('template-parts/bonus'); ?>
  <?php wp_footer();?>
</body>
</html>