$(document).ready(function(){
  $(document).on('click', '.search--menu--close--wrapper', function()
  {
    $('.search--menu--results').toggleClass('is--open');
  });

  $(document).on('hover', '.mega-has-dropdown', function()
  {
    $('.nav--bars--lower').toggleClass('dropdown-is-active');
  });

  $('.mega-has-dropdown').hover(function()
  {
    $('.nav--bars--lower').toggleClass('dropdown-is-active');
  });
});
