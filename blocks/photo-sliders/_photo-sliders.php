<?php

defined( 'ABSPATH' ) || exit;
$_options = get_sub_field('photo-sliders--primary');
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');
//
if($_options == 'left')
{
  echo '<section class="photo-sliders primary-left" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">';
} else {
  echo '<section class="photo-sliders primary-right" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">';
};
if($_options == 'left')
{
  echo '<div class="photo-sliders--left-slider primary">';
} else
{
  echo '<div class="photo-sliders--left-slider secondary">';
}
if(have_rows('photo-sliders--left-slider'))
{
  echo '<div class="photo-sliders--slider">';
  while(have_rows('photo-sliders--left-slider'))
  {
    the_row();
    $_image_id = get_sub_field_object('photo-sliders--left-slider--slide');
    echo '<div class="slide"><img class="slider-image slider-image-id-'. $_image_id["ID"] .'" src="' . $_image_id["value"]["url"] . '" alt="'. $_image_id["value"]["alt"] . '" /></div>';
  }
  echo '</div>';
}
echo '</div>';
if($_options == 'right')
{
  echo '<div class="photo-sliders--right-slider primary">';
} else
{
  echo '<div class="photo-sliders--right-slider secondary">';
}
if(have_rows('photo-sliders--right-slider'))
{
  echo '<div class="photo-sliders--slider">';
  while(have_rows('photo-sliders--right-slider'))
  {
    the_row();
    $_image_id = get_sub_field_object('photo-sliders--right-slider--slide');
    echo '<div><img class="slider-image slider-image-id-'. $_image_id["ID"] .'" src="' . $_image_id["value"]["url"] . '" alt="'. $_image_id["value"]["alt"] . '" /></div>';
  }
  echo '</div>';
}
echo '</div>';
echo '</section>';
?>
