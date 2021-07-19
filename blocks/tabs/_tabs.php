<?php
defined( 'ABSPATH' ) || exit;

$_row_id = get_row_index();
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');

echo '<section class="tabs row-id-'. $_row_id .'" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">
<aside class="tabs--images">';
$_int = 0;
while(have_rows('tabs--repeater'))
{
  the_row();
  $_tab_id = get_row_index();
  $_image = get_sub_field_object('tabs--row--image');
  if($_int == 0)
  {
    echo '<img class="tab-image is-active tab-id-'. $_tab_id .'" src="' . $_image["value"]["url"] . '" alt="'. $_image["value"]["alt"] . '" />';
  } else
  {
    echo '<img class="tab-image tab-id-'. $_tab_id .'" src="' . $_image["value"]["url"] . '" alt="'. $_image["value"]["alt"] . '" />';
  }

  $_int++;
};
echo '</aside><article class="tabs--text">';
$_int = 0;
while(have_rows('tabs--repeater'))
{
  the_row();
  $_tab_id = get_row_index();
  if($_int == 0)
  {
    echo '<span class="tabs--text--row is-active tab-id-'. $_tab_id .'"><h3 class="tab-title">'. get_sub_field('tabs--row--title') .'</h3>';
  } else
  {
      echo '<span class="tabs--text--row tab-id-'. $_tab_id .'"><h3 class="tab-title">'. get_sub_field('tabs--row--title') .'</h3>';
  }
  echo '<div class="tab-content">'. get_sub_field('tabs--row--content') .'</div></span>';
  $_int++;
};
echo '</article></section>';
while(have_rows('tabs--repeater'))
{
  the_row();
  $_tab_id = get_row_index();
  echo'<script>
    $(document).ready(function()
    {
      $(".tabs--text--row.tab-id-'. $_tab_id .' .tab-title").click(function(){
          $(".tab-image").removeClass("is-active");
          $(".tabs--text--row").removeClass("is-active");
          $(".tab-image.tab-id-'. $_tab_id .'").addClass("is-active");
          $(".tabs--text--row.tab-id-'. $_tab_id .'").addClass("is-active");
      });
    });
  </script>';
}
