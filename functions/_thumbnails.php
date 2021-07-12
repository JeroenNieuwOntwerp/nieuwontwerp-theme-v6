<?php
add_theme_support( 'post-thumbnails' );
the_post_thumbnail('thumbnail');
the_post_thumbnail('medium');
the_post_thumbnail('large');
the_post_thumbnail('full');
//
set_post_thumbnail_size( 640, 440 );
//
add_image_size( '1080p', 1920, 1080, array( 'center', 'center' ) );
add_image_size( 'card', 380, 520, array( 'center', 'center' ) );

?>
