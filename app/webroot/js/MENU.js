( function( $ ) {
$( document ).ready(function() {
// $('#myDropdown ul ul li:odd').addClass('odd');
// $('#myDropdown ul ul li:even').addClass('even');
// $('#myDropdown > ul > li > p').hover(function() {
//   $('#myDropdown li').removeClass('active');
//   $(this).closest('li').addClass('active');	
//   var checkElement = $(this).next();
//   if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
//     $(this).closest('li').removeClass('active');
//     checkElement.slideUp('normal');
//   }
//   if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
//     $('#myDropdown ul ul:visible').slideUp('normal');
//     checkElement.slideDown('normal');
//   }
//   if($(this).closest('li').find('ul').children().length == 0) {
//     return true;
//   } else {
//     return false;	
//   }		
// });
$('.box-category ul li:not(.active)').hover(function(){
    $(this).find('ul').stop(true, true).slideDown();
  });
  
  $('.box-category').mouseleave(function(){
    $(this).find('ul li:not(.active)').find('ul').stop(true, true).slideUp();
  });
});
} )( jQuery );
