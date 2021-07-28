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

  register_taxonomy(
		'product-family',
		'products',
		array
		(
			"hierarchical" => true,
			"label" => "Product Family",
			"singular_label" => "Product Family ",
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'rewrite' => array( 'slug' => 'product-family', 'with_front' => false ),
			'public' => true,
			'show_ui' => true,
			'show_tagcloud' => true,
			'_builtin' => false,
			'show_in_nav_menus' => true
		)
	);

};

?>
