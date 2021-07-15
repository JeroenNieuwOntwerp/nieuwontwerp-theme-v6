<?php
defined( 'ABSPATH' ) || exit;

$_button_options__ID = get_the_ID($post);
$_button_options__style = 'transparent';
$_button_options__text_colour = $_tile_textcolour;
$_button_options__url = $_slide_url;
$_button_options__label = $_slide_label;
$_button_pseudo = 'true';
echo '<a href="'. $_slide_url .'" rel="noopener nofollow noreferrer" class="slider-slide-background">
  <img class="slider-slide--image image-id-'. $_slide_image["ID"] .'" src="' . $_slide_image["value"]["url"] . '" alt="'. $_slide_image["value"]["alt"] . '" />
  <div class="slider-slide--overlay" style="background-image: linear-gradient(0deg, #20202080 0%, #20202000 100%);"></div>
  <span class="slider-slide--content" style="color: '. $_slide_textcolour .' !important;">
    <h3 class="slider-slide--title">'. $_slide_title .'</h3>';
    include(__DIR__ . '/../../../../templates/components/button/_button.php' );
  echo '</span>
</a>';

?>
