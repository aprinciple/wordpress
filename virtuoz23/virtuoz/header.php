<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta
      name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <title><?= wp_get_document_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-modern-wrap" style="height: 76px;">
          <nav
            class="rd-navbar rd-navbar-modern rd-navbar-original rd-navbar-static"
            data-layout="rd-navbar-fixed"
            data-sm-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fixed"
            data-md-device-layout="rd-navbar-fixed"
            data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-fixed"
            data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static"
            data-xxl-layout="rd-navbar-static"
            data-xxl-device-layout="rd-navbar-static"
            data-lg-stick-up-offset="46px"
            data-xl-stick-up-offset="46px"
            data-xxl-stick-up-offset="70px"
            data-lg-stick-up="true"
            data-xl-stick-up="true"
            data-xxl-stick-up="true"
          >
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button
                    class="rd-navbar-toggle toggle-original"
                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"
                  >
                    <span></span>
                  </button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <a class="brand" href="<?= home_url(); ?>"
                      ><img
                        src="<?=get_stylesheet_directory_uri(); ?>/assets/images/logo.svg"
                        width="170px"
                        alt="Alt"
                        style="width: 170px;"
                    /></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap toggle-original-elements">
                    <!-- RD Navbar Nav-->
                    <?php
                      if( has_nav_menu('header_menu') ) {
                        wp_nav_menu(array(
                          'theme_location' => 'header_menu',
                          'container' => false,
                          'menu_class' => 'rd-navbar-nav',
                          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                          'depth' => 2,
                          'walker' => new Theme_Walker_Nav_Menu(),
                        ));
                      }
                    ?>
                  </div>
                  <div
                    class="rd-navbar-project-hamburger"
                    data-multitoggle=".rd-navbar-main"
                    data-multitoggle-blur=".rd-navbar-wrap"
                    data-multitoggle-isolate="data-multitoggle-isolate"
                  >
                    <div class="project-hamburger">
                      <span class="project-hamburger-arrow-top"></span
                      ><span class="project-hamburger-arrow-center"></span
                      ><span class="project-hamburger-arrow-bottom"></span>
                    </div>
                    <div class="project-hamburger-2">
                      <span class="project-hamburger-arrow"></span
                      ><span class="project-hamburger-arrow"></span
                      ><span class="project-hamburger-arrow"></span>
                    </div>
                    <div class="project-close"><span></span><span></span></div>
                  </div>
                </div>
                <div class="rd-navbar-project rd-navbar-modern-project">
                  <div class="rd-navbar-project-modern-header">
                    <h4 class="rd-navbar-project-modern-title">Контакты</h4>
                    <div
                      class="rd-navbar-project-hamburger"
                      data-multitoggle=".rd-navbar-main"
                      data-multitoggle-blur=".rd-navbar-wrap"
                      data-multitoggle-isolate="data-multitoggle-isolate"
                    >
                      <div class="project-close">
                        <span></span><span></span>
                      </div>
                    </div>
                  </div>
                  <div
                    class="rd-navbar-project-content rd-navbar-modern-project-content"
                  >
                    <div>
                      <p class="text-spacing-25">
                        <!--Want to get the latest flooring ideas from our team? Follow us on Instagram to keep up with the newest trends and offers from Parquetry.-->
                      </p>
                      <ul class="rd-navbar-modern-contacts">
                        <li>
                          <div class="unit unit-spacing-sm">
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
                              <span class="icon fa fa-location-arrow"></span>
                            </div>
                            <div class="unit-body">
                              <a class="link-location" href="#"
                                ><?php the_field('address', $frontpage_id); ?></a
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
                      </ul>
                      <div
                        class="row row-10 gutters-10"
                        data-lightgallery="group"
                      >
                        <?php 
                          $image = get_field('c_image_1', $frontpage_id);
                          if( $image ) {
                            ?>
                            <div class="col-6 col-lg-4">
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
                                    <?= wp_get_attachment_image( $image['id'], 'thumbnail', false ); ?>
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
                            <div class="col-6 col-lg-4">
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
                            <div class="col-6 col-lg-4">
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
                            <div class="col-6 col-lg-4">
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
                          $image = get_field('c_image_5', $frontpage_id);
                          if( $image ) {
                            ?>
                            <div class="col-6 col-lg-4">
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
                          $image = get_field('c_image_6', $frontpage_id);
                          if( $image ) {
                            ?>
                            <div class="col-6 col-lg-4">
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
                      <ul class="list-inline rd-navbar-modern-list-social">
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
          </nav>
        </div>
      </header>