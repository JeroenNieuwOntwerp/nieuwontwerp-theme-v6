<?php
/*
 * NO Functions
 *
 */
include_once('functions/_acf_option_pages.php');
include_once('functions/_cpt.php');
include_once('functions/_scripts.php');
include_once('functions/_shortcodes.php');
include_once('functions/_thumbnails.php');
include_once('functions/_menu.php');
include_once('functions/_nocomments.php');
include_once('functions/_userprofiles.php');
include_once('functions/_gtag.php');
include_once('functions/ajax/_ajax_search.php');

add_action('admin_head', 'no_adminlogo');
add_action( 'admin_head', 'no_favicon' );

function no_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_bloginfo('template_url') . '/assets/favicon/favicon.ico" />';
}

function no_adminlogo() {
	echo '<style type="text/css">#header-logo { background-image: url('.get_bloginfo('template_url').'/img/logo.png) !important; }</style>';
}

?>
