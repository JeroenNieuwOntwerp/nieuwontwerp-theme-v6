<?php
defined( 'ABSPATH' ) || exit;

$_row_id = get_row_index();
$_options__archive_type = get_sub_field('archive-type');
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');
if($_options__archive_type == 'latest')
{
  echo '<section class="archive archive-type-latest-news-and-projects row-id-'. $_row_id .'" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">';
  $_latest__project__args = array(
    'post_type' => 'project',
    'posts_per_page' => '2',
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $_latest__project__query = new WP_Query($_latest__project__args);
  if( $_latest__project__query->have_posts() )
  {
    while( $_latest__project__query->have_posts() )
    {
      $_latest__project__query->the_post();
      $_button_options__ID = get_the_ID($post);
      $_button_options__style = 'transparent';
      $_button_options__text_colour = '#202020';
      $_button_options__url = get_the_permalink($post);
      $_button_options__label = get_field('website-translations--view-project', 'options');
      $_button_pseudo = 'false';
      echo '<article class="archive--item item--type--project">

      ';
      include(__DIR__ . '/../../templates/components/button/_button.php' );
      echo '</article>';
    }
    wp_reset_postdata();
  }
  $_recent__news__args = array(
    'post_type' => 'post',
    'posts_per_page' => '2',
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $_recent__news__query = new WP_Query($_recent__news__args);
  if( $_recent__news__query->have_posts() )
  {
    while( $_recent__news__query->have_posts() )
    {
      $_recent__news__query->the_post();
      $_button_options__ID = get_the_ID($post);
      $_button_options__style = 'transparent';
      $_button_options__text_colour = '#202020';
      $_button_options__url = get_the_permalink($post);
      $_button_options__label = get_field('website-translations--read-article', 'options');
      $_button_pseudo = 'false';
      echo '<article class="archive--item item--type--news">

      ';
      include(__DIR__ . '/../../templates/components/button/_button.php' );
      echo '</article>';
    }
    wp_reset_postdata();
  }
  echo '</section>';
} elseif($_options__archive_type == 'related-products')
{

}
?>
