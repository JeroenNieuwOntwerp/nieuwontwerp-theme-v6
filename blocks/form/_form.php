<?php

defined( 'ABSPATH' ) || exit;

$_row_id = get_row_index();
$_id = get_sub_field('id');
//
echo '<section class="no-form no-form-id-'. $_id .'">
  ' . do_shortcode("[ninja_form id=" . $_id . "]") . '
</section>';
?>
