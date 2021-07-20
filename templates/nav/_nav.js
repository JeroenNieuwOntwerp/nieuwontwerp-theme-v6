$(document).ready(function(){
  $(document).on('click', '.search--menu--close--wrapper', function()
  {
    jQuery('.search--menu--results').toggleClass('is--open');
  });
  $(document).on('hover', '.mega-menu-item-has-children.mega-has-dropdown', function()
  {
    jQuery('.nav--bars--lower').toggleClass('dropdown-is-active');
  });

  $('.mega-menu-item-has-children.mega-has-dropdown').hover(function()
  {
    $('nav').toggleClass('dropdown-is-active');
  });
});
