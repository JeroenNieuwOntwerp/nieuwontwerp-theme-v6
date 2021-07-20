$(document).ready(function(){
  $(document).on('click', '.search--menu--close--wrapper', function()
  {
    $('.search--menu--results').toggleClass('is--open');
  });
  $(document).on('hover', '.mega-menu-item-has-children.mega-has-dropdown', function()
  {
    $('nav.nav--bars--lower').toggleClass('dropdown-is-active');
  });
});
