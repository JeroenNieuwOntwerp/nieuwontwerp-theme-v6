<?php
defined( 'ABSPATH' ) || exit;

$_row_id = get_row_index();
$_options__archive_type = get_sub_field('archive-type');
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');

echo '<section class="archive archive-type-latest-news-and-projects row-id-'. $_row_id .'" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">';
//
if( $_options__archive_type == 'custom' )
{
  $post = get_sub_field('custom--project-post');
  setup_postdata($post);
  include(__DIR__ . '/../../templates/components/archive-item/recent-project/_recent-project.php' );
  wp_reset_postdata();
} else {
  $_project_args = array(
    'post_type' => 'project',
    'posts_per_page' => '1',
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $_project_query = new WP_Query($_project_args);
  if( $_project_query->have_posts() )
  {
    while( $_project_query->have_posts() )
    {
      $_project_query->the_post();
      include(__DIR__ . '/../../templates/components/archive-item/recent-project/_recent-project.php' );
    }
    wp_reset_postdata();
  }
}
//
if( $_options__archive_type == 'custom' )
{
  $post = get_sub_field('custom--news-post--one');
  setup_postdata($post);
  include(__DIR__ . '/../../templates/components/archive-item/recent-news/_recent-news.php' );
  wp_reset_postdata();
  $post = get_sub_field('custom--news-post--two');
  setup_postdata($post);
  include(__DIR__ . '/../../templates/components/archive-item/recent-news/_recent-news.php' );
  wp_reset_postdata();
} else {
  $_news_args = array(
    'post_type' => 'post',
    'posts_per_page' => '2',
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $_news_query = new WP_Query($_news_args);
  if( $_news_query->have_posts() )
  {
    while( $_news_query->have_posts() )
    {
      $_news_query->the_post();
      include(__DIR__ . '/../../templates/components/archive-item/recent-news/_recent-news.php' );
    }
    wp_reset_postdata();
  }
}
//
echo '</section>';




?>
