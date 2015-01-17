<?php
  if (is_single()) {
    the_post_thumbnail('large');
  } else {
    the_post_thumbnail('medium');
  }
?>
<time class="updated" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
<div class="addthis_sharing_toolbox" data-url="<?php echo get_permalink(); ?>" data-title="<?php the_title_attribute(); ?>"></div>
