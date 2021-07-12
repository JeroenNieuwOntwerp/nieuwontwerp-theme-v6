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
  <img class="sub-header__image" src="' . $_header_image["value"]["url"] . '" alt="'. $_header_image["value"]["alt"] . '" />
  <aside class="sub-header__overlay"></aside>
  <p class="breadcrumbs__wrapper"></p>
  <div class="introduction__wrapper">
    <span>
      <h1 class="introduction__title">'. get_the_title($post->ID) .'</h1>
      '. get_field('introduction') .'
    </span>';
    if($_button_options__url != '' && $_button_options__label != '')
    {
      include(__DIR__ . '/../../components/button/_button.php' );
    };
  echo '</div>
</header>';
?>
