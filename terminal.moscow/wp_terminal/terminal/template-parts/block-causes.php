<section class="causes block-mob">
  <div class="wrapper">
    <h2 class="page-title">
    <?php the_field('causes_title'); ?>
    </h2>
    <div class="causes-row">
      <?php 
        $counter = 1;
        while ($counter < 6):
          $causes_items = get_field('causes_items');
          $field_item = 'causes_item-' . $counter;
          $causes_item = $causes_items[$field_item];
        
          if ($causes_item): 
            echo '<div class="causes-col">'.$causes_item.'</div>';
          endif; 

          $counter++;
        endwhile;
      ?>
    </div>
  </div>
</section>