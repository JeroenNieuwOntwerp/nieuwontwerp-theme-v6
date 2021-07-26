<?php
defined( 'ABSPATH' ) || exit;

$_row_id = get_row_index();
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');
$_options__style = get_sub_field('style');
echo '<section class="contact-information flex row-id-'. $_row_id .' '. $_options__style .'" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">';
while( have_rows('contact-information--contacts') ) :
  the_row();
  $_post = get_sub_field('contact-information--contact');
  $post = $_post;
  setup_postdata($post);
  include(__DIR__ . '/../../templates/components/contact-card/_contact-card.php' );
  wp_reset_postdata();
endwhile;
echo '</section>';
?>
