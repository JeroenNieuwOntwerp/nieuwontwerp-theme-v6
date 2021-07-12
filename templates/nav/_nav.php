<?php
defined( 'ABSPATH' ) || exit;

echo '<nav class="nav--bars--upper">
  <a href="'. site_url() .'" rel="noopener nofollow noreferrer" class="home__button">DIESEKO GROUP</a>';

$_submenu_options = array(
  'items_wrap'      => '<ul class="web menu" id="%1$s">%3$s</ul>',
  'theme_location' => 'sub_menu',
  'container' => false,
  'depth' => 3,
  'menu' => 'li',
);

wp_nav_menu($_submenu_options);

echo '<ul class="brands__menu">
    <li>PVE</li>
    <li>ICE</li>
    <li>WOLT</li>
    <li>BELL</li>
  </ul>
</nav>
<nav class="nav--bars--lower">';

$_mainmenu_options = array(
  'items_wrap'      => '<ul class="web menu" id="%1$s">%3$s</ul>',
  'theme_location' => 'main_menu',
  'container' => false,
  'depth' => 3,
  'menu' => 'li',
);

wp_nav_menu($_mainmenu_options);

echo '<div class="search__panel">search...</div></nav>';
?>
