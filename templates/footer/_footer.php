<?php
  defined( 'ABSPATH' ) || exit;
echo '<footer>
 <section class="footer__section--gray">';
 if( have_rows('footer--menus', 'options') )
 {
   while( have_rows('footer--menus', 'options') )
   {
     the_row();
     echo '<div class="footer__menus--left">
      <h3>'. get_sub_field('footer--menu--title') .'</h3>';
     if ( have_rows('footer--menu--links') )
     {
       echo '<ul>';
       while ( have_rows('footer--menu--links') )
       {
         the_row();
         echo '<li><a href="'. get_sub_field('footer--menu--url') .'" rel="noopener nofollow noreferrer">'. get_sub_field('footer--menu--link') .'</a></li>';
       }
       echo '</ul>';
     }
     echo '</div>';
   }
 }
  echo '</section>
 <section class="footer__section--red">
  <div class="footer__contactinformation">' . get_field('footer--contactinfo', 'options') . '</div>';
  if( have_rows('footer--contactlinks', 'options') )
  {
    while( have_rows('footer--contactlinks', 'options') )
    {
      the_row();
      $_button_options__ID = get_row_index();
      $_button_options__style = 'transparent';
      $_button_options__text_colour = '#FFFFFF';
      $_button_options__label = get_sub_field('footer--contactlink--label');
      if( get_sub_field('footer--contactlink--type' == 'mailto') )
      {
        $_button_options__url = 'mailto:' . get_sub_field('footer--contactlink--url');
      }elseif( get_sub_field('footer--contactlink--type' == 'tel') )
      {
        $_button_options__url = 'tel:' . get_sub_field('footer--contactlink--url');
      } else {
        $_button_options__url = get_sub_field('footer--contactlink--url');
      }
      include(__DIR__ . '/../components/button/_button.php' );
    }
  }
 '
 </section>
 <section class="footer__section--transparent">
 </section>
</footer>' . wp_footer() . '
<script>
AOS.init();
</script>
</body>
</html>';
