<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<div class="social">
  <a 
    class="soc instagram"
    href="<?php the_field('soc_in', $frontpage_id); ?>"
    target="_blank">
  </a>
  <a 
    class="soc facebook"
    href="<?php the_field('soc_fb', $frontpage_id); ?>"
    target="_blank">
  </a>
  <a 
    class="soc whatsapp"
    href="https://wa.me/<?php the_field('soc_wp', $frontpage_id); ?>">
  </a>
  <a 
    class="soc youtube"
    href="<?php the_field('soc_yt', $frontpage_id); ?>"
    target="_blank">
  </a>
</div>