<?php
defined( 'ABSPATH' ) || exit;

$_button_options__ID = get_the_ID($post);
$_button_options__style = 'transparent';
$_button_options__text_colour = '#202020';
$_button_options__url = get_the_permalink($post);
$_button_options__label = 'Read project';
$_button_pseudo = 'true';
$_introduction = get_field('introduction');
$_item_image = get_field_object('thumbnail', $post);

echo '<a class="recent-project-card" href="'. get_the_permalink($post) .'" rel="noopener nofollow noreferrer">
  <div class="image-wrapper">
    <img class="recent-project--image image-id-'. $_item_image["ID"] .'" src="' . $_item_image["value"]["url"] . '" alt="'. $_item_image["value"]["alt"] . '" />
  </div>
  <span class="content">
    <h5>project</h5>
    <p>
      ' . $introduction;
      if (strlen($_introduction) > 200 ) echo '...';
    echo '</p>';
    include(__DIR__ . '/../../button/_button.php' );
  echo '</span>
</a>';

?>
