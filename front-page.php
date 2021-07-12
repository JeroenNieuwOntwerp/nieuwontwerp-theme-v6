<?php

get_header();

include_once('templates/headers/header-frontpage/_header-frontpage.php');
include_once('templates/nav/_nav.php');
echo '<main>';
while( have_rows('flex-content') ): the_row();
  $variable = get_row_layout();
  $_block = 'blocks/'.$variable.'/_'.$variable.'.php';
  include($_block);
endwhile;
echo '</main>';
include_once('templates/footer/_footer.php');
?>
