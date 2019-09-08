<form class="header__form" action="<?php echo home_url( '/' ) ?>" method="GET">
  <div class="header__form-label">
    <input type="search" class="header__form-input" name="s" id="s" value="<?php echo get_search_query() ?>" placeholder="Я ищу...">
    <span class="header__form-cancel"></span>
  </div>
</form>