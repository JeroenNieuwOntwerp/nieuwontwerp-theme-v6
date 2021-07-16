<?php

defined( 'ABSPATH' ) || exit;

$_row_id = get_row_index();
$_options__image = get_sub_field_object('image');
$_options__text_position = get_sub_field('options--text-position');
$_options__text_colour = get_sub_field('options--text-colour');
$_options__background_colour = get_sub_field('options--background-colour');
$_options__quotation_symbol = get_sub_field('options--quotation-symbol');
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');

if($_options__quotation_symbol == '1')
{
  echo '<section class="text-and-photo is-quote text-'. $_options__text_position .'" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">';
} else {
  echo '<section class="text-and-photo text-'. $_options__text_position .'" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">';
}
echo '<img class="text-and-photo--photo image-id-'. $_options__image["ID"] .'" src="' . $_options__image["value"]["url"] . '" alt="'. $_options__image["value"]["alt"] . '" />
  <article class="text-and-photo--text" style="background-color: '. $_options__background_colour .'!important; color: '. $_options__text_colour .' !important;">';
  if ($_options__quotation_symbol == '1')
  {
      echo '<svg x="0px" y="0px" viewBox="0 0 112 90" style="enable-background:new 0 0 112 90;">
      <g style="fill: '. $_options__text_colour .'50 !important">
      	<path d="M45.5,18.3L37.6,1.9c-8.5,3-15.5,7.2-21,12.5c-5.5,5.3-9.2,11.3-11.3,17.9c-2,6.7-3.1,15.8-3.1,27.3v28.5h39.9V48.3H22.9
      		c0.2-7.9,2-14.1,5.5-18.9C31.8,24.7,37.5,21,45.5,18.3z"/>
      	<path d="M94.9,29.4c3.5-4.7,9.2-8.4,17.1-11.1l-7.8-16.5c-8.4,3-15.4,7.2-20.9,12.5c-5.5,5.3-9.3,11.3-11.4,17.9
      		c-2,6.6-3.1,15.7-3.1,27.4v28.5h39.9V48.3H89.4C89.6,40.4,91.4,34.1,94.9,29.4z"/>
      </g>
      </svg>';
  };
  echo get_sub_field('content') .
  '</article>
</section>';
?>
