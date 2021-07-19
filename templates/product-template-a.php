<?php
/*
Template Name: Product Family Index
Template Post Type: products
*/

get_header();

include_once(__DIR__ . '/nav/_nav.php');
include_once(__DIR__ . '/headers/header-sub/_header-sub.php');

$_product_family = $post->post_name;

echo '<main>';
echo '<section class="product-family-index product-family-'. $_product_family .'">';
$_initial_args = array(
		 'orderby' => 'name',
		 'order'	=> 'ASC',
		 'post_type' => 'products'
	 );
$_initial_args['tax_query'][] = array('taxonomy' => get_the_title(), 'terms' =>  $_product_family, 'field' => 'name');  
print_r($_initial_args);
$_initial_query = new WP_Query( $_initial_args );
if( $_initial_query->have_posts() )
{
  echo '<div class="result-flex">';
  while( $_initial_query->have_posts() )
  {
    $_initial_query->the_post();
    echo '<h2>'. get_the_title() .'</h2>';
  }
  wp_reset_postdata();
  echo '</div>';
};
echo '</section>';
while( have_rows('content') ): the_row();
  $variable = get_row_layout();
  $_block = __DIR__ .'/../blocks/'.$variable.'/_'.$variable.'.php';
  include($_block);
endwhile;
echo '</main>';
include_once(__DIR__ . '/footer/_footer.php');
?>
