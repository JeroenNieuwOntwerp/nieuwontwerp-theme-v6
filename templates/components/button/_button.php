<?php
defined( 'ABSPATH' ) || exit;
if($_button_options__style == 'transparent')
{
    if($_button_options__external == '1')
    {
      if($_button_pseudo != 'true')
      {
          echo '<a class="button__wrapper transparent" id="button-id-'. $_button_index .'" href="'. $_button_options__url .'" target="_blank" rel="noopener nofollow noreferrer">';
      } else {
        echo '<p class="button__wrapper transparent" id="button-id-'. $_button_index .'">';
      }
    }
    else
    {
      if($_button_pseudo != 'true')
      {
        echo '<a class="button__wrapper transparent" id="button-id-'. $_button_index .'" href="'. $_button_options__url .'" rel="noopener nofollow noreferrer">';
      } else {
        echo '<p class="button__wrapper transparent" id="button-id-'. $_button_index .'">';
      }
    }
    echo '<span class="button__label" style="color: '. $_button_options__text_colour . ' !important">' . $_button_options__label . '</span>
    <svg id="arrow" height="48px" viewBox="0 0 24 24" width="48px">
      <path d="M0 0h24v24H0z" fill="none"/>
      <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
    </svg>';
    if($_button_pseudo != 'true')
    {
      echo '</a>';
    } else {
      echo '</p>';
    };
} elseif ($_button_options__style == 'coloured')
{
  if($_button_options__external == '1')
  {
    if($_button_pseudo != 'true')
    {
        echo '<a class="button__wrapper coloured" id="button-id-'. $_button_index .'" href="'. $_button_options__url .'" target="_blank" rel="noopener nofollow noreferrer" style="background-color: '. $_button_options__button_colour .'">';
    } else {
      echo '<p class="button__wrapper coloured" id="button-id-'. $_button_index .'" style="background-color: '. $_button_options__button_colour .'">';
    }
  }
  else
  {
    if($_button_pseudo != 'true')
    {
      echo '<a class="button__wrapper coloured" id="button-id-'. $_button_index .'" href="'. $_button_options__url .'" rel="noopener nofollow noreferrer" style="background-color: '. $_button_options__button_colour .'">';
    } else {
      echo '<p class="button__wrapper coloured" id="button-id-'. $_button_index .'" style="background-color: '. $_button_options__button_colour .'">';
    }
  }
  echo '<svg id="arrow" height="48px" viewBox="0 0 24 24" width="48px">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
  </svg>
  <span class="button__label" style="color: '. $_button_options__text_colour . ' !important">' . $_button_options__label . '</span>';
  if($_button_pseudo != 'true')
  {
    echo '</a>';
  } else {
    echo '</p>';
  };
}
echo '<style>
  #button-id-'. $_button_index .':after
  {
    border-color: '. $_button_options__text_colour .';
  }
  #button-id-'. $_button_index .' #arrow
  {
    fill: '. $_button_options__text_colour .';
  }
  </style>';

$_button_index++;
?>
