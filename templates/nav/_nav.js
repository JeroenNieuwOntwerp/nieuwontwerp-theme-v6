$(document).ready(function(){
  $('.primary--menu--button').click(function(){
    $('.primary--menu').toggleClass('toggled');
  });
});

$(document).ready(function(){
  $('.search--menu--close--wrapper').click(function(){
    console.log('testing the close button');
    $('.search--menu--results').toggleClass('is--open');
  });
});
