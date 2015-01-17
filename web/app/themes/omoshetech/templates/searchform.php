<form role="search" method="get" class="navbar-form" action="<?php echo esc_url(home_url('/')); ?>">
  <div class="input-group">
    <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" required>
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default" aria-label="検索"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></button>
    </span>
  </div>
</form>
