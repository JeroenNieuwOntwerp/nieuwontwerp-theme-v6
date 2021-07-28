<?php
add_action( 'init', 'no_customposttypes' );

function no_customposttypes() {
  register_post_type(
    'products',
    array('labels' => array('name' => __( 'Products' ), 'singular_name' => __( 'Product' ), 'add_new' => __( 'New product' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'vibratory-hammers',
    array('labels' => array('name' => __( 'Vibratory Hammers' ), 'singular_name' => __( 'Vibratory Hammer' ), 'add_new' => __( 'New vibratory hammer' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products/vibratory-hammers'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'hydraulic-power-packs',
    array('labels' => array('name' => __( 'Hydraulic Power Packs' ), 'singular_name' => __( 'Hydraulic Power Pack' ), 'add_new' => __( 'New hydraulic power pack' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products/hydraulic-power-packs'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'hydraulic-clamps',
    array('labels' => array('name' => __( 'Hydraulic Clamps' ), 'singular_name' => __( 'Hydraulic Clamp' ), 'add_new' => __( 'New hydraulic clamp' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products/hydraulic-clamps'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'pressing-machines',
    array('labels' => array('name' => __( 'Pressing Machines' ), 'singular_name' => __( 'Pressing Machine' ), 'add_new' => __( 'New pressing machine' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products/pressing-machines'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'resonators',
    array('labels' => array('name' => __( 'Resonators' ), 'singular_name' => __( 'Resonator' ), 'add_new' => __( 'New resonator' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products/resonaters'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'piling-drilling-rigs',
    array('labels' => array('name' => __( 'Piling & Drilling Rigs' ), 'singular_name' => __( 'Piling & Drilling Rig' ), 'add_new' => __( 'New piling & drilling rig' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products/piling-and-drilling-rigs'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'impact-hammers',
    array('labels' => array('name' => __( 'Impact Hammers' ), 'singular_name' => __( 'Impact Hammer' ), 'add_new' => __( 'New impact hammer' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products/impact-hammers'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'rotary-heads',
    array('labels' => array('name' => __( 'Rotary Heads' ), 'singular_name' => __( 'Rotary Head' ), 'add_new' => __( 'New rotary head' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products/rotary-heads'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'electric-hydraulic-power-packs',
    array('labels' => array('name' => __( 'Electric Hydraulic Power Packs' ), 'singular_name' => __( 'Electric Hydraulic Power Pack' ), 'add_new' => __( 'New electric hydraulic power pack' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products/electric-hydraulic-power-packs'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'vibroflots',
    array('labels' => array('name' => __( 'Vibroflots' ), 'singular_name' => __( 'Vibroflot' ), 'add_new' => __( 'New vibroflot' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products/vibroflots'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'dredging-equipment',
    array('labels' => array('name' => __( 'Dredging Equipment' ), 'singular_name' => __( 'Dredging Equipment' ), 'add_new' => __( 'New dredging equipment' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products/dredging-equipment'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'brands',
    array('labels' => array('name' => __( 'Brands' ), 'singular_name' => __( 'Brand' ), 'add_new' => __( 'New brand' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'our-brands'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'innovations',
    array('labels' => array('name' => __( 'Innovations' ), 'singular_name' => __( 'Innovation' ), 'add_new' => __( 'New innovation' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'innovations'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'industry',
    array('labels' => array('name' => __( 'Industry' ), 'singular_name' => __( 'Industry' ), 'add_new' => __( 'New industry' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'innovations'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'expertise',
    array('labels' => array('name' => __( 'Expertises' ), 'singular_name' => __( 'Expertise' ), 'add_new' => __( 'New expertise' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'expertise'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'rental',
    array('labels' => array('name' => __( 'Rental' ), 'singular_name' => __( 'Rental' ), 'add_new' => __( 'New rental' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'rental'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'career',
    array('labels' => array('name' => __( 'Vacancies' ), 'singular_name' => __( 'Vacancy' ), 'add_new' => __( 'New vacancy' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'career'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'service',
    array('labels' => array('name' => __( 'Service & Repair' ), 'singular_name' => __( 'Service & Repair' ), 'add_new' => __( 'New service & repair' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => true,
        'rewrite' => array('slug' => 'service-and-repair'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'team',
    array('labels' => array('name' => __( 'Team' ), 'singular_name' => __( 'Teammember' ), 'add_new' => __( 'New teammember' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => false,
        'rewrite' => array('slug' => 'team'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_post_type(
    'project',
    array('labels' => array('name' => __( 'Projects' ), 'singular_name' => __( 'Project' ), 'add_new' => __( 'New project' )),
        'public' => true,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'thumbnail', 'revisions', 'page-attributes'),
        'capability_type' => 'page',
        'can_export' => 'true',
        'has_archive' => false,
        'rewrite' => array('slug' => 'project'),
        'menu_icon' => 'dashicons-insert',
        'show_in_rest' => true
      )
  );

  register_taxonomy(
		'related-products',
		array('project', 'post'),
		array
		(
			"hierarchical" => true,
			"label" => "Related Products ",
			"singular_label" => "Related product ",
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'rewrite' => array( 'slug' => 'related-products ', 'with_front' => false ),
			'public' => true,
			'show_ui' => true,
			'show_tagcloud' => true,
			'_builtin' => false,
			'show_in_nav_menus' => true
		)
	);
};

?>
