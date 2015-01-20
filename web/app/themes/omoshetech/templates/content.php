<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="row">
    <div class="col-md-6">
      <div class="entry-meta">
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
    </div>
    <div class="col-md-6">
      <div class="entry-summary">
        <?php the_content('続きを読む'); ?>
      </div>
    </div>
  </div>
</article>
