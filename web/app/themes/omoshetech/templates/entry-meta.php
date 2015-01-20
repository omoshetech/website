<?php
  the_post_thumbnail('full', array('class' => 'img-responsive'));
?>
<time class="updated" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
<div class="addthis_sharing_toolbox pull-right" data-url="<?php echo get_permalink(); ?>" data-title="<?php the_title_attribute(); ?>"></div>
