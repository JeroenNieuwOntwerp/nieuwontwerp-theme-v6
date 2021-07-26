<?php
defined( 'ABSPATH' ) || exit;

echo '<span class="contact-card contact-id-'. get_the_ID($post) .'">
  <img src="'. get_the_post_thumbnail_url($post, 'thumbnail') .'" />
  <h3 class="contact-card--title">'. get_the_title() .'</h3>';
  if(get_field('is_department') != 'yes')
  {
    echo '<p class="contact-card--job">' . get_field('role') . '</p>';
  };
  $_button_options__ID = get_field_object('telephone-text')["ID"];
  $_button_options__style = 'transparent';
  $_button_options__text_colour = '#202020';
  $_button_options__url = 'tel:' . get_field('telephone-text');
  $_button_pseudo = 'false';
  $_button_options__label = get_field('telephone-text');
  echo '<p>';
    include(__DIR__ . '/../../components/button/_button.php' );
  echo '</p>';
  $_button_options__ID = get_field_object('mail')["ID"];
  $_button_options__style = 'transparent';
  $_button_options__text_colour = '#202020';
  $_button_options__url = 'mailto:'. get_field('mail');
  $_button_pseudo = 'false';
  $_button_options__label = get_field('website-translations--email-me', 'options');
  echo '<p>';
    include(__DIR__ . '/../../components/button/_button.php' );
  echo '</p>
</span>';
