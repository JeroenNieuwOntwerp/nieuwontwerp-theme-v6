<?php

add_action('wp_footer', 'no_ajax_search_fetch' );
add_action('wp_ajax_no_ajax_search_results_fetch' , 'no_ajax_search_results_fetch');
add_action('wp_ajax_nopriv_no_ajax_search_results_fetch','no_ajax_search_results_fetch');

function no_ajax_search_fetch()
{ ?>
  <script type="text/javascript">
  function no_search_fetch(){
      jQuery.ajax({
          url: '<?php echo admin_url('admin-ajax.php'); ?>',
          type: 'post',
          data: { action: 'no_ajax_search_results_fetch', keyword: jQuery('#keyword').val() },
          success: function(data) {
              jQuery('.search--menu--results').html( data );
          }
      });
  }
  </script>
<?php }

function no_ajax_search_results_fetch()
{
  if($_POST['keyword'] != ''){
      $_search_query = new WP_Query(
        array(
          'posts_per_page' => -1,
          's' => esc_attr( $_POST['keyword'] ),
          'orderby' => 'name',
  				'order'	=> 'ASC'
        )
      );
      if( $_search_query->have_posts() )
      {
        echo '<div class="search--menu--screen"><ul>';
        while( $_search_query->have_posts() ): $_search_query->the_post();
          echo '<li><a href="' . esc_url( post_permalink() ) . '">' . get_the_title() . '</a></li>';
        endwhile;
        echo '</ul></div>';
        wp_reset_postdata();
  	} else {
      echo '<div class="search--menu--screen"><ul><li>No results</li></ul></div>';
  	}
  } else {

  }
  die();
}
?>
