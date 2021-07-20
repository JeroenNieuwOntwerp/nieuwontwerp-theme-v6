$(document).ready(function(){
  $(document).on('click', '.search--menu--close--wrapper', function()
  {
    jQuery('.search--menu--results').toggleClass('is--open');
  });
  $('.mega-has-dropdown .mega-menu-link').hover(function()
  {
    $('.nav--bars--lower').toggleClass('dropdown-is-active');
  });
});
