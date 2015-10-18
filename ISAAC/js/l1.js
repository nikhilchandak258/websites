$(document).ready(function(){
var $up=$(".up");
var $down=$(".down");

$(".close").click(function(){
myfunc();

});

function myfunc(){
$up.animate({top:"0"},500,"easeOutQuart");
$down.animate({top:"0"},500,"easeOutQuart");
cnt();
$up.animate({top:"-100%"},500,"easeOutQuart");
$down.animate({top:"100%"},500,"easeOutQuart");
}

function cnt(){
$("#data-section").animate({
				opacity:"1"
				},500,"linear");
}

});