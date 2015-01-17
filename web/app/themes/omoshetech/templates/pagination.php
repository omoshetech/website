<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pagination">
    <?php $links = paginate_links(array('format' => 'page/%#%/', 'prev_text' => '«', 'next_text' => '»', 'type' => 'array')); ?>
    <?php foreach ($links as $link): ?>
      <li<?php echo get_class_from_pagenate_link($link); ?>><?php echo preg_replace('/\sclass=[\'"][\w\s\-]*[\'"]/', '', $link); ?></li>
    <?php endforeach; ?>
    </ul>
  </nav>
<?php endif; ?>
