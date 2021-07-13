jQuery(document).ready(function(){
  jQuery('.search--menu--close--wrapper').click(function(){
    jQuery('.search--menu--results').toggleClass('is--open');
    jQuery(this).toggleClass('is--clicked');
  });
});
