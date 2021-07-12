<?php

defined( 'ABSPATH' ) || exit;

echo '<a class="archive--item" href="'. get_the_permalink() .'" rel="noopener nofollower">
  <h3 class="archive--item--title">' . get_the_title() . '</h3>
  <span class="archive--item--descript">' . substr(get_the_content(), 0, 200) . '</span>
  <div class="archive--item--image" style="background-image:url(' . get_the_post_thumbnail_url($post = $post, $size = 'card') . ');"></div>
</a>';

?>
