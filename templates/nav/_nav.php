<?php
defined( 'ABSPATH' ) || exit;

echo '<nav class="nav--bars--upper">
  <a href="'. site_url() .'" rel="noopener nofollow noreferrer" class="home__button"><img src="'. get_template_directory_uri() .'/assets/img/logo.svg" alt="Dieseko Group B.V."</a>';

$_submenu_options = array(
  'items_wrap'      => '<ul class="top__menu web menu" id="%1$s">%3$s</ul>',
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

echo '<div class="search__panel">
    <input type="text" name="keyword" id="keyword" class="bar" onkeyup="no_search_fetch()" placeholder="Search..."></input>
    <img src="'. get_template_directory_uri() .'/assets/img/search-white.svg" alt="Search" height="24px" width="24px" />
  </div>
</nav>
<nav class="nav--bars--background"></nav>
<aside class="search--menu--results">

</aside>';
?>
