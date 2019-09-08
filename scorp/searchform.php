<form class="form form-search" action="<?php echo home_url( '/' ) ?>" method="GET">
  <label class="form__label form-search__label">
    Поиск
    <input type="search" class="form__input form-search__input" name="s" id="s" value="<?php echo get_search_query() ?>" placeholder="Я ищу...">
  </label>
</form>