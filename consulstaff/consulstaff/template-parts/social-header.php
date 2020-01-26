<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
?>
<div class="nav-bar__social">
  <div class="social">
    <a class="social__link social__link--instagram" href="<?php the_field('social_fb', $frontpage_id); ?>"></a>
    <a class="social__link social__link--facebook" href="<?php the_field('social_in', $frontpage_id); ?>"></a>
    <a class="social__link social__link--vkontakte" href="<?php the_field('social_vk', $frontpage_id); ?>"></a>
  </div>
</div>