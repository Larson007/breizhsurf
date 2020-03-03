<form role="search" method="get" class="search-form" action="<?= esc_url( home_url( '/' ) ) ?>">
  <div class="input-group">
    <label class="sr-only" for="s"><?= _x( 'Search :', 'label' ) ?></label>
    <input type="search" class="form-control border-right-0 border rounded-left" placeholder="<?= esc_attr_x( 'Search &hellip;', 'placeholder' ) ?>"
        value="<?= get_search_query() ?>" name="s" id="s">
    <button type="submit" class="input-group-append btn btn-outline-secondary border-left-0 border">
      <span class="sr-only"><?php esc_attr_x( 'Search', 'submit button' ) ?></span>
      <i class="fa fa-search" aria-hidden="true"></i>
    </button>
  </div>
</form>