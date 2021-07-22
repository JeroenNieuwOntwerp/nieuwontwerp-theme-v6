<?php
defined( 'ABSPATH' ) || exit;

$_tile_icon = get_sub_field_object('icon');
$_button_options__ID = get_the_ID($post);
$_button_options__style = 'transparent';
$_button_options__text_colour = '#ADB2B7';
$_button_options__url = $_tile_url;
$_button_options__label = $_tile_label;
$_button_pseudo = 'true';

echo '<a href="'. $_tile_url .'" rel="noopener nofollow noreferrer" class="cta-tile-image-icon">
  <div class="cta-tile--image-wrapper">
    <div class="cta-tile--image--icon--image image-id-'. $_tile_image["ID"] .'" style="background-image: url(' . $_tile_image["value"]["url"] . '); background-color: '. get_sub_field('icon--background') .'"></div>
  </div>
  <img class="cta-tile--icon" src="'. $_tile_icon["value"]["url"] .'" alt="'. $_tile_icon["value"]["url"] .'" />
  <span class="cta-tile--content" style="color: '. $_tile_textcolour .' !important;">
    <h3 class="cta-tile--title">'. $_tile_content .'</h3>';
    include(__DIR__ . '/../../../../templates/components/button/_button.php' );
  echo '</span>
</a>';

?>
