<?php

defined( 'ABSPATH' ) || exit;

$_row_id = get_row_index();
$_options_colour = get_sub_field('colour');
$_options_position = get_sub_field('position');
$_options_size = get_sub_field('size');
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');
$_content = get_sub_field_object('content');
//
echo '<h'. $_options_size .' class="heading heading-position-'. $_options_position .' heading-id-'. $_row_id .'" style="color: '. $_options_colour .'; margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">'. $_content["value"]  .'</h'. $_options_size  .'>';
?>
