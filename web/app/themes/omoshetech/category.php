<?php get_template_part('templates/breadcrumbs'); ?>
<?php get_template_part('templates/category', 'header'); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>

<?php get_template_part('templates/pagination');
