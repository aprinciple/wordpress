<?php if( !defined( 'ABSPATH')){ exit(); }

global $or_template_directory;
$or_template_directory = pn_strip_input($or_template_directory);

$f_change = get_theme_option('f_change', array('ctext','timetable','phone','vk','fb','gp','tw'));
?>


  <div class="crypto-rates">
    <div id="coinmarketcap-widget-marquee" coins="1,1027,825,52,74,2010,1839,2,3,4,5,6" currency="USD" theme="light" transparent="true" show-symbol-logo="true">
    </div>
  </div>
  <footer class="footer">
    <div class="container footer__container">
      <div class="footer__bar">
        <a class="logo logo--white footer__logo" href="#"></a>
        <?php wp_nav_menu( ['theme_location' => 'footer_menu'] ); ?>
        <!-- <div class="language-switcher footer__language-switcher"></div> -->
      </div>
    </div>
  </footer>
<?php wp_footer(); ?>
<script src="//code.jivosite.com/widget/5Vdu4hgKnP" async></script>
</body>
</html>