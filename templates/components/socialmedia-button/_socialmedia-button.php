<?php

defined( 'ABSPATH' ) || exit;


echo '<p class="socialmedia--button">
  <a href="'. $_socialmedia_url .'" target="_blank" rel="noopener nofollow noreferrer">
    <img class="socialmeduia--button--icon--default" src="'. $_socialmedia_icon_norm["value"]["url"] .'" height="24px" width="24px" alt="'. $_socialmedia_icon_norm["value"]["alt"] .'" title="'. $_socialmedia_icon_norm["value"]["alt"] .'" />
    <img class="socialmeduia--button--icon--default" src="'. $_socialmedia_icon_hover["value"]["url"] .'" height="24px" width="24px" alt="'. $_socialmedia_icon_hover["value"]["alt"] .'" title="'. $_socialmedia_icon_hover["value"]["alt"] .'" />
  </a>
</p>';

?>
