$(document).ready(function(){
  $(document).on('click', '.search--menu--close--wrapper', function()
  {
    jQuery('.search--menu--results').toggleClass('is--open');
  });
});
