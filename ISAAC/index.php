<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
<head>
  <base href="http://nproject.5gbfree.com/ISAAC/" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="IEEE-TSEC,ieee, isaac, isaac2013, technical festival, tsec, bandra, contest, workshop, conference, exhibition">
<meta name="description" content="Being the annual inter-collegiate technical festival of IEEE-TSEC, ISAAC continues bringing out the 
best in students through seminars, workshops and contests for over 14 years. ISAAC proudly holds the title of 
being the largest technical festival under Mumbai University. It is an arena, a platform for young intellectual 
minds to learn and imbibe technical knowledge, battle in contests honing their creative and technical skills, 
and win laurels commending their perseverance.">
<meta name="google-site-verification" content="khnSxE_41eLML5bghZyDSFrWixUYHVD6SfKAYbbc2pw" />
<title>ISAAC</title>
<link rel="stylesheet" href="css/layout22.css" />
<link rel="stylesheet" href="css/hp.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" href="css/vendor.css" />
<link rel="stylesheet" href="css/style.css" />
<!--link rel="stylesheet" href="css/jpreloader.css" /-->
<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.youtubepopup.min.js"></script>
<script src="js/newMenuControl.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.js"></script>
<script src="js/carousel.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/vendor.js"></script>
<!--script src="js/jpreloader.js"></script-->
<script type="text/javascript">
function rules()
{
window.open("http://nproject.5gbfree.com/ISAAC/rulesandtrack.php");
}

function background()
{ 
$(document).ready(function(){
$("#md").css("visibility","visible").css("opacity","1");
});
}
function backgroundyou()
{ 
$(document).ready(function(){
$("#md").css("visibility","visible").css("opacity","1");
$("#you").css("display","block");
});
}
function backgroundclearyou()
{ 
$(document).ready(function(){
$("#md").css("visibility","hidden").css("opacity","0");
$("#you").css("display","none");
});
}

function backgroundclear()
{ 
$(document).ready(function(){
$("#md").css("visibility","hidden").css("opacity","0");
});
}
</script>
<link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
<style type="text/css">
.bgdiv{
background:black;
height:152px;
width:1024px;
position:relative;
opacity:1;
overflow:hidden;

}
</style>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=121420428027010";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="container">
<a href="http://www.ieee.org/index.html" target="_blank"><img id="ieee" src="images/IEEE.png"></a>
<a href="http://www.tsec.edu/" target="_blank"><img id="tsec" src="images/tsec.png"></a>
		<div class="sp-container">
				<div class="sp-content">
					<!--div class="sp-logo"></div-->
					<!--h2 class="frame-1" style=""><img src="images/cirstarn.PNG"></h2-->
			
					<!--h2 class="frame-2"><img src="images/cirstarn.PNG"></h2>
					<h2 class="frame-3" style=""><img src="images/cirstarn.PNG"></h2-->
				     <!--h3 class="frame-1" style=""><img src="images/starsmall.PNG" /></h3-->
					 <h3 class="frame-1" style=""><div id="box"><img src="images/spiraln.PNG" /></div></h3>
				
					<!--h2 class="frame-4">Exhibition</h2>
					<h2 class="frame-5"><span>ISAAC 2013</span> </h2>
					<a class="sp-circle-link" href="">Enter Website</a-->
				</div>
	</div>

	<div id="side-menu">
	<ul>
    <li class="links" id="s1" style="border-radius: 30px 0px 0 0;"><img src="images/side/facebookn.PNG" /><div id="social"><div class="fb-like" style="float: right;" data-href="https://www.facebook.com/ieeetsecisaac?ref=hl" data-width="250" data-layout="box_count" data-show-faces="false" data-send="false"></div></div></li>
	<li class="links" id="s2" ><img src="images/side/youtuben.PNG" /><div id="youtube"><p><button class="md-trigger" data-modal="modal-2" onClick="backgroundyou()">Channel</button></P></div></li>
	<!--li class="links"><img src="images/side/sponsorsn.PNG" /><div id="spon"><p><button class="md-trigger" data-modal="modal-1" onClick="background()">Sponsors</button></p></div></li-->
	<li class="links" id="s3" ><img src="images/side/feedback.PNG" /><div id="feedback"><p><button class="md-trigger" data-modal="modal-4" onClick="background()">Feedback</button></p></div></li>
	<li class="links" id="s4"  style="border-radius: 0px 0px 0 30px;"><img src="images/side/contactusn.PNG" /><div id="contact_us"><p><button class="md-trigger" data-modal="modal-3" onClick="background()">Contact Us</button></P></div></li></li>
	</ul>
	</div>
	

	
			<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content" style="height: 500px;">
				<h3>Sponsors</h3>
				<div>
			<?php
			 $contents = file_get_contents('Content/bottommenu/sponsor.txt');
             echo $contents;
			
			?>
			<button class="md-close" style="  margin-top: 55px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-1" id="modal-2">
			<div class="md-content" style="height: 500px;">
				<h3>Videos</h3>
			<div>
			<?php
			 $contents = file_get_contents('Content/sidemenu/youtube.txt');
             echo $contents;
			
			?>
			<button class="md-close" style="  margin-top: 55px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclearyou()">Close</button>
			</div>
			</div>
		</div>
		<div class="md-modal md-effect-1" id="modal-3">
    		<div class="md-content" style="height: 500px;">
				<h3>Contact Us</h3>
			<div>
			<?php
			 $contents = file_get_contents('Content/sidemenu/contact.txt');
             echo $contents;
			
			?>
			<button class="md-close" style="  margin-top: 55px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
			</div>
		</div>
		<div class="md-modal md-effect-1" id="modal-4">
    		<div class="md-content" style="height: 500px;">
				<h3>Feedback</h3>
			<div class="fb-comments" data-href="http://www.isaac2013.com/" data-width="550"></div>

			<button class="md-close" style="  margin-top: 55px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>
			
		<div class="md-modal md-effect-1" id="modal-5">
			<div class="md-content" style="height: 500px;">
				<h3>About Us</h3>
				<div>
			<?php
			 $contents = file_get_contents('Content/bottommenu/aboutus.txt');
             echo $contents;
			
			?>
			<button class="md-close" style="box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
				</div>
			</div>
		</div>
			<div class="md-modal md-effect-1" id="modal-6">
			<div class="md-content" style="height: 500px;">
				<h3>ISAAC NIGHT</h3>
				<div>
			<?php
			 $contents = file_get_contents('Content/bottommenu/isaacnight.txt');
             echo $contents;
			?>
			<button class="md-close" style="box-shadow:0 0 5px 3px cyan;padding:0.3em;margin-top: 5px;" onClick="backgroundclear()">Close</button>
				</div>
			</div>
		</div>
		
		
		
	
<div id="pillar-container">
<div id="event1" class="pillars">

<span class="links" data-link-name="workshop"><a href="#"><img src="images/wk.png" /></a></span>
</div>

<div id="event2" class="pillars">
<span class="links" data-link-name="contest"><a href="#"><img src="images/cont.png" /></a></span>
</div>

<div id="logo-container">
<img src="images/logo.png" class="logo" />
</div>

<div id="event3" class="pillars">
<span class="links" data-link-name="conference"><a href="#"><img src="images/confi.png" /></a></span>
</div>

<div id="event4" class="pillars">
<span class="links" data-link-name="exhibition"><a href="#"><img src="images/exi.png" /></a></span>
</div>
</div>

<div id="navigation">
<div id="nameholder">
<h1>Home</h1>
</div>


<div id="navigation-container-ws" data-menu-name="workshop" class="panel">
<div  data-name="up" id="down">Up</div>
<div id="scroll-wrap">
<ul id="scrollable">

<li class="links" data-sub-menu-name="android-app-dev"><img src="images\workshop\android.png" id="cont_icon" /><span style="top:-29px">Android App<br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Development</a></li>
<li class="links" data-sub-menu-name="windows8-app-dev"><img src="images\workshop\windows.png" id="cont_icon" /><span style="top:-29px">Windows 8 App <br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Development</span></li>
<li class="links" data-sub-menu-name="python"><img src="images\workshop\python.png" id="cont_icon" /><span>Python</span></li>
<li class="links" data-sub-menu-name="bioinfo"><img src="images\workshop\bioinfo.png" id="cont_icon" /><span>Bioinformatics</a></li>
<li class="links" data-sub-menu-name="digital-forensic"><img src="images\workshop\digitalforensics.png" id="cont_icon" /><span>Digital Forensic</a></li>
<li class="links" data-sub-menu-name="cloud-computing"><img src="images\workshop\cloud.png" id="cont_icon" /><span>Cloud Computing</a></li>
<li class="links" data-sub-menu-name="photography"><img src="images\workshop\photography.png" id="cont_icon" /><span>Photography</a></li>
<li class="links" data-sub-menu-name="php-wordpress"><img src="images\workshop\php.png" id="cont_icon" /><span>PHP/Wordpress</a></li>
<li class="links" data-sub-menu-name="ethical-hacking"><img src="images\workshop\ethical.png" id="cont_icon" /><span>Ethical Hacking</a></li>
<li class="links" data-sub-menu-name="3d-animation"><img src="images\workshop\3d.png" id="cont_icon" /><span>3d Animation</a></li>
<li class="links" data-sub-menu-name="vfx"><img src="images\workshop\vfx.png" id="cont_icon" /><span>VFX</a></li>
<li class="links" data-sub-menu-name="photoshop-corel-draw"><img src="images\workshop\photoshop.png" id="cont_icon" /><span  style="top:-29px">Photoshop+Corel<br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Draw</a></li>
<li class="links" data-sub-menu-name="matlab"><img src="images\workshop\matlab.png" id="cont_icon" /><span>Matlab</a></li>
<li class="links" data-sub-menu-name="web3.0"><img src="images\workshop\web3.PNG" id="cont_icon" /><span>Web 3.0</a></li>
<li class="links" data-sub-menu-name="web-development"><img src="images\workshop\web dev.PNG" id="cont_icon" /><span>Web Development</a></li>
<li class="links" data-sub-menu-name="java"><img src="images\workshop\java.PNG" id="cont_icon" /><span>Java</a></li>
<li class="links" data-sub-menu-name="mathematics-in-biology"><img src="images\workshop\math.PNG" id="cont_icon" /><span style="top:-29px">Mathematics in <br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBiology</a></li>
<li class="links" data-sub-menu-name="spectroscopy"><img src="images\workshop\math.PNG" id="cont_icon" /><span>Spectroscopy</a></li>
<li class="links" data-sub-menu-name=".net"><img src="images\workshop\net.png" id="cont_icon" /><span>.NET framework</a></li>
<li class="links" data-sub-menu-name="androidbotics"><img src="images\workshop\androidbotics.PNG" id="cont_icon" /><span>Android Botics</a></li>
<li class="links" data-sub-menu-name="eyediots"><img src="images\workshop\eyediots.PNG" id="cont_icon" /><span>EYEdiots</a></li>
<li class="links" data-sub-menu-name="acclerarduino"><img src="images\workshop\accler.PNG" id="cont_icon" /><span>Acceleroarduino</a></li>


</ul>
</div>
<div  data-name="down" id="up">Down</div>
</div>

<div id="navigation-container-contest" data-menu-name="contest" class="panel">
<ul>
<li class="links" data-link-name="robotic-contest"><img src="images\contesticons\robotics.png" id="cont_icon" /><span>Robotic Contests</a></li>
<li class="links" data-link-name="non-robotic-contest"><img src="images\contesticons\non-robotics.png" id="cont_icon" /><span>Non Robotic Contests</a></li>
<li class="links"><img src="images\contesticons\rules.PNG" id="cont_icon" /><span onClick="rules()">Rules and Tracks</span></li>

</ul>

</div>


<div id="navigation-container-robotic-contest" data-menu-name="robotic-contest" class="panel">
<ul>
<li class="links" data-sub-menu-name="torque"><img src="images\contesticons\torque.png" id="cont_icon" /><span>Torque</a></li>
<li class="links" data-sub-menu-name="roadblock"><img src="images\contesticons\road block.png" id="cont_icon" /><span>Roadblock</a></li>
<li class="links" data-sub-menu-name="gladiators"><img src="images\contesticons\gladiators.png" id="cont_icon" /><span>Gladiators</a></li>
<li class="links" data-sub-menu-name="el-classico"><img src="images\contesticons\el classico.png" id="cont_icon" /><span>El Classico</a></li>
<li class="links" data-sub-menu-name="riddler"><img src="images\contesticons\d riddler.png" id="cont_icon" /><span>Riddler</a></li>
<li class="links" data-sub-menu-name="blind-run"><img src="images\contesticons\blind run.png" id="cont_icon" /><span>Blind Run</a></li>
</ul>

</div>


<div id="navigation-container-nonrobotic-contest" data-menu-name="non-robotic-contest" class="panel">
<div  data-name="up" id="down2">Up</div>
<div id="scroll-wrap2">
<ul id="scrollable2">
<li class="links" data-sub-menu-name="source-code"><img src="images\contesticons\source code.png" id="cont_icon" /><span>Source Code</a></li>
<li class="links" data-sub-menu-name="arcane-coding"><img src="images\contesticons\arcane coding.png" id="cont_icon" /><span>Arcane Coding</a></li>
<li class="links" data-sub-menu-name="mindsweeper"><img src="images\contesticons\mindsweeper.png" id="cont_icon" /><span>Mindsweeper</a></li>
<li class="links" data-sub-menu-name="gamer"><img src="images\contesticons\gamer.png" id="cont_icon" /><span>G.A.M.E.R</a></li>
<li class="links" data-sub-menu-name="picture-perfect"><img src="images\contesticons\picture perfect.png" id="cont_icon" /><span>Picture Perfect</a></li>
<li class="links" data-sub-menu-name="tpp"><img src="images\contesticons\tpp.png" id="cont_icon" /><span>TPP</a></li>
<li class="links" data-sub-menu-name="project-x"><img src="images\contesticons\project x.png" id="cont_icon" /><span>Project X</a></li>
<li class="links" data-sub-menu-name="stockwave"><img src="images\contesticons\stockwave.PNG" id="cont_icon" /><span>Stockwave</a></li>
<li class="links" data-sub-menu-name="webpreneur"><img src="images\contesticons\webpreneur.png" id="cont_icon" /><span>Webpreneur</a></li>
<li class="links" data-sub-menu-name="oth"><img src="images\contesticons\oth.png" id="cont_icon" /><span>Online Treasure hunt</a></li>
</ul>
</div>
<div  data-name="down" id="up2">Down</div>
</div>


<div id="navigation-container-conference" data-menu-name="conference" class="panel">
<ul>
<li class="links" data-sub-menu-name="apple"><img src="images\conference\pcss.PNG" id="cont_icon" /><span>PCSS</a></li>
<li class="links" data-sub-menu-name="tcs"><img src="images\conference\tcs.PNG" id="cont_icon" /><span>TCS</a></li>
<li class="links" data-sub-menu-name="philips"><img src="images\conference\philips.PNG" id="cont_icon" /><span>Philips</a></li>
</ul>
</div>

<div id="navigation-container-exhibition" data-menu-name="exhibition" class="panel">
<ul>
<!--li class="links" data-sub-menu-name="conatus"><span>Conatus</a></li-->
<!--li class="links" data-sub-menu-name="flights-of-fancy"><img src="images\exi\fof.PNG" id="cont_icon" /><span>Flights of Fancy</a></li>
<li class="links" data-sub-menu-name="eco-engoneering"><img src="images\exi\eco.PNG" id="cont_icon" /><span>Eco-Engineering</a></li>
<li class="links" data-sub-menu-name="forensics-expo"><img src="images\exi\forensic.PNG" id="cont_icon" /><span>Forensics Expo</a></li-->
<li class="links" data-sub-menu-name="sharon-voice"><img src="images\exi\shav.PNG" id="cont_icon" /><span>Sharon Voice</a></li>
<li class="links" data-sub-menu-name="exi-apple"><img src="images\exi\apple.PNG" id="cont_icon" /><span>Apple Products</a></li>
</ul>
</div>

</div>
<div id="header-wrapper">
<div id="header">

</div>
</div>
<div id="right-wrapper">


<div id="data-holder">
<div id="data-holder-ws" >
<p id="data-place" style="margin:0px auto;">

</p>
</div>

<div id="d1" class="data-holder-inner" data-content-holder="home">
<p class="ws-data-home">HOME
</p>
 </div>
<div id="d1" class="data-holder-inner" data-content-holder="workshop">
<p class="ws-data">
      <?php
       
        $contents = file_get_contents('Content/workshop/workshop.txt');
        echo $contents;
      ?>
</p>
 </div>
<div id="d2" class="data-holder-inner" data-content-holder="android-app-dev">
<p class="ws-data">
      <?php
       
        $contents = file_get_contents('Content/workshop/w1.txt');
        echo $contents;
		
      ?>

</p>

 </div>
 
  <div id="d1" class="data-holder-inner" data-content-holder="cloud-computing">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w2.txt');
        echo $contents;
      ?>
</p>
 </div>


 <div id="d1" class="data-holder-inner" data-content-holder="bioinfo">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w3.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 <div id="d1" class="data-holder-inner" data-content-holder="photography">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w4.txt');
        echo $contents;
      ?>
</p>
 </div>
 

 <div id="d1" class="data-holder-inner" data-content-holder="ethical-hacking">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w5.txt');
        echo $contents;
      ?>
</p>
 </div>
 

 <div id="d1" class="data-holder-inner" data-content-holder="python">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w6.txt');
        echo $contents;
      ?>
</p>
 </div>
 

 <div id="d1" class="data-holder-inner" data-content-holder="php-wordpress">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w7.txt');
        echo $contents;
      ?>
</p>
 </div>
 

 <div id="d1" class="data-holder-inner" data-content-holder="windows8-app-dev">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w8.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 
  <div id="d1" class="data-holder-inner" data-content-holder="vfx">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w9.txt');
        echo $contents;
      ?>
</p>
 </div>
 
  <div id="d1" class="data-holder-inner" data-content-holder="3d-animation">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w10.txt');
        echo $contents;
      ?>
</p>
 </div>
 
  <div id="d1" class="data-holder-inner" data-content-holder="photoshop-corel-draw">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w11.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 
 <div id="d1" class="data-holder-inner" data-content-holder="matlab">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w12.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 
 <div id="d1" class="data-holder-inner" data-content-holder="web3.0">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w13.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 
 <div id="d1" class="data-holder-inner" data-content-holder="web-development">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w14.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 
 <div id="d1" class="data-holder-inner" data-content-holder="java">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w15.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 <div id="d1" class="data-holder-inner" data-content-holder="mathematics-in-biology">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w16.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 <div id="d1" class="data-holder-inner" data-content-holder="spectroscopy">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w22.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 <div id="d1" class="data-holder-inner" data-content-holder=".net">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w17.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 <div id="d1" class="data-holder-inner" data-content-holder="digital-forensic">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w18.txt');
        echo $contents;
      ?>
</p>
 </div>
 
  <div id="d1" class="data-holder-inner" data-content-holder="androidbotics">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w19.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 
  <div id="d1" class="data-holder-inner" data-content-holder="eyediots">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w20.txt');
        echo $contents;
      ?>
</p>
 </div>
 
  <div id="d1" class="data-holder-inner" data-content-holder="acclerarduino">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/workshop/w21.txt');
        echo $contents;
      ?>
</p>
 </div>
 
 <div id="d1" class="data-holder-inner" data-content-holder="contest">
<p class="ws-data-home">
   <?php
       
        $contents = file_get_contents('Content/contest/contest.txt');
        echo $contents;
      ?>

</p>
 </div>
 
 
  <div id="d3" class="data-holder-inner" data-content-holder="source-code">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn1.txt');
        echo $contents;
      ?>


</p>
 </div>
 
  <div id="d3" class="data-holder-inner" data-content-holder="tpp">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn2.txt');
        echo $contents;
      ?>


</p>
 </div>
 
 
  <div id="d3" class="data-holder-inner" data-content-holder="arcane-coding">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn3.txt');
        echo $contents;
      ?>


</p>
 </div>
 
  <div id="d3" class="data-holder-inner" data-content-holder="mindsweeper">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn4.txt');
        echo $contents;
      ?>


</p>
 </div>
 

 
  <div id="d3" class="data-holder-inner" data-content-holder="project-x">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn5.txt');
        echo $contents;
      ?>


</p>
 </div>
 
   <div id="d3" class="data-holder-inner" data-content-holder="picture-perfect">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn6.txt');
        echo $contents;
      ?>


</p>
 </div>
 
 
  <div id="d3" class="data-holder-inner" data-content-holder="gamer">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn7.txt');
        echo $contents;
      ?>


</p>
 </div>
 
  
  <div id="d3" class="data-holder-inner" data-content-holder="oth">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn8.txt');
        echo $contents;
      ?>


</p>
 </div>
 
  <div id="d3" class="data-holder-inner" data-content-holder="stockwave">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn9.txt');
        echo $contents;
      ?>


</p>
 </div>
 

 
  <div id="d3" class="data-holder-inner" data-content-holder="webpreneur">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn10.txt');
        echo $contents;
      ?>


</p>
 </div>
 
 
  
 <div id="d3" class="data-holder-inner" data-content-holder="torque">

 <p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn11.txt');
        echo $contents;
    ?>
	
</p>

	  
 </div>
 
  <div id="d3" class="data-holder-inner" data-content-holder="roadblock">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn12.txt');
        echo $contents;
      ?>


</p>
 </div>
 
 
  <div id="d3" class="data-holder-inner" data-content-holder="gladiators">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn13.txt');
        echo $contents;
      ?>


</p>
 </div>
 
  <div id="d3" class="data-holder-inner" data-content-holder="el-classico">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn14.txt');
        echo $contents;
      ?>


</p>
 </div>
 
 
  <div id="d3" class="data-holder-inner" data-content-holder="blind-run">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn15.txt');
        echo $contents;
      ?>


</p>
 </div>
 
   <div id="d3" class="data-holder-inner" data-content-holder="riddler">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/contest/cn16.txt');
        echo $contents;
      ?>


</p>
 </div>
 
 
 
 <div id="d1" class="data-holder-inner" data-content-holder="conference">
<p class="ws-data-home">
  <?php
       
        $contents = file_get_contents('Content/conference/conference.txt');
        echo $contents;
      ?>

</p>
 </div>
 
 
  <div id="d1" class="data-holder-inner" data-content-holder="tcs">
<p class="ws-data">
  <?php
       
        $contents = file_get_contents('Content/conference/tcs.txt');
        echo $contents;
      ?>

</p>
 </div>
 
   <div id="d1" class="data-holder-inner" data-content-holder="philips">
<p class="ws-data">
  <?php
       
        $contents = file_get_contents('Content/conference/philips.txt');
        echo $contents;
      ?>

</p>
 </div>
 
   <div id="d1" class="data-holder-inner" data-content-holder="apple">
<p class="ws-data">
  <?php
       
        $contents = file_get_contents('Content/conference/apple.txt');
        echo $contents;
      ?>

</p>
 </div>
 
 <div id="d1" class="data-holder-inner" data-content-holder="exhibition">
<p class="ws-data-home">
  <?php
       
        $contents = file_get_contents('Content/exhibition/exi.txt');
        echo $contents;
      ?>
</p>
 </div>
 
  <div id="d3" class="data-holder-inner" data-content-holder="flights-of-fancy">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/exhibition/fof.txt');
        echo $contents;
      ?>


</p>
 </div>  <div id="d3" class="data-holder-inner" data-content-holder="eco-engoneering">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/exhibition/ecoeng.txt');
        echo $contents;
      ?>


</p>
 </div>  <div id="d3" class="data-holder-inner" data-content-holder="forensics-expo">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/exhibition/forensics.txt');
        echo $contents;
      ?>


</p>
 </div>  <div id="d3" class="data-holder-inner" data-content-holder="sharon-voice">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/exhibition/voice.txt');
        echo $contents;
      ?>


</p>
 </div>  <div id="d3" class="data-holder-inner" data-content-holder="exi-apple">
<p class="ws-data">
   <?php
       
        $contents = file_get_contents('Content/exhibition/apple.txt');
        echo $contents;
      ?>


</p>
 </div>
 
 </div>
 </div>



<div id="footer">
<div id="quick-menu">
<div id="qmenu">
<ul>
    <li><button class="md-trigger" data-modal="modal-5" onClick="background()" style="padding: 0em;margin-top: -4px;"><img src="images/navi/abtus.png" /></button></li>
    <li class="links" id="qone"   data-link-name="workshop"><img src="images/navi/workshopw.png" /></li>
    <li class="links" id="qtwo"   data-link-name="contest"><img src="images/navi/contestw.png" /></li>
	<li class="links" id="qthree" data-link-name="conference"><img src="images/navi/confiw.png" /></li>
	<li class="links" id="qfour"  data-link-name="exhibition"><img src="images/navi/exiw.png" /></li>
    <li><button class="md-trigger" data-modal="modal-1" onClick="background()" style="padding: 0em;margin-top: -4px;"><img src="images/navi/sponsor.PNG" /></button></li>
	<!--li><button class="md-trigger" data-modal="modal-6" onClick="background()" style="padding: 0em;margin-top: -4px;"><img src="images/navi/isaac.PNG" /></button></li-->
	<li><button class="md-trigger" data-modal="modal-6" onClick="background()" style="padding: 0em;margin-top: -4px;"><img src="images/navi/isaacnight.PNG" /></button></li>
	</ul>
</div>


</div>

</div>
</div>
       		
	    <!--div style="" id="jSplash">

<div id="right1" class="bgdiv" style="right:-1024px">
<img src="2.PNG"/>
</div>
<div id="left2" class="bgdiv" style="left:-1024px">
<img src="3.PNG"/>
</div>
<div id="right2" class="bgdiv" style="right:-1024px">
<img src="4.PNG"/>
</div>
<div id="left3" class="bgdiv" style="left:-1024px">
<img src="5.png"/>
</div>
<img id="splash-logo" src="SHIELD.PNG" style="position: absolute;top: 0px;left: 241px;display:none;"/>
</div-->   		
		<div id="md" class="md-overlay" onClick="backgroundclear()"></div><!-- the overlay element -->
        <script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>
	

		<script type="text/javascript">
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>
<script>
$(document).ready( function() {
	var timer;	//timer for splash screen
	
	//navigation swap
	$('#navigation a').on('click', function() {
		if( !$(this).hasClass('btn-main') ) {
			$('#navigation a')
			.toggleClass('btn-secondary')
			.toggleClass('btn-main');
			
			var tar = $(this).attr('href');
			$('.holder').fadeOut(500, function() {
				$(tar).fadeIn(500);
			});
		}
		return false;
	});
	$('#set2').hide();
	$('#header').css('top', '-100px');
	$('#footer').css('bottom', '-100px');
	$('#wrapper').hide();
	


	
	//calling jPreLoader
	/*$('body').jpreLoader({
		splashID: "#jSplash",
		loaderVPos: '70%',
		autoClose: false,
		closeBtnText: "Enter Website!!",
		splashFunction: function() {  
			//passing Splash Screen script to jPreLoader
			 
    $("#right1").animate({right:'+=1024px'},5000);
	 $("#left2").delay(5000).animate({left:'+=1024px'},5000);
    $("#right2").delay(10000).animate({right:'+=1024px'},5000);
	$("#left3").delay(15000).animate({left:'+=1024px'},5000);
	$("#splash-logo").delay(20000).fadeIn(1000);
		}
	}, function() {	//callback function
		clearInterval(timer);
		$('#footer')
		.animate({"bottom":0}, 500);
		$('#header')
		.animate({"top":0}, 800, function() {
			$('#wrapper').fadeIn(1000);
		});
	});
	
	//create splash screen animation
	function splashRotator(){
		var cur = $('#jSplash').children('.selected');
		var next = $(cur).next();
		
		if($(next).length != 0) {
			$(next).addClass('selected');
		} else {
			$('#jSplash').children('section:first-child').addClass('selected');
			next = $('#jSplash').children('section:first-child');
		}
			
		$(cur).removeClass('selected').fadeOut(800, function() {
			$(next).fadeIn(800);
		});
	}*/
	
	function ani()
	{ 
	$(document).ready(function(){
		$("#left1").animate({left:'+=1024px'},5000);
		$("#right1").delay(5000).animate({right:'+=1024px'},5000);
		$("#left2").delay(10000).animate({left:'+=1024px'},5000);
		$("#right2").delay(15000).animate({right:'+=1024px'},5000);
	});
	}
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44170590-1', 'isaac2013.com');
  ga('send', 'pageview');

</script>
</body>
</html>

