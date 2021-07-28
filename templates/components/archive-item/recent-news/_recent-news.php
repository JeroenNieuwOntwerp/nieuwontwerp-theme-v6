<?php
defined( 'ABSPATH' ) || exit;

$_button_options__ID = get_the_ID($post);
$_button_options__style = 'transparent';
$_button_options__text_colour = '#202020';
$_button_options__url = get_the_permalink($post);
$_button_options__label = 'Read article';
$_button_pseudo = 'true';

echo '<div class="recent-project-card">
  <h2>NIEUWS</h2>
  <span class="content">
  ';
  include(__DIR__ . '/../../button/_button.php' );
  echo '</span>
</div>';

?>
