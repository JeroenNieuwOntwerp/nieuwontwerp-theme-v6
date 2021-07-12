<?php
get_header();
//
include_once('templates/nav/_nav.php');
//
include_once('templates/headers//header-sub/_header-sub.php');
//
echo '<main>';
echo get_template_part( 'templates/content/_content', get_post_type());
echo '</main>';
//
include_once('templates/footer/_footer.php');
?>
