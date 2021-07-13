jQuery(document).ready(function(){
  jQuery('.search--menu--close--wrapper').click(function(){
    toggleSearchResults();
    jQuery(this).toggleClass('is--clicked');
  });
});


function toggleSearchResults()
{
  jQuery('.search--menu--results').toggleClass('is--open');
}
