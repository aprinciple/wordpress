<section class="certificates">
  <div class="wrapper">
    <h2 class="page-title">
    <?php the_field('certificates_title'); ?>
    </h2>
    <div class="certificates-slider">
      <?php 
        $counter = 1;
        while ($counter < 6):
          $certificates = get_field('certificates');
          $field_item = 'certificate-' . $counter;
          $certificate_item = $certificates[$field_item];
        
          if ($certificate_item): 
            echo '<div class="certificates-slide">';
              echo '<a href="'.$certificate_item.'" data-lightbox="roadtrip">';
                echo '<img src="'.$certificate_item.'" alt="Сертификат">';
              echo '</a>';
            echo '</div>';
          endif; 

          $counter++;
        endwhile;
      ?>
    </div>
  </div>
</section>