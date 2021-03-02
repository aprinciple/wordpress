<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
?>
<div class="social">
  <a 
    class="social__item" 
    href="<?php the_field('social_in', $frontpage_id); ?>" 
    target="_blank">
    <svg class="social__item-icon social__item-icon-instagram">
      <use href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#instagram"></use>
    </svg>
    Instagram
  </a>
  <a 
    class="social__item" 
    href="<?php the_field('social_ln', $frontpage_id); ?>" 
    target="_blank">
    <svg class="social__item-icon social__item-icon-linkedin">
      <use href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#linkedin"></use>
    </svg>
    Linkedin
  </a>
  <a 
    class="social__item" 
    href="<?php the_field('social_fb', $frontpage_id); ?>" 
    target="_blank">
    <svg class="social__item-icon social__item-icon-facebook">
      <use href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#facebook"></use>
    </svg>
    Facebook
  </a>
</div>