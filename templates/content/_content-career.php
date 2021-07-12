<?php
defined( 'ABSPATH' ) || exit;

echo '<section class="no-single single-type-post single-id-' . $post->ID . '">
  <article class="no-single--article">' . get_the_content() . '</article>
</section>';
?>
