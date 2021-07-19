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
 </section>
 <section class="footer__section--transparent">
 </section>
</footer>' . wp_footer() . '
<script>
AOS.init();
</script>
</body>
</html>';
