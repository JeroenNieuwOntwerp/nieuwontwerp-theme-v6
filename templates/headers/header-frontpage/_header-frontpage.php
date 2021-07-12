<?php
defined( 'ABSPATH' ) || exit;
$_header_image = get_field_object('thumbnail');
$_button_options__ID = get_field_object('button-url')["ID"];
$_button_options__style = 'coloured';
$_button_options__text_colour = get_field('text-colour');
$_button_options__button_colour = get_field('background-colour');
$_button_options__url = get_field('button-url');
$_button_options__label = get_field('button-label');
$_button_options__external = get_field('external-link');
$_button_pseudo = 'false';
echo '<header class="front-header">
  <div class="front__slider">
    <div class="slide"><img class="slider-image slider-image-id-'. $_header_image["ID"] .'" src="' . $_header_image["value"]["url"] . '" alt="'. $_header_image["value"]["alt"] . '" /></div>';
  while(have_rows('front-page--slider'))
  {
    the_row();
    $_image_id = get_sub_field_object('front-page--slider--slide');
    echo '<div class="slide"><img class="slider-image slider-image-id-'. $_image_id["ID"] .'" src="' . $_image_id["value"]["url"] . '" alt="'. $_image_id["value"]["alt"] . '" /></div>';
  };
  echo '</div>
  <aside class="front-header__overlay"></aside>
  <div class="introduction__wrapper">
    <span>';
      if( get_field('introduction') == '' ) { echo '<h5>dieseko group</h5>'; };
      echo '<h1 class="introduction__title">'. get_the_title($post->ID) .'</h1>
      '. get_field('introduction') .'
    </span>';
    if($_button_options__url != '' && $_button_options__label != '')
    {
      include(__DIR__ . '/../../components/button/_button.php' );
    };
  echo '</div>
</header>';
?>
