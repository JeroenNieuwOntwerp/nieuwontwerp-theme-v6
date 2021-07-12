<?php

add_action('admin_init', 'no_disable_comments_post_types_support');
add_filter('comments_open', 'no_disable_comments_status', 20, 2);
add_filter('pings_open', 'no_disable_comments_status', 20, 2);
add_filter('comments_array', 'no_disable_comments_hide_existing_comments', 10, 2);
add_action('admin_menu', 'no_disable_comments_admin_menu');
add_action('admin_init', 'no_disable_comments_admin_menu_redirect');
add_action('admin_init', 'no_disable_comments_dashboard');
add_action('init', 'no_disable_comments_admin_bar');

function no_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if(post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}

function no_disable_comments_status() {
	return false;
}

function no_disable_comments_hide_existing_comments($comments) {
	$comments = array();
	return $comments;
}

function no_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}

function no_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}

function no_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}

function no_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}

?>
