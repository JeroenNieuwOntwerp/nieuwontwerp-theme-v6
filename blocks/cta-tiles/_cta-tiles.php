<?php
defined( 'ABSPATH' ) || exit;

$_row_id = get_row_index();
$_options__layout = get_sub_field('options--layout');
$_options__content_type = get_sub_field('options--content-type');
$_tile_overlaycolour = get_sub_field('overlaycolour');
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');

echo '<section class="cta-tiles cta-tiles-layout-'. $_options__layout .' row-id-'. $_row_id .'" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">';
if( $_options__content_type == 'custom' )
{
  while( have_rows('options--content-type--custom--repeater') )
  {
    the_row();
    $_tile_label = get_sub_field('label');
    $_tile_url = get_sub_field('url');
    $_tile_textcolour = get_sub_field('textcolour');
    $_tile_content = get_sub_field('content');
    $_tile_image = get_sub_field_object('image');
    $_tile = 'layouts/'.$_options__layout.'/_'.$_options__layout.'.php';
    include($_tile);
  }
} elseif( $_options__content_type == 'post-object' )
{
  while( have_rows('options--content-type--post-object--repeater') )
  {
    the_row();
    $post = get_sub_field('post-object');
    setup_postdata($post);
    $_tile_label = get_sub_field('label');
    $_tile_url = get_the_permalink($post);
    $_tile_textcolour = get_sub_field('textcolour');
    $_tile_content = get_the_title($post);
    $_tile_image = get_field_object('thumbnail', $post);
    $_tile = 'layouts/'.$_options__layout.'/_'.$_options__layout.'.php';
    include($_tile);
    wp_reset_postdata();
  }
}
echo '</section>';
?>
