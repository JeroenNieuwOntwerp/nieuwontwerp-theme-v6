<?php
defined( 'ABSPATH' ) || exit;

$_button_options__ID = get_the_ID($post);
$_button_options__style = 'transparent';
$_button_options__text_colour = $_tile_textcolour;
$_button_options__url = $_tile_url;
$_button_options__label = $_tile_label;
$_button_pseudo = 'true';
echo '<a href="'. $_tile_url .'" rel="noopener nofollow noreferrer" class="slider-slide-background">
  <img class="slider-slide--image image-id-'. $_tile_image["ID"] .'" src="' . $_tile_image["value"]["url"] . '" alt="'. $_tile_image["value"]["alt"] . '" />
  <div class="slider-slide--overlay" style="background-image: linear-gradient(0deg, '. $_tile_overlaycolour .'80 0%, '. $_tile_overlaycolour .'00 100%);"></div>
  <span class="slider-slide--content" style="color: '. $_tile_textcolour .' !important;">
    <h3 class="slider-slide--title">'. $_tile_content .'</h3>';
    include(__DIR__ . '/../../../../templates/components/button/_button.php' );
  echo '</span>
</a>';

?>
