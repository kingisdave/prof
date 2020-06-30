/*!
 * Flipbook Library - http://joerezendes.com/flipbook-library
 * Version - 1.0
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Github - https://github.com/joerez/flipbook-library
 *
 * Copyright (c) 2018 Joe Rezendes
 */


//get the number of pages

// var num = document.getElementByClassName('pagecontent') ;
var klass = $(".pagecontent") ;
var num = klass.length ;
lastClass = ".page"+num ;
// var lastPage = 
$(lastClass).addClass("bookBack") ;
// alert(num.length) ;





//This function creates a new page when you call it.
function newPage(element) {

  $(this).css("z-index", "19");

  $(element).on("click", function() {
    //this is what turns the page. -180deg flips it over.
    $(this).css('transform', 'rotateY(-180deg)');

  })
}

//This is what triggers when you click/hover on the book in it's default state.
$('.cover').on("click", function() {

  //you can change these rotations to set the default state of the book when you flip through pages.
  $('.book').css("transform", "rotateY(-30deg) rotateX(-0deg) scale(1)");
  $('.book').removeClass('hoveit');
   $('.cover').css('transform', 'rotateY(-180deg)');
   //this changes the color of the text to the same color of the page so it isn't visible.
   $('.cover').css("color", "white");
   $('.author').css("color", "white");
   $(this).css('z-index', '20');
})


//set up each new page here. Do not use the last page.
/*newPage('.firstPage');

newPage('.secondPage');

newPage('.thirdPage');

newPage('.fourthPage');*/

for (var i = 1; i <= num; i++) {
  kilass = ".page"+i ;
  newPage(kilass) ;
}



//the last page of your book should have the bookBack class. This is what happens when you click it.
$('.bookBack').on("click", function() {

  //rotate back every page in descending order here.
  $('.pagecontent').css('transform', 'rotateY(0deg)');
  /*$('.fourthPage').css('transform', 'rotateY(0deg)');
  $('.thirdPage').css('transform', 'rotateY(0deg)');
  $('.secondPage').css('transform', 'rotateY(0deg)');
  $('.firstPage').css('transform', 'rotateY(0deg)');*/
  $('.cover').css('transform', 'rotateY(0deg)');

  //show text again
  $('.cover').css("color", "white");
  $('.author').css("color", "white");

  $('.book').addClass("hoveit");

  //the new default state of the book.
  $('.book').css("transform", "rotateY(33deg) rotateX(-30deg)")
})
