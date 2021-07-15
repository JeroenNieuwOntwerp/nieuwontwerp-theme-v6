<?php
defined( 'ABSPATH' ) || exit;

$_button_options__ID = get_the_ID($post);
$_button_options__style = 'transparent';
$_button_options__text_colour = '#ADB2B7';
$_button_options__url = $_tile_url;
$_button_options__label = $_tile_label;
$_button_pseudo = 'true';

echo '<a href="'. $_slide_url .'" rel="noopener nofollow noreferrer" class="slider-slide-image">
  <img class="slider-slide--image image-id-'. $_slide_image["ID"] .'" src="' . $_slide_image["value"]["url"] . '" alt="'. $_slide_image["value"]["alt"] . '" />
    <h4 class="slider-slide--image" style="color: '. $_slide_textcolour .' !important;">'. $_slide_label .'</h4>';
    include(__DIR__ . '/../../../../templates/components/button/_button.php' );
  echo '</span>
</a>';

?>
