<?php
defined( 'ABSPATH' ) || exit;

$_row_id = get_row_index();
$_options__layout = get_sub_field('options--layout');
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');

echo '<section class="slider slider-layout-' . $_options__layout . ' row-id-'. $_row_id .'" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">
 <div class="slider__wrapper slider-id-'. $_row_id .'">';
 while( have_rows('slider--repeater') )
 {
   the_row();
   $_slide_title = get_sub_field('slide--title');
   $_slide_label = get_sub_field('slide--label');
   $_slide_url = get_sub_field('slide--url');
   $_slide_textcolour = get_sub_field('slide--textcolour');
   $_slide_image = get_sub_field_object('slide--image');
   $_slide = 'layouts/'.$_options__layout.'/_'.$_options__layout.'.php';
   include($_slide);
 }
 echo '</div>';

 $_button_options__style = 'transparent';
 $_button_options__text_colour = get_sub_field('text-colour');
 $_button_options__url = get_sub_field('button-url');
 $_button_options__label = get_sub_field('button-label');
 $_button_options__external = get_sub_field('external-link');
 $_button_pseudo = 'false';

 if($_button_options__url != '' && $_button_options__label != '')
 {
   include(__DIR__ . '/../../templates/components/button/_button.php' );
 };
echo '</section>';
?>
