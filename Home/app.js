jQuery(document).ready(function($){
/*****************NAV BAR**************************/
$(".box").bind("webkitAnimationEnd mozAnimationEnd animationEnd", function(){
  $(this).removeClass("animated")  
})

$(".box").hover(function(){
  $(this).addClass("animated");        
})
/*******************************************/



/*********************QOUTES BANNER**********************/
var texts = [
"Plants do not grow merely to satisfy ambitions or to fulfill good intentions. They thrive because someone expended effort on them.", 

"A weed is a plant that has mastered every survival skill except for learning how to grow in rows.", 

"Like people, plants respond to extra attention. ",

"A father doesnt plant a tree for himself BUT for his childrens future",

"I AM GROOT!"];
var count = 0;
function changeText() {
    $(".theqoutebanner").text(texts[count]);
    count < 7 ? count++ : count = 0;
}
setInterval(changeText, 5000);
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



/*******************PICTURE CHANGER BUTTON****ORIGINAL CODE********************
jQuery(document).ready(function($){

$('.concrete_texture').on({
	'click': function(){
		$('#change-image').attr('src','concrete_biodome.jpg').fadeIn();}
	});
		

$('.blackmarble_texture').on({
	'click': function(){
		$('#change-image').attr('src','blackmarble_biodome.jpg');}
	});
		

$('.marble_texture').on({
	'click': function(){
		$('#change-image').attr('src','whitemarnble_biodome.jpg');}
		});
});
/*******************************************/


/*********************NEW CODE FOR PICTURE CHANGERS***********************/
$('.concrete_texture').click(function(){
hideallimages(); 
$('.change_one').eq(1).fadeIn(); 
});

$('.marble_texture').click(function(){
hideallimages(); 
$('.change_one').eq(2).fadeIn(); 
});

$('.blackmarble_texture').click(function(){
hideallimages(); 
$('.change_one').eq(3).fadeIn(); 
});


function hideallimages(){
var countelements = $('.change_one').length
	for (var i = 0; i < countelements; i++) {
		$('.change_one').eq(i).fadeOut();
	}
}






$('.change_two_left').click(function(){
	hideallimages_two();
$('.change_two').eq(1).fadeIn();
});

$('.change_two_right').click(function(){
	hideallimages_two();
$('change_two').eq(2).fadeOut();
});

function hideallimages_two(){
var countelements_two = $('.change_two').length
	for (var i = 0; i < countelements_two; i++){

	}
}










/*******************SECTION FOUR SQUARES MORE OPTION BUTTONS************************/
/***FIRST ROW***/
$(document).ready(function(){
  $(".button_more_options_productONE").click(function(){
    $("#selector_box_productONE_mover").toggleClass("selector_box_productONE");
  });
});
$(document).ready(function(){
  $(".button_more_options_productONE").click(function(){
    $("#product_one").toggleClass("product_one_changer")
  });
});



$(document).ready(function(){
  $(".button_more_options_productTWO").click(function(){
    $("#selector_box_productTWO_mover").toggleClass("selector_box_productTWO");
  });
});
$(document).ready(function(){
  $(".button_more_options_productTWO").click(function(){
    $("#product_two").toggleClass("product_two_changer");
  });
});



$(document).ready(function(){
  $(".button_more_options_productTHREE").click(function(){
    $("#selector_box_productTHREE_mover").toggleClass("selector_box_productTHREE");
  });
});
$(document).ready(function(){
  $(".button_more_options_productTHREE").click(function(){
    $("#product_three").toggleClass("product_three_changer");
  });
});



$(document).ready(function(){
  $(".button_more_options_productFOUR").click(function(){
    $("#selector_box_productFOUR_mover").toggleClass("selector_box_productFOUR");
  });
});
$(document).ready(function(){
  $(".button_more_options_productFOUR").click(function(){
    $("#product_four").toggleClass("product_four_changer");
  });
});

/***SECOND ROW***/
$(document).ready(function(){
  $(".button_more_options_productFIVE").click(function(){
    $("#selector_box_productFIVE_mover").toggleClass("selector_box_productFIVE");
  });
});
$(document).ready(function(){
  $(".button_more_options_productFIVE").click(function(){
    $("#product_five").toggleClass("product_five_changer");
  });
});


$(document).ready(function(){
  $(".button_more_options_productSIX").click(function(){
    $("#selector_box_productSIX_mover").toggleClass("selector_box_productSIX");
  });
});
$(document).ready(function(){
  $(".button_more_options_productSIX").click(function(){
    $("#product_six").toggleClass("product_six_changer");
  });
});
/***FIRST ROW***/


/*******************************************/






/******************AUTO PICTURE CHANGER*************************
var myIndex = 0;
	carousel();

		function carousel() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";}
			myIndex++;
			if (myIndex > slides.length) {myIndex = 1}    
			slides[myIndex-1].style.display = "inline";  
			setTimeout(carousel, 3000); // Change image every 2 seconds
				}
/*******************************************/





/*************************************************************/
	particlesJS("particles-js", 
		{"particles":{"number":
		{"value":260,"density":{"enable":true,"value_area":500}},"color":
		{"value":"#667a24"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"}
		,"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":
		{"value":1,"random":true,"anim":{"enable":true,"speed":10,"opacity_min":0,"sync":false}},"size":
		{"value":3,"random":true,"anim":{"enable":false,"speed":10,"size_min":0.3,"sync":false}},"line_linked":{
			"enable":false,"distance":10,"color":"#667a24","opacity":0.4,"width":1},"move":{"enable":true,"speed":1,
			"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,
			"rotateX":100,"rotateY":100}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":
			"grab"},"onclick":{"enable":true,"mode":"grab"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":
			{"opacity":1}},"grab":{"distance":100,"size":10,"duration":1,"opacity":0,"speed":3},"grab":{"distance":100,"duration":0.4}
			,"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true})




	particlesJS("particles-js-two", 
		{"particles":{"number":
		{"value":260,"density":{"enable":true,"value_area":500}},"color":
		{"value":"#667a24"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"}
		,"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":
		{"value":1,"random":true,"anim":{"enable":true,"speed":10,"opacity_min":0,"sync":false}},"size":
		{"value":3,"random":true,"anim":{"enable":false,"speed":10,"size_min":0.3,"sync":false}},"line_linked":{
			"enable":false,"distance":10,"color":"#667a24","opacity":0.4,"width":1},"move":{"enable":true,"speed":1,
			"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,
			"rotateX":100,"rotateY":100}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":
			"grab"},"onclick":{"enable":true,"mode":"grab"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":
			{"opacity":1}},"grab":{"distance":100,"size":10,"duration":1,"opacity":0,"speed":3},"grab":{"distance":100,"duration":0.4}
			,"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true})


});




