<?php
defined( 'ABSPATH' ) || exit;
$_row_id = get_row_index();
$_options_image = get_sub_field_object('image');
$_options_overlay_colour = get_sub_field('gradient-colour');
$_options_text_colour = get_sub_field('text-colour');
$_options_vertical_offset = get_sub_field('vertical-offset');
$_button_options__ID = get_sub_field_object('button-url')["ID"];
$_button_options__style = 'transparent';
$_button_options__text_colour = get_sub_field('text-colour');
$_button_options__url = get_sub_field('button-url');
$_button_options__label = get_sub_field('button-label');
$_button_options__external = get_sub_field('external-link');
$_button_pseudo = 'false';
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');

echo '<section class="cta-banner row-id-'. $_row_id .'" style="transform: translateY('. $_options_vertical_offset .'px); margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;"">
  <img class="cta-banner--image image-id-'. $_options_image["ID"] .'" src="' . $_options_image["value"]["url"] . '" alt="'. $_options_image["value"]["alt"] . '" />
  <div class="cta-banner--overlay" style="background-image: linear-gradient(90deg, '. $_options_overlay_colour .'FF 50%, '. $_options_overlay_colour .'33 100%);"></div>
  <span class="cta-banner--content">
    <h2 class="cta-banner--content--title" style="color: '. $_options_text_colour .' !important">'. get_sub_field('title') .'</h2>
    <article class="cta-banner--content--content" style="color: '. $_options_text_colour .' !important">'. get_sub_field('content') .'</article>';
    if($_button_options__url != '' && $_button_options__label != '')
    {
      include(__DIR__ . '/../../templates/components/button/_button.php' );
    };
  echo '</span>
</section>';
?>
