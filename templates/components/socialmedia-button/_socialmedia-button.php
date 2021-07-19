<?php

defined( 'ABSPATH' ) || exit;


echo '<p class="socialmedia--button">
  <a href="'. $_socialmedia_url .'" target="_blank" rel="noopener nofollow noreferrer">
    <img src="'. $_socialmedia_icon["value"]["url"] .'" height="24px" width="24px" alt="'. $_socialmedia_icon["value"]["alt"] .'" title="'. $_socialmedia_icon["value"]["alt"] .'" />
  </a>
</p>';

?>
