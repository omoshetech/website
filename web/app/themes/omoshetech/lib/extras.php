<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Disable page scroll when clicking the more link
 */
function disable_more_link_scroll($link) {
	return preg_replace('|#more-[0-9]+|', '', $link);
}
add_filter('the_content_more_link', 'disable_more_link_scroll');

/**
 * Disable moving checked items out of the hierarchy and to the top of the list
 */
function disable_checked_ontop($args, $post_id = 0) {
  $args['checked_ontop'] = false;
  return $args;
}
add_filter('wp_terms_checklist_args', 'disable_checked_ontop');
