<?php 
/*
Template name: Страница - Вопросы и ответы
*/
get_header();
?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <?= do_shortcode( '[form_callback]' ); ?>
  <section class="content">
    <?php the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
          <div class="head">
            <h2>
              <?php the_title(); ?>
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
          <div class="faq">
            <div class="dropdown">
              <input class="hide" id="hd-1" type="checkbox">
              <label for="hd-1">
                <?php the_field('ask_adn_title-1'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-1'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-2" type="checkbox">
              <label for="hd-2">
                <?php the_field('ask_adn_title-2'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-2'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-3" type="checkbox">
              <label for="hd-3">
                <?php the_field('ask_adn_title-3'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-3'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-4" type="checkbox">
              <label for="hd-4">
                <?php the_field('ask_adn_title-4'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-4'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-5" type="checkbox">
              <label for="hd-5">
                <?php the_field('ask_adn_title-5'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-5'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-6" type="checkbox">
              <label for="hd-6">
                <?php the_field('ask_adn_title-6'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-6'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-7" type="checkbox">
              <label for="hd-7">
                <?php the_field('ask_adn_title-7'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-7'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-8" type="checkbox">
              <label for="hd-8">
                <?php the_field('ask_adn_title-8'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-8'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-9" type="checkbox">
              <label for="hd-9">
                <?php the_field('ask_adn_title-9'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-9'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-10" type="checkbox">
              <label for="hd-10">
                <?php the_field('ask_adn_title-10'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-10'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-11" type="checkbox">
              <label for="hd-11">
                <?php the_field('ask_adn_title-11'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-11'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-12" type="checkbox">
              <label for="hd-12">
                <?php the_field('ask_adn_title-12'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-12'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-13" type="checkbox">
              <label for="hd-13">
                <?php the_field('ask_adn_title-13'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-13'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-14" type="checkbox">
              <label for="hd-14">
                <?php the_field('ask_adn_title-14'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-14'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-15" type="checkbox">
              <label for="hd-15">
                <?php the_field('ask_adn_title-15'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-15'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-16" type="checkbox">
              <label for="hd-16">
                <?php the_field('ask_adn_title-16'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-16'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-17" type="checkbox">
              <label for="hd-17">
                <?php the_field('ask_adn_title-17'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-17'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-18" type="checkbox">
              <label for="hd-18">
                <?php the_field('ask_adn_title-18'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-18'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-19" type="checkbox">
              <label for="hd-19">
                <?php the_field('ask_adn_title-19'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-19'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-20" type="checkbox">
              <label for="hd-20">
                <?php the_field('ask_adn_title-20'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-20'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-21" type="checkbox">
              <label for="hd-21">
                <?php the_field('ask_adn_title-21'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-21'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-22" type="checkbox">
              <label for="hd-22">
                <?php the_field('ask_adn_title-22'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-22'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-23" type="checkbox">
              <label for="hd-23">
                <?php the_field('ask_adn_title-23'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-23'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-24" type="checkbox">
              <label for="hd-24">
                <?php the_field('ask_adn_title-24'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-24'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-25" type="checkbox">
              <label for="hd-25">
                <?php the_field('ask_adn_title-25'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-25'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-26" type="checkbox">
              <label for="hd-26">
                <?php the_field('ask_adn_title-26'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-26'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-27" type="checkbox">
              <label for="hd-27">
                <?php the_field('ask_adn_title-27'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-27'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-28" type="checkbox">
              <label for="hd-28">
                <?php the_field('ask_adn_title-28'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-28'); ?>
              </div>
            </div>
            <div class="dropdown">
              <input class="hide" id="hd-29" type="checkbox">
              <label for="hd-29">
                <?php the_field('ask_adn_title-29'); ?>
              </label>
              <div>
                <?php the_field('ask_adn_text-29'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>