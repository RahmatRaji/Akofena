$('#recipeCarousel').carousel({
  interval: 1000
});

$('#carouselExampleIndicators').carousel({
  interval: 4000
});


$('#recipeCarousel')('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  if (next.next().length>0) {

    next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
    
  }
  else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

