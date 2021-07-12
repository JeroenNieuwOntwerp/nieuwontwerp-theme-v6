<?php
defined( 'ABSPATH' ) || exit;

$_posttype = 'post';
$_postsperpage = '9';
$_order = 'date';
$_orderby = 'ASC';

$args = array(
  'post_type' => $_posttype,
  'posts_per_page' => $_postsperpage,
  'orderby' => $_orderby,
  'order' => $_order
);
$query = new WP_Query($args);
if($query->have_posts()) :
  echo '<section class="index-flex flex index-type-'. $_posttype .'">';
  while($query->have_posts()) :
    $query->the_post();
    echo '<a class="index--item" href="' . get_the_permalink() . '" rel="noopener nofollower">
      <h3 class="index--item--title">' . get_the_title() . '</h3>
      <span class="index--item--descript">' . substr(get_the_content(), 0, 200) . '</span>
      <div class="index--item--image" style="background-image:url(' . get_the_post_thumbnail_url($post = $post, $size = 'card') . ')"></div>
    </a>';
  endwhile;
  wp_reset_postdata();
  echo '</section>';
endif;
?>
