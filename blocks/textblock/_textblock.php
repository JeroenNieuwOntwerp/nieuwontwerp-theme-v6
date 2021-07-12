<?php

defined( 'ABSPATH' ) || exit;

$_content = get_sub_field_object('textblock--content');
$_options_bold = get_sub_field('textblock--bold');
$_options_border = get_sub_field('textblock--border');
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');
$_text_options = '';
if($_options_bold == '1')
{
  $_text_options .= ' text--bold';
}
if($_options_border == '1')
{
  $_text_options .= ' text--border-left';
}
//
echo '<section class="textblock" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">
  <article class="text--container text-id-'. $_content["ID"] . $_text_options . '">
    '. $_content["value"] .'
  </article>
</section>';
?>
