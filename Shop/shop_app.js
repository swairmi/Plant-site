/*****************NAV BAR**************************/
$(".box").bind("webkitAnimationEnd mozAnimationEnd animationEnd", function(){
  $(this).removeClass("animated")  
})

$(".box").hover(function(){
  $(this).addClass("animated");        
})
/*******************************************/

/*********************PRODUCT QUANTITY********************/
function countdown(){
	document.getElementById("countguy").value = --document.getElementById("countguy").value;}

function countup(){
	document.getElementById("countguy").value = ++document.getElementById("countguy").value;}



	function countdown_two(){
	document.getElementById("countguy_two").value = --document.getElementById("countguy_two").value;}

function countup_two(){
	document.getElementById("countguy_two").value = ++document.getElementById("countguy_two").value;}
/*******************************************/


$('.preview_images_one').click(function(){
hideallimages(); 
$('.big_picturechanger').eq(0).fadeIn(); 
});

  $('#prev_changer_one').click(function () {
    if ($(this).hasClass('preview_images_one')) {
     $(this).removeClass('preview_images_one').fadeOut();
     $(this).addClass('the_pre_changer_one').fadeIn();
    } else {
    }
  })

/**/

$('.preview_images_two').click(function(){
hideallimages();
$('.big_picturechanger').eq(1).fadeIn();
});

$('#prev_changer_two').click(function(){
  if ($(this).hasClass('preview_images_two')){
    $(this).removeClass('preview_images_two').fadeOut();
    $(this).addClass('the_pre_changer_two').fadeIn(); 
  } else {
  }
});

/**/

$('.preview_images_three').click(function(){
hideallimages();
$('.big_picturechanger').eq(2).fadeIn();
});

$('#prev_changes_three').click(function(){
  if ($(this).hasClass('preview_images_three')){
    $(this).removeClass('preview_images_three').fadeOut();
    $(this).addClass('the_pre_changer_three').fadeIn(); 
  } else {
  }
});
/**/

$('.preview_images_four').click(function(){
hideallimages();
$('.big_picturechanger').eq(3).fadeIn();
});

$('#prev_changes_four').click(function(){
  if ($(this).hasClass('preview_images_four')){
    $(this).removeClass('preview_images_four').fadeOut();
    $(this).addClass('the_pre_changer_four').fadeIn();
  } else {
  }
});
/**/

$('.preview_images_five').click(function(){
hideallimages();
$('.big_picturechanger').eq(4).fadeIn();
});

$('#prev_changes_five').click(function(){
  if ($(this).hasClass('preview_images_five')){
    $(this).removeClass('preview_images_five').fadeOut();
    $(this).addClass('the_pre_changer_five').fadeIn();
  } else{
  }
});

/**/

$('.preview_images_six').click(function(){
hideallimages();
$('.big_picturechanger').eq(5).fadeIn();
});

$('#prev_changes_six').click(function(){
  if ($(this).hasClass('preview_images_six')){
    $(this).removeClass('preview_images_six').fadeOut();
    $(this).addClass('the_pre_changer_six').fadeIn();
  } else {
  }
});

function hideallimages(){
var countelements = $('.big_picturechanger').length
  for (var i = 0; i < countelements; i++) {
    $('.big_picturechanger').eq(i).fadeOut();
  }
}







/*******************SECTION FOUR SQUARES MORE OPTION BUTTONS************************/





/*******************************************/