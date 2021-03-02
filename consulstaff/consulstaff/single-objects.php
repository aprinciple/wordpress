<?php get_template_part('template-parts/header-post'); ?>
<main class="p-object__main container">
  <a class="p-object__all-objects" href="<?= home_url('objects-for-sale'); ?>">
    <?= wpm_translate_string('[:it]Tutti gli oggetti[:en]All objects[:ru]Все объекты'); ?>
  </a>

  <article class="p-object__article">
    <header class="p-object__header">
    <?php
      $slug;
      $terms = get_the_terms( get_the_ID(), 'objects-direction' );
      if ( !empty( $terms ) ) {
        $term = array_shift( $terms );
        $slug = ($term->slug) ? $term->slug : 'other';
      }
    ?>
      <h1 class="p-object__title p-object__title--<?= $slug; ?>">
        <?php the_title(); ?>
      </h1>
      <span class="p-object__region">
        <?php the_field('region'); ?>
      </span>
    </header>
    <div class="p-object__content">
      <div class="p-object__content-text">
        <?php the_content(); ?>
      </div>
      <?php if( get_field('list_1_title') ) : ?>
        <div class="p-object__content-features">
          <span class="p-object__content-title">
            <?= the_field('list_1_title'); ?>:
          </span>
          <?php the_field('list_1_item'); ?>
        </div>
      <?php endif; ?>

      <?php if( get_field('list_2_title') ) : ?>
        <div class="p-object__content-more">
          <span class="p-object__content-title p-object__content-title--wine">
            <?php the_field('list_2_title'); ?>
          </span>
          <?php the_field('list_2_item'); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="p-object__slider">
      <div class="p-object__slider-items">
        <?php 
          $counter = 1;
          while ($counter < 6):
            $photos = get_field('photos');
            $photo = 'photo-' . $counter;
            $image = $photos[$photo];
        
        if ($image): ?>

          <div class="p-object__slider-item">
            <?= 
              wp_get_attachment_image( $image['id'], '', false, array( 
                'class' => 'p-object__slider-image',
              ) );
            ?>
          </div>

        <?php endif; 
            $counter++;
          endwhile;
        ?>
      </div>
      <ul class="p-object__slider-thumbnails">
        <?php 
          $counter = 1;
          while ($counter < 6):
            $photos = get_field('photos');
            $photo = 'photo-' . $counter;
            $image = $photos[$photo];
        
        if ($image): ?>

          <li class="p-object__slider-thumbnails-item">
            <?= 
              wp_get_attachment_image( $image['id'], '', false, array( 
                'class' => 'p-object__slider-thumbnails-image',
              ) );
            ?>
          </li>

        <?php endif; 
            $counter++;
          endwhile;
        ?>
      </ul>
      <div class="p-object__price">
        <?= 
          wpm_translate_string('[:it]Prezzo originale[:en]Original price[:ru]Первоначальная цена'); 
        ?>:
        <span class="p-object__price-highlighter">
          <?php the_field('price'); ?>
        </span>
      </div>
    </div>
  </article>

  <div class="p-object__nav">
    <?php 
      $prev_post = get_adjacent_post();
      if( $prev_post ) :
    ?>
      <a 
        class="p-object__nav-link p-object__nav-link--prev" 
        href="<?= get_permalink($prev_post->ID); ?>"
      >
        <?= 
          wpm_translate_string('[:it]Oggetto precedente[:en]Previous object[:ru]Предыдущий объект');
        ?>:
        <br>
        <?= wpm_translate_string($prev_post->post_title); ?>
      </a>
    <?php endif; ?>

    <?php 
      $next_post = get_adjacent_post(0, '', 0);
      if( $next_post ) :
    ?>
      <a 
        class="p-object__nav-link p-object__nav-link--next" 
        href="<?= get_permalink($next_post->ID); ?>"
      >
        <?= 
          wpm_translate_string('[:it]Oggetto successivo[:en]Next object[:ru]Следующий объект'); 
        ?>:
        <br>
        <?= wpm_translate_string($next_post->post_title); ?>
      </a>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>