<div class="gallery">
  <div class="container">
    <div class="gallery__photos">
      <?php 
        $counter = 1;
        while ($counter < 9):
          $slider_images = get_field('gallery_imgs');
          $field_image = 'gallery_img-' . $counter;
          $slider_image = $slider_images[$field_image];
      ?>
        <?php if ($slider_image) : ?>
          <div class="gallery__photo">
            <a
              data-fslightbox="gallery"
              data-alt="<?= $slider_image['alt']; ?>"
              href="<?= $slider_image['url']; ?>"
            >
              <?= 
                wp_get_attachment_image( $slider_image['id'], 'medium', false, array() );
              ?>
            </a>
          </div>
        <?php endif; ?>
      <?php
          $counter++;
        endwhile;
      ?>
      <div class="gallery__cap"></div>
    </div>
  </div>
</div>