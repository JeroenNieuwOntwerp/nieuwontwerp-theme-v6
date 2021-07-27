<?php

defined( 'ABSPATH' ) || exit;

$_row_id = get_row_index();
$_id = get_sub_field('form--form-id');
//
echo '<section class="form row-id-'. $_row_id .'">
  ' . do_shortcode("[ninja_form id=" . $_id . "]") . '
</section>';
?>
