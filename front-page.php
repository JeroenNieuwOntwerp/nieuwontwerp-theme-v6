<?php

get_header();
//
include_once('templates/nav/_nav.php');
//
include_once('templates/headers/header-frontpage/_header-frontpage.php');
//
echo '<main>';
while( have_rows('flex-content') ): the_row();
  $variable = get_row_layout();
  $_block = 'blocks/'.$variable.'/_'.$variable.'.php';
  include($_block);
endwhile;
echo '</main>
<style>
  .row-id-'. get_field('black--background') .'::before
  {
    content: "";
    display: block;
    height: 865px;
    width: 100%;
    position: absolute;
    top: -150px;
    left: 0px;
    right: 0px;
    z-index: -5;
    background-color: #202020;
  }
</style>';
include_once('templates/footer/_footer.php');
?>
