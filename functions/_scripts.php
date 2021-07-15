<?php

add_filter( 'clean_url', 'no_async_scripts', 11, 1 );
add_action( 'wp_enqueue_scripts', 'no_style_loader' );
if( !is_admin() ) add_action( 'wp_enqueue_scripts', 'no_script_loader' );

function no_script_loader() {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'http://code.jquery.com/jquery-3.6.0.min.js', false, null );
  wp_enqueue_script ( 'jquery' );
  wp_enqueue_script( 'no_library_aos_js', get_template_directory_uri() . '/libraries/aos/_aos.js', array( 'jquery' ), false, true );
  wp_enqueue_script( 'no_library_slick_js', get_template_directory_uri() . '/libraries/slick/_slick.js', array( 'jquery' ), false, true );
  wp_enqueue_script( 'no_blocks_slider_js', get_template_directory_uri() . '/blocks/slider/_slider.js', array( 'jquery' ), false, true );
  wp_enqueue_script( 'no_blocks_photo_sliders_js', get_template_directory_uri() . '/blocks/photo-sliders/_photo-sliders.js', array( 'jquery' ), false, true );
  wp_enqueue_script( 'no_header_frontpage_sliders_js', get_template_directory_uri() . '/templates/headers/header-frontpage/_header-frontpage.js', array( 'jquery' ), false, true );
  wp_enqueue_script( 'no_templates_nav_js', get_template_directory_uri() . '/templates/nav/_nav.js', array( 'jquery' ), false, true );
}

function no_style_loader() {
		wp_enqueue_style( 'materialicons_css', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
		wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/style.css#asyncload' );
    wp_enqueue_style('fonts_css', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap');
    wp_enqueue_style( 'no_blocks_archive_css', get_template_directory_uri() . '/blocks/archive/_archive.css#asyncload' );
    wp_enqueue_style( 'no_blocks_contact_information_css', get_template_directory_uri() . '/blocks/contact-information/_contact-information.css#asyncload' );
    wp_enqueue_style( 'no_blocks_cta_banner_css', get_template_directory_uri() . '/blocks/cta-banner/_cta-banner.css#asyncload' );
    wp_enqueue_style( 'no_blocks_form_css', get_template_directory_uri() . '/blocks/form/_form.css#asyncload' );
    wp_enqueue_style( 'no_blocks_faq_css', get_template_directory_uri() . '/blocks/faq/_faq.css#asyncload' );
    wp_enqueue_style( 'no_blocks_cta_tiles_css', get_template_directory_uri() . '/blocks/cta-tiles/_cta-tiles.css#asyncload' );
    wp_enqueue_style( 'no_blocks_cta_tiles_background_css', get_template_directory_uri() . '/blocks/cta-tiles/layouts/cta-tile-background/_cta-tile-background.css#asyncload' );
    wp_enqueue_style( 'no_blocks_cta_tiles_icon_css', get_template_directory_uri() . '/blocks/cta-tiles/layouts/cta-tile-icon/_cta-tile-icon.css#asyncload' );
    wp_enqueue_style( 'no_blocks_cta_tiles_image_css', get_template_directory_uri() . '/blocks/cta-tiles/layouts/cta-tile-image/_cta-tile-image.css#asyncload' );
    wp_enqueue_style( 'no_blocks_cta_tiles_image_icon_css', get_template_directory_uri() . '/blocks/cta-tiles/layouts/cta-tile-image-icon/_cta-tile-image-icon.css#asyncload' );
    wp_enqueue_style( 'no_blocks_heading_css', get_template_directory_uri() . '/blocks/heading/_heading.css#asyncload' );
    wp_enqueue_style( 'no_blocks_image_css', get_template_directory_uri() . '/blocks/image/_image.css#asyncload' );
    wp_enqueue_style( 'no_blocks_photo_sliders_css', get_template_directory_uri() . '/blocks/photo-sliders/_photo-sliders.css#asyncload' );
    wp_enqueue_style( 'no_blocks_slider_css', get_template_directory_uri() . '/blocks/slider/_slider.css#asyncload' );
    wp_enqueue_style( 'no_blocks_slider_background_css', get_template_directory_uri() . '/blocks/slider/layouts/slider-background/_slider-background.css#asyncload' );
    wp_enqueue_style( 'no_blocks_slider_image_css', get_template_directory_uri() . '/blocks/slider/layouts/slider-image/_slider-image.css#asyncload' );
    wp_enqueue_style( 'no_blocks_textandphoto_css', get_template_directory_uri() . '/blocks/text-and-photo/_text-and-photo.css#asyncload' );
    wp_enqueue_style( 'no_blocks_textblock_css', get_template_directory_uri() . '/blocks/textblock/_textblock.css#asyncload' );
    wp_enqueue_style( 'no_framework_css', get_template_directory_uri() . '/framework/_framework.css#asyncload' );
    wp_enqueue_style( 'no_library_aos_css', get_template_directory_uri() . '/libraries/aos/_aos.css#asyncload' );
    wp_enqueue_style( 'no_library_slick_css', get_template_directory_uri() . '/libraries/slick/_slick.css#asyncload' );
    wp_enqueue_style( 'no_templates_components_archiveitem_css', get_template_directory_uri() . '/templates/components/archive-item/_archive-item.css#asyncload' );
    wp_enqueue_style( 'no_templates_components_button_css', get_template_directory_uri() . '/templates/components/button/_button.css#asyncload' );
    wp_enqueue_style( 'no_templates_components_contactcard_css', get_template_directory_uri() . '/templates/components/contact-card/_contact-card.css#asyncload' );
    wp_enqueue_style( 'no_templates_content_css', get_template_directory_uri() . '/templates/content/_content.css#asyncload' );
    wp_enqueue_style( 'no_templates_headers_css', get_template_directory_uri() . '/templates/headers/_headers.css#asyncload' );
    wp_enqueue_style( 'no_templates_header_sub_css', get_template_directory_uri() . '/templates/headers/header-sub/_header-sub.css#asyncload' );
    wp_enqueue_style( 'no_templates_header_frontpage_css', get_template_directory_uri() . '/templates/headers/header-frontpage/_header-frontpage.css#asyncload' );
    wp_enqueue_style( 'no_templates_footer_css', get_template_directory_uri() . '/templates/footer/_footer.css#asyncload' );
    wp_enqueue_style( 'no_templates_index_css', get_template_directory_uri() . '/templates/index/_index.css#asyncload' );
    wp_enqueue_style( 'no_templates_nav_css', get_template_directory_uri() . '/templates/nav/_nav.css#asyncload' );
}

function no_async_scripts($url) {
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='async";
}

?>
