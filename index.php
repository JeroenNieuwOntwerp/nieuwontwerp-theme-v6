<?php
get_header();
include_once('templates/header/_header.php');
//
include_once('templates/nav/_nav.php');
//
echo '<main>';
echo get_template_part( 'templates/index/_index', get_post_type());
echo '</main>';
//
include_once('templates/footer/_footer.php');
?>
