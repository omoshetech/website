<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-meta">
    <?php get_template_part('templates/entry-meta'); ?>
  </div>
  <div class="entry-summary">
    <?php the_content('続きを読む'); ?>
  </div>
</article>
