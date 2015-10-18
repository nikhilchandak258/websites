$(document).ready(function(){
var $navigation=$("#navigation");
var $panel=$(".panel");
var $curMenuNameDisp=$("#nameholder");
var $links=$(".links");
var $temp;
var $tempholder=$("#d1");;
var $lastselected;
var $selectedmenu;
var $prevmenu;
var $rightwrapper=$("#right-wrapper");
var $data=$(".data-holder-inner");
var $current;
var $eventClickChecker;
var $flag2;
var $tempDataRef;
var $tempDataStringHolder;
var $linkWatch=$(".panel>ul>li");

$rightwrapper.addClass('rightWrapperHide');		//to hide right-wrapper which otherwise will get displayed

/*---Start of "Event-Menu-Display": Code for deciding which link is clicked out of 4 events on home page
and to display necessary panel---*/
$links.click(function(){
$current=$(this);
$(".panel>ul>li").removeClass("selected");
var $flag=false;
//alert($navigation.css( "left" ));
var $navigationLeftValue=$navigation.css( "left" );						//Retrieves left value of navigation div
var $navigationStateChecker=($navigationLeftValue=="-340px")?true:false;	//assigns true or false depending upon value
//alert($navigationStateChecker);											//works
//alert($current.data("link-name"));
$eventClickChecker=$current.parent().attr("id");
//alert($eventClickChecker);				//works
if($navigationStateChecker==true)					//IF navigation is already to left side then animate it and also resp event
{
//alert("first");
if($eventClickChecker=="event1" || $current.attr("id")=="qone")
bringEvent1InMiddle();
else if($eventClickChecker=="event2"  || $current.attr("id")=="qtwo")
bringEvent2InMiddle();
else if($eventClickChecker=="event3"  || $current.attr("id")=="qthree")
bringEvent3InMiddle();
else if($eventClickChecker=="event4"  || $current.attr("id")=="qfour")
bringEvent4InMiddle();
}
else{
if($current.attr("id")=="qone")
{//alert("qone");
changeDataToEvent1();
}
else if($current.attr("id")=="qtwo")
changeDataToEvent2();
else if($current.attr("id")=="qthree")
changeDataToEvent3();
else if($current.attr("id")=="qfour")
changeDataToEvent4();
}
									//to check data it o/ps.works
$panel.each(function(){													//Code to check and store the ref of event which was clicked out of 4 on home page
if ( $(this).data("menu-name") == $current.data("link-name") )
		{
		//alert($(this).data("menu-name")+"inside");					//works
		$temp=$(this);
		$flag=true;
		return false;
		}
});	
$data.each(function(){													//Code to check and store the ref of event which was clicked out of 4 on home page
if ( $(this).data("content-holder") == $current.data("sub-menu-name") || $(this).data("content-holder") == $current.data("link-name"))
		{
		//alert("inside");					//works
		$tempDataRef=$(this);
		//alert($(this).text());
		$flag2=true;
		return false;
		}
});
if($flag2 == true){
$tempDataStringHolder=$tempDataRef.html();

$("#data-place").animate({

				opacity:"0"

				},500,"linear",function(){$(this).html($tempDataStringHolder);}).animate({

				opacity:"1"

				},500,"linear");
				

$current.not('#e1,#e2,#e3,#e4,#qone,#qtwo,#qthree,#qfour,#s1,#s2,#s3,#s4').addClass("selected").siblings().removeClass("selected");
}

if($flag == true){											//Means we have a match for event name
var pageWidth=$(window).width();
if(pageWidth==1024 && (($temp.data('menu-name')=='non-robotic-contest')||($temp.data('menu-name')=='conference')))
{
$curMenuNameDisp.fadeTo(300,0.5).html("<h1>"+$(this).data("link-name")+"</h1><img src='images/back1.png' />").addClass('font-adder').fadeTo(300,1);
}
else{
$curMenuNameDisp.fadeTo(300,0.5).html("<h1>"+$(this).data("link-name")+"</h1><img src='images/back1.png' />").fadeTo(300,1);
}
$navigation.animate({left:"0%"},300,"easeOutCirc");
$temp.animate({left:"0%"},300,"easeOutCirc");
$temp.siblings().animate({left:"-100%"},300,"easeOutCirc");

//$("#navigation").addClass('slideIn');
//$temp.removeClass('slideOut').addClass('slideIn').siblings().removeClass('slideIn').addClass('slideOut');
}
else{
//alert("hfhd");
$prevmenu=$selectedmenu;
$prevmenu.removeClass("selected");
$selectedmenu=$(this);
$(this).addClass("selected");
 
}															//end of code to find the ref of clicked event out of 4
});


/*---End of "Event-Menu-Display"---*/

/*--To add hover effect---*/
$("li").hover(function(){
    $(this).addClass("selected-hover");
    },function(){
    $(this).removeClass("selected-hover");
  });
/*--End of hover effect---*/

/*---Start of Code for sliding Navigation Panelto left by 100% and bringing home page layout in foucus---*/
$curMenuNameDisp.click(function(){
//$(this).fadeTo(300,0.5).html("<h1>Home</h1>").fadeTo(300,1);
//$("#data-place").text($('#d4').text());
var $blah=$(this).text();
$curMenuNameDisp.removeClass('font-adder')
$("ul>li").removeClass("selected");
if($blah=="robotic-contest" || $blah=="non-robotic-contest" )
{
$temp.animate({left:"-100%"},300,"easeOutCirc").siblings().animate({left:"-100%"},300,"easeOutCirc");
$("#navigation-container-contest").animate({left:"0%"},300,"easeOutCirc");
$(this).fadeTo(300,0.5).html("<h1>contest</h1>").fadeTo(300,1);
}
else{
if($blah=="workshop")
animateEvent1Back();
else if($blah=="contest")
animateEvent2Back();
else if($blah=="conference")
animateEvent3Back();
else if($blah=="exhibition")
animateEvent4Back();
animateDataHeaderToSmall();

$("#right-wrapper").removeClass("right-wrapper-display").addClass("right-wrapper-hide");

$navigation.animate({left:"-340px"},300,"easeOutCirc");
}
//$selectedmenu.removeClass("selected");
//$lastselected.children().fadeTo(100,0);
});
/*---End of Code for Sliding Navigation to left---*/

/*---Start of Code of functions which animate Events and bring them in center and also display Data Box---*/
function bringEvent1InMiddle(){
$("#logo-container>img").removeClass("goDown").addClass("goUp");
	$("#event1>span").removeClass("goLeft").addClass("goRight");
	$("#event2").removeClass("show").addClass("hide");
	$("#event4").removeClass("show").addClass("hide");
	$("#event3").removeClass("show").addClass("hide");
$("#right-wrapper").removeClass("right-wrapper-hide").addClass("right-wrapper-display");
animateDataHeaderToFull();
}

function bringEvent2InMiddle(){
$("#logo-container>img").removeClass("goDown").addClass("goUp");
	$("#event2>span").removeClass("goRight1").addClass("goLeft1");
	$("#event1").removeClass("show").addClass("hide");
	$("#event4").removeClass("show").addClass("hide");
	$("#event3").removeClass("show").addClass("hide");
$("#right-wrapper").removeClass("right-wrapper-hide").addClass("right-wrapper-display");
animateDataHeaderToFull();
}

function bringEvent3InMiddle(){
$("#logo-container>img").removeClass("goDown").addClass("goUp");
	$("#event3>span").removeClass("goLeft").css("top","-145px").addClass("goRight");
	$("#event1").removeClass("show").addClass("hide");
	$("#event4").removeClass("show").addClass("hide");
	$("#event2").removeClass("show").addClass("hide");
	$("#right-wrapper").removeClass("right-wrapper-hide").addClass("right-wrapper-display");
	animateDataHeaderToFull();
}

function bringEvent4InMiddle(){
$("#logo-container>img").removeClass("goDown").addClass("goUp");
	$("#event4>span").removeClass("goRight1").css("top","-145px").addClass("goLeft1");
	$("#event3").removeClass("show").addClass("hide");
	$("#event1").removeClass("show").addClass("hide");
	$("#event2").removeClass("show").addClass("hide");	$("#navigation").animate({left:'0px'});
	$("#right-wrapper").removeClass("right-wrapper-hide").addClass("right-wrapper-display");
	animateDataHeaderToFull();
}
/*---End of functions for Events---*/

/*---Start of Code of functions which reverse the effect of above functions---*/
function animateEvent1Back(){
	$("#logo-container>img").addClass("goDown");
	$("#event1>span").removeClass("goRight").addClass("goLeft");
	$("#event2").removeClass("hide").addClass("show");
	$("#event3").removeClass("hide").addClass("show");
	$("#event4").removeClass("hide").addClass("show");
}

function animateEvent2Back(){
	$("#logo-container>img").addClass("goDown");
	$("#event2>span").removeClass("goLeft1").addClass("goRight1");
	$("#event1").removeClass("hide").addClass("show");
	$("#event3").removeClass("hide").addClass("show");
	$("#event4").removeClass("hide").addClass("show");
}

function animateEvent3Back(){
	$("#logo-container>img").addClass("goDown");
	$("#event3>span").removeClass("goRight").css("top","100px").addClass("goLeft");
	$("#event1").removeClass("hide").addClass("show");
	$("#event4").removeClass("hide").addClass("show");
	$("#event2").removeClass("hide").addClass("show");
}

function animateEvent4Back(){
	$("#logo-container>img").addClass("goDown");
	$("#event4>span").removeClass("goLeft1").css("top","100px").addClass("goRight1");
	$("#event1").removeClass("hide").addClass("show");
	$("#event3").removeClass("hide").addClass("show");
	$("#event2").removeClass("hide").addClass("show");
}
/*---End of reverse effect code---*/

/*---Code for functions which will handle animations if navigation is visible and footer links are clicked---*/
function changeDataToEvent1()
{
	$("#event1>span").removeClass("goLeft").addClass("goRight");
	$("#event1").removeClass("hide").addClass("show");
	$("#event2").removeClass("show").addClass("hide");
	$("#event3").removeClass("show").addClass("hide");
	$("#event4").removeClass("show").addClass("hide");
	$("#event2>span").removeClass("goLeft1").addClass("goRight1");
	$("#event3>span").removeClass("goRight").css("top","100px").addClass("goLeft");
	$("#event4>span").removeClass("goLeft1").css("top","100px").addClass("goRight1");
	animateDataHeaderToSmall();
	animateDataHeaderToFull();
}

function changeDataToEvent2()
{
	$("#event2>span").removeClass("goRight1").addClass("goLeft1");
	$("#event2").removeClass("hide").addClass("show");
	$("#event1").removeClass("show").addClass("hide");
	$("#event3").removeClass("show").addClass("hide");
	$("#event4").removeClass("show").addClass("hide");
	$("#event1>span").removeClass("goRight").addClass("goLeft");
	$("#event3>span").removeClass("goRight").css("top","100px").addClass("goLeft");
	$("#event4>span").removeClass("goLeft1").css("top","100px").addClass("goRight1");
	animateDataHeaderToSmall();
	animateDataHeaderToFull();
}

function changeDataToEvent3()
{
	$("#event3>span").removeClass("goLeft").css("top","-145px").addClass("goRight");
	$("#event3").removeClass("hide").addClass("show");
	$("#event1").removeClass("show").addClass("hide");
	$("#event2").removeClass("show").addClass("hide");
	$("#event4").removeClass("show").addClass("hide");
	$("#event1>span").removeClass("goRight").addClass("goLeft");
	$("#event2>span").removeClass("goLeft1").addClass("goRight1");
	$("#event4>span").removeClass("goLeft1").css("top","100px").addClass("goRight1");
	animateDataHeaderToSmall();
	animateDataHeaderToFull();
}

function changeDataToEvent4(){
	$("#event4>span").removeClass("goRight1").css("top","-145px").addClass("goLeft1");
	$("#event4").removeClass("hide").addClass("show");
	$("#event1").removeClass("show").addClass("hide");
	$("#event2").removeClass("show").addClass("hide");
	$("#event3").removeClass("show").addClass("hide");
	$("#event1>span").removeClass("goRight").addClass("goLeft");
	$("#event2>span").removeClass("goLeft1").addClass("goRight1");
	$("#event3>span").removeClass("goRight").css("top","100px").addClass("goLeft");
	animateDataHeaderToSmall();
	animateDataHeaderToFull();
}
/*---End of footer link handling code---*/

/*---Code for Animate data holder---*/
function animateDataHeaderToFull(){
$("#data-holder-ws").animate({
width:"92%",
height:"408px",
marginTop:"115px",
marginLeft: "0px"
},500);
}

function animateDataHeaderToSmall(){
$("#data-holder-ws").animate({
width: "50px",
height: "50px",
marginTop: "250px",
marginLeft: "400px"

},500);
}

/*---End of Animate Data Holder---*/


/*---Data Loader function---*/
function loadData(){
$data.each(function(){													//Code to check and store the ref of event which was clicked out of 4 on home page
if ( $(this).data("content-holder") == $current.data("sub-menu-name") )
		{
		alert($(this).data("content-holder")+"inside");					//works
		/*$temp=$(this);
		$flag=true;
		return false;*/
		}
});	
}

/*End of data loader function---*/
});