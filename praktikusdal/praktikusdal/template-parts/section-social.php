<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<div class="social">
  <a 
    class="social__item" 
    href="<?php the_field('footer_social_vk', $frontpage_id); ?>"
    target="_blank">
    <div class="social__item-aside">
      <svg class="social__icon social__icon-vk">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#vk"></use>
      </svg>
    </div>
    Мы в Вконтакте
  </a>
  <a 
    class="social__item" 
    href="tg://resolve?domain=<?php the_field('footer_social_tm', $frontpage_id); ?>">
    <div class="social__item-aside">
      <svg class="social__icon social__icon-tm">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#telegram"></use>
      </svg>
    </div>
    Мы в Телеграм
  </a>
</div>