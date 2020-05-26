<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<footer class="section footer-variant-2 footer-modern context-dark">
      <div class="footer-variant-2-content">
        <div class="container">
          <div class="row row-40 justify-content-between">
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="oh-desktop">
                <div class="wow slideInRight" data-wow-delay="0s">
                  <div class="footer-brand">
                    <a href="index.html"
                      ><img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/logo-white.svg" width="170px" alt="Alt"
                    /></a>
                  </div>
                  <p>
                    Производство мебели, изготавливаем кухни, шкафы-купе,
                    гардеробные, детские в Краснодаре и Краснодарском крае.
                  </p>
                  <ul class="footer-contacts d-inline-block d-md-block">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left">
                          <span class="icon fa fa-phone"></span>
                        </div>
                        <div class="unit-body">
                          <a class="link-phone" href="tel:<?php the_field('phone', $frontpage_id); ?>"
                            ><?php the_field('phone', $frontpage_id); ?></a
                          >
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm">
                        <div class="unit-left">
                          <span class="icon fa fa-envelope"></span>
                        </div>
                        <div class="unit-body">
                          <a
                            class="link-email"
                            href="mailto:<?php the_field('email', $frontpage_id); ?>"
                            ><span><?php the_field('email', $frontpage_id); ?></span></a
                          >
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left">
                          <span class="icon fa fa-clock-o"></span>
                        </div>
                        <div class="unit-body">
                          <p><?php the_field('work_hours', $frontpage_id); ?></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left">
                          <span class="icon fa fa-location-arrow"></span>
                        </div>
                        <div class="unit-body">
                          <a class="link-location" href="#"
                            ><?php the_field('address', $frontpage_id); ?></a
                          >
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4">
              <div class="oh-desktop">
                <div class="inset-top-18 wow slideInDown" data-wow-delay="0s">
                  <h5 class="text-spacing-75">Запишитесь на консультацию</h5>
                  <p>Она бесплатна и ни к чему вас не обязывает.</p>
                  <form
                    class="rd-form rd-mailform"
                    data-form-output="form-output-global"
                    data-form-type="subscribe"
                    method="post"
                    action="<?= get_stylesheet_directory_uri() ?>/inc/handler_consult.php"
                  >
                    <div class="form-wrap">
                      <input
                        class="form-input"
                        id="contact-phone"
                        type="text"
                        name="phone"
                        data-constraints="@Numeric"
                      />
                      <label class="form-label" for="contact-phone"
                        >Ваш номер телефона</label
                      >
                    </div>
                    <input 
                      type="hidden" 
                      name="id_form_consult" 
                      value="id-form-consult">
                    <input 
                      type="hidden" 
                      name="form_consult_nonce" 
                      value="<?php echo wp_create_nonce('form-consult-nonce'); ?>">
                    <button
                      class="button button-block button-secondary button-ujarak"
                      type="submit"
                    >
                      Перезвонить мне
                    </button>
                  </form>
                  <div class="group-lg group-middle">
                    <p class="footer-social-list-title">
                      Подписывайтесь на нас
                    </p>
                    <div>
                      <ul
                        class="list-inline list-inline-xs footer-social-list-2"
                      >
                        <li>
                          <a class="icon fa fa-instagram" href="<?php the_field('instagram', $frontpage_id); ?>"></a>
                        </li>
                        <li>
                          <a class="icon fa fa-facebook" href="<?php the_field('facebook', $frontpage_id); ?>"></a>
                        </li>
                        <li>
                          <a class="icon fa fa-google-plus" href="<?php the_field('google_plus', $frontpage_id); ?>"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-xl-3">
              <div class="oh-desktop">
                <div class="inset-top-18 wow slideInLeft" data-wow-delay="0s">
                  <h5 class="text-spacing-75">Галерея</h5>
                  <div class="row row-10 gutters-10">
                    <?php 
                      $image = get_field('c_image_1', $frontpage_id);
                      if( $image ) {
                        ?>
                          <div class="col-6 col-sm-3 col-lg-6">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-mary">
                              <div class="thumbnail-mary-figure">
                                <?= wp_get_attachment_image( $image['id'], array(124, 124), false ); ?>
                              </div>
                              <div class="thumbnail-mary-caption">
                                <a
                                  class="icon fl-bigmug-line-zoom60"
                                  href="<?= $image['url']; ?>"
                                  data-lightgallery="item"
                                  >
                                  <?= wp_get_attachment_image( $image['id'], array(124, 124), false ); ?>
                                </a>
                              </div>
                            </article>
                          </div>
                        <?php
                      }
                    ?>
                    <?php 
                      $image = get_field('c_image_2', $frontpage_id);
                      if( $image ) {
                        ?>
                          <div class="col-6 col-sm-3 col-lg-6">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-mary">
                              <div class="thumbnail-mary-figure">
                                <?= wp_get_attachment_image( $image['id'], array(124, 124), false ); ?>
                              </div>
                              <div class="thumbnail-mary-caption">
                                <a
                                  class="icon fl-bigmug-line-zoom60"
                                  href="<?= $image['url']; ?>"
                                  data-lightgallery="item"
                                  >
                                  <?= wp_get_attachment_image( $image['id'], array(124, 124), false ); ?>
                                </a>
                              </div>
                            </article>
                          </div>
                        <?php
                      }
                    ?>
                    <?php 
                      $image = get_field('c_image_3', $frontpage_id);
                      if( $image ) {
                        ?>
                          <div class="col-6 col-sm-3 col-lg-6">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-mary">
                              <div class="thumbnail-mary-figure">
                                <?= wp_get_attachment_image( $image['id'], array(124, 124), false ); ?>
                              </div>
                              <div class="thumbnail-mary-caption">
                                <a
                                  class="icon fl-bigmug-line-zoom60"
                                  href="<?= $image['url']; ?>"
                                  data-lightgallery="item"
                                  >
                                  <?= wp_get_attachment_image( $image['id'], array(124, 124), false ); ?>
                                </a>
                              </div>
                            </article>
                          </div>
                        <?php
                      }
                    ?>
                    <?php 
                      $image = get_field('c_image_4', $frontpage_id);
                      if( $image ) {
                        ?>
                          <div class="col-6 col-sm-3 col-lg-6">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-mary">
                              <div class="thumbnail-mary-figure">
                                <?= wp_get_attachment_image( $image['id'], array(124, 124), false ); ?>
                              </div>
                              <div class="thumbnail-mary-caption">
                                <a
                                  class="icon fl-bigmug-line-zoom60"
                                  href="<?= $image['url']; ?>"
                                  data-lightgallery="item"
                                  >
                                  <?= wp_get_attachment_image( $image['id'], array(124, 124), false ); ?>
                                </a>
                              </div>
                            </article>
                          </div>
                        <?php
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-variant-2-bottom-panel">
        <div class="container">
          <!-- Rights-->
          <div class="group-sm group-sm-justify">
            <p class="rights">
              <span>© </span><span class="copyright-year"></span>
              <span>Виртуоз</span>. Все права защищены.
            </p>
            <p class="rights">
              <a href="/privacy-policy/">Политика конфиденциальности.</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <?php wp_footer();?>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        Marquiz.init({
          id: "5ec11d867dde000044a57bc2",
          autoOpen: false,
          autoOpenFreq: "once",
          openOnExit: false,
        });
      });
    </script>
    <!-- Marquiz script end -->
</body>
</html>