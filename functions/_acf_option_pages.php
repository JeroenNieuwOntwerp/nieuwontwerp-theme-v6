<?php

add_action('acf/init', 'no_acf_option_pages');

function no_acf_option_pages() {
      $option_page = acf_add_options_page(array(
          'page_title'    => __('Website Translations'),
          'menu_title'    => __('Translations'),
          'menu_slug'     => 'website-translations',
          'capability'    => 'edit_posts',
          'redirect'      => false
      ));
};

?>
