<?php 
get_header('theme');
?>
<main class="page__main">
  <div class="page__promo p-news__promo">
    <div class="container">
      <h1 class="title page__promo-title">Обмены на все случаи жизни</h1>
      <div class="page__promo-text">
        <p>Актуальные предложения Обмен Круглосуточно Пополнение резервов</p>
      </div>
      <div class="nav-cat p-news__nav">
        <?php 
          $current_term = wp_get_post_terms( get_the_ID(), 'news-cat');
          $terms = get_terms(
            array(
              'taxonomy'   => 'news-cat',
              'hide_empty' => false,
            )
          );
        ?>
        <?php if ( ! empty( $terms ) && is_array( $terms ) ) : ?>
          <?php foreach ( $terms as $term ) : ?>
            <?php if($current_term[0]->slug === $term->slug) : ?>
              <a 
                class="nav-cat__item nav-cat__item--active" 
                href="<?= esc_url( get_term_link( $term ) ) ?>"
              >
                <?= $term->name; ?>
              </a>
            <?php else: ?>
              <a 
                class="nav-cat__item" 
                href="<?= esc_url( get_term_link( $term ) ) ?>"
              >
                <?= $term->name; ?>
              </a>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="p-news__wrapper">
      <div class="news">
        <div class="news__items">
          <h2 class="news__items-title">Новости</h2>
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php $terms = get_the_terms( get_the_ID(), 'news-cat' ); ?>
                <article class="news__item">
                  <?php 
                    $terms = wp_get_post_terms( get_the_ID(), 'news-cat');
                    foreach ($terms as $t) {
                      echo '<span class="news__item-tag">'. $t->name .'</span>';
                    }
                  ?>
                  <?php 
                    if( has_post_thumbnail() ) {
                      the_post_thumbnail('', array(
                        'class' => "news__item-image",
                      ));
                    }
                  ?>
                  <div class="news__item-content">
                    <h1 class="news__item-title"><?php the_title(); ?></h1>
                    <div class="news__item-text"><?php the_excerpt() ?></div>
                    <a class="button news__item-link" href="<?php the_permalink(); ?>">Подробнее</a>
                  </div>
                </article>
              <?php endwhile; ?>
              <?php else : ?>
                <p>Нет новостей</p>
            <?php endif; ?>
        </div>
      </div>

      <aside class="aside-reserves">
        <h2 class="aside-reserves__title">Наши резервы</h2>
        <div class="aside-reserves__items">
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-usd.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">USD</h6>
            <span class="aside-reserves__item-amount">123243</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-rub.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">RUB</h6>
            <span class="aside-reserves__item-amount">234123</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-btc.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">BTC</h6>
            <span class="aside-reserves__item-amount">12</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-eth.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">ETH</h6>
            <span class="aside-reserves__item-amount">12312</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-xrp.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">XRP</h6>
            <span class="aside-reserves__item-amount">355</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-dash.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">DASH</h6>
            <span class="aside-reserves__item-amount">6767</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-ltc.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">LTC</h6>
            <span class="aside-reserves__item-amount">3788</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-bch.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">BCH</h6>
            <span class="aside-reserves__item-amount">235</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-xmr.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">XMR</h6>
            <span class="aside-reserves__item-amount">3463</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-zec.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">ZEC</h6>
            <span class="aside-reserves__item-amount">3453</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-etc.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">ETC</h6>
            <span class="aside-reserves__item-amount">34536</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-trx.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">TRX</h6>
            <span class="aside-reserves__item-amount">4574</span>
          </div>
          <div class="aside-reserves__item">
            <img class="aside-reserves__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/icon-bnb.svg" alt="Alt">
            <h6 class="aside-reserves__item-title">BNB</h6>
            <span class="aside-reserves__item-amount">46778</span>
          </div>
        </div>
      </aside>
    </div>

    <div class="p-news__reviews">
      <?php get_template_part('template-parts/reviews'); ?>
    </div>
  </div>
</main>
<?php get_footer('theme'); ?>