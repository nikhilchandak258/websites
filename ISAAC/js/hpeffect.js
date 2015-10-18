$(document).ready(function(){

	$("#right-wrapper").addClass('rightWrapperHide');
	$("#event1").click(function(){
	$("#logo-container>img").removeClass("goDown").addClass("goUp");
	$("#event1>span").removeClass("goLeft").addClass("goRight");
	$("#event2").removeClass("show").addClass("hide");
	$("#event4").removeClass("show").addClass("hide");
	$("#event3").removeClass("show").addClass("hide");
$("#right-wrapper").removeClass("right-wrapper-hide").addClass("right-wrapper-display");
	$("#navigation").animate({left:'0px'});
	
	});
	$("#event2").click(function(){
	$("#logo-container>img").removeClass("goDown").addClass("goUp");
	$("#event2>span").removeClass("goRight1").addClass("goLeft1");
	$("#event1").removeClass("show").addClass("hide");
	$("#event4").removeClass("show").addClass("hide");
	$("#event3").removeClass("show").addClass("hide");
$("#right-wrapper").removeClass("right-wrapper-hide").addClass("right-wrapper-display");
	$("#navigation").animate({left:'0px'});
	
	});
	
	$("#event3").click(function(){
	$("#logo-container>img").removeClass("goDown").addClass("goUp");
	$("#event3>span").removeClass("goLeft").css("top","-145px").addClass("goRight");
	$("#event1").removeClass("show").addClass("hide");
	$("#event4").removeClass("show").addClass("hide");
	$("#event2").removeClass("show").addClass("hide");
	$("#navigation").animate({left:'0px'});
	$("#right-wrapper").removeClass("right-wrapper-hide").addClass("right-wrapper-display");
	});	
	$("#event4").click(function(){
	$("#logo-container>img").removeClass("goDown").addClass("goUp");
	$("#event4>span").removeClass("goRight1").css("top","-145px").addClass("goLeft1");
	$("#event3").removeClass("show").addClass("hide");
	$("#event1").removeClass("show").addClass("hide");
	$("#event2").removeClass("show").addClass("hide");	$("#navigation").animate({left:'0px'});
	$("#right-wrapper").removeClass("right-wrapper-hide").addClass("right-wrapper-display");
	});

	$("#nameholder").click(function(){
	$("#right-wrapper").removeClass("right-wrapper-display").addClass("right-wrapper-hide");
	var $blah=$(this).html();
	if($blah=="<h1>workshops</h1>")
	{
	$("#logo-container>img").addClass("goDown");
	$("#event1>span").removeClass("goRight").addClass("goLeft");
	$("#event2").removeClass("hide").addClass("show");
	$("#event3").removeClass("hide").addClass("show");
	$("#event4").removeClass("hide").addClass("show");

	$("#navigation").animate({left:'-350px'});
	}
		if($blah=="<h1>non-robotic-contests</h1>")
	{
	$("#logo-container>img").addClass("goDown");
	$("#event2>span").removeClass("goLeft1").addClass("goRight1");
	$("#event1").removeClass("hide").addClass("show");
	$("#event3").removeClass("hide").addClass("show");
	$("#event4").removeClass("hide").addClass("show");
	$("#navigation").animate({left:'-350px'});
	}
		if($blah=="<h1>robotic-contests</h1>")
	{
	$("#logo-container>img").addClass("goDown");
	$("#event3>span").removeClass("goRight").css("top","100px").addClass("goLeft");
	$("#event1").removeClass("hide").addClass("show");
	$("#event4").removeClass("hide").addClass("show");
	$("#event2").removeClass("hide").addClass("show");
	$("#navigation").animate({left:'-350px'});

	$("#navigation").animate({left:'-350px'});
	}
		if($blah=="<h1>exibitions</h1>")
	{
	$("#logo-container>img").addClass("goDown");
	$("#event4>span").removeClass("goLeft1").css("top","100px").addClass("goRight1");
	$("#event1").removeClass("hide").addClass("show");
	$("#event3").removeClass("hide").addClass("show");
	$("#event2").removeClass("hide").addClass("show");
	$("#navigation").animate({left:'-350px'});

	}
	});
	
});s