<?php
/*
Template Name: Template C
Template Post Type: products
*/

get_header();

include_once(__DIR__ . '/nav/_nav.php');
include_once(__DIR__ . '/headers/header-sub/_header-sub.php');

echo '<main>';
while( have_rows('content') ): the_row();
  $variable = get_row_layout();
  $_block = __DIR__ .'/../blocks/'.$variable.'/_'.$variable.'.php';
  include($_block);
endwhile;
echo '</main>';
include_once(__DIR__ . '/footer/_footer.php');
?>
