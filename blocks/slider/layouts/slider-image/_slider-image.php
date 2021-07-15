<?php
defined( 'ABSPATH' ) || exit;

$_button_options__ID = get_the_ID($post);
$_button_options__style = 'transparent';
$_button_options__text_colour = '#ADB2B7';
$_button_options__url = $_tile_url;
$_button_options__label = $_tile_label;
$_button_pseudo = 'true';

echo '<a href="'. $_tile_url .'" rel="noopener nofollow noreferrer" class="slider-slide-image">
  <img class="slider-slide--image image-id-'. $_tile_image["ID"] .'" src="' . $_tile_image["value"]["url"] . '" alt="'. $_tile_image["value"]["alt"] . '" />
    <h4 class="slider-slide--image" style="color: '. $_tile_textcolour .' !important;">'. $_tile_content .'</h4>';
    include(__DIR__ . '/../../../../templates/components/button/_button.php' );
  echo '</span>
</a>';

?>
