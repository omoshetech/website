<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Prevent page scroll when clicking the more link
 */
function remove_more_link_scroll($link) {
	return preg_replace('|#more-[0-9]+|', '', $link);
}
add_filter('the_content_more_link', 'remove_more_link_scroll');
