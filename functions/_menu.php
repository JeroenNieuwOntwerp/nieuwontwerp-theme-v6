<?php
//Replace the wordpress .sticky class with .wordpress-sticky
//.sticky conflicts with Foundation 5 Top Bar

if (!function_exists('remove_sticky_class')) :
    function remove_sticky_class($classes) {
        $classes = array_diff($classes, array("sticky"));
        $classes[] = 'wordpress-sticky';
        return $classes;
    }
endif;
add_filter('post_class', 'remove_sticky_class');

/******menu*******/


/**
 * Left top bar
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
function sub_menu() {
    wp_nav_menu(array(
        'container' => false,                           // remove nav container
        'container_class' => '',           		// class of container
        'menu' => '',                      	        // menu name
        'menu_class' => 'no-menu--sub',         	// adding custom nav class
        'theme_location' => 'sub_menu',                // where it's located in the theme
        'before' => '',                                 // before each link <a>
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
    	'fallback_cb' => false,                         // fallback function (see below)

	));
}
/**
 * Right top bar
 */
function footer_menu() {
    wp_nav_menu(array(
        'container' => false,                           // remove nav container
        'container_class' => '',           		// class of container
        'menu' => '',                      	        // menu name
        'menu_class' => 'no-menu--footer',         	// adding custom nav class
        'theme_location' => 'footer_menu',                // where it's located in the theme
        'before' => '',                                 // before each link <a>
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
    	'fallback_cb' => false,                         // fallback function (see below)

	));
}



function no_menu_setup() {

		//register menu
		register_nav_menus(array(
					'main_menu' => 'Main Menu',
					 'sub_menu' => 'Sub Menu',
						'footer_menu' => 'Footer Menu'
				));
}
add_action('after_setup_theme', 'no_menu_setup');

class GC_walker_nav_menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array()) {
        $indent = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indent
        $output .= "\n" . $indent . '<ul class="dropdown menu">' . "\n";
    }
}

if (!function_exists('wf5bt_menu_set_dropdown')) :
function wf5bt_menu_set_dropdown($sorted_menu_items, $args) {
        $last_top = 0;
        foreach ($sorted_menu_items as $key => $obj) {
            if (0 == $obj->menu_item_parent) {
                $last_top = $key;
            }
			else {
                $sorted_menu_items[$last_top]->classes['dropdown'] = 'has-dropdown';
            }
        }
        return $sorted_menu_items;
}

endif;
add_filter('wp_nav_menu_objects', 'wf5bt_menu_set_dropdown', 10, 2);
add_theme_support( 'menus' );
?>
