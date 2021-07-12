<?php
defined( 'ABSPATH' ) || exit;

while( have_rows('flex-content') ): the_row();
  $variable = get_row_layout();
  $_block = __DIR__ . '/../../blocks/'.$variable.'/_'.$variable.'.php';
  include($_block);
endwhile;

?>
