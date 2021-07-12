<?php

defined( 'ABSPATH' ) || exit;

$_image = get_sub_field_object('image');
$_options_leadingdimensions = get_sub_field('leading-dimension');
$_options_maxwidth = get_sub_field('max-width');
$_options_maxheight = get_sub_field('max-height');
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');
//
if($_options_leadingdimensions == 'width')
{
  echo '<img class="fullwidth-image width-leading image-id-'. $_image["ID"] .'" style="max-width: '. $_options_maxwidth .'px !important; margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;" src="' . $_image["value"]["url"] . '" alt="'. $_image["value"]["alt"] . '" />';
} else
{
    echo '<img class="fullwidth-image height-leading image-id-'. $_image["ID"] .'" style="max-height: '. $_options_maxheight .'px !important; margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;" src="' . $_image["value"]["url"] . '" alt="'. $_image["value"]["alt"] . '" />';
}

?>
