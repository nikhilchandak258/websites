<html>
<head>
<title>Rules And Tracks</title>
<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/component.css" />

<style type="text/css">
#cont_icon{
height: 45px;
float: left;
margin-top: -11px;
padding-right: 6px;
}
ul
{
width: 100%;
padding: 0px;
margin: 0px;
top: 0px;
}
#robo li{
height: 8%;
padding: 0.4em;
display: block;
transition-property: font-size;
transition-duration: 1s;
cursor: pointer;
text-align: left;
padding-top: 0.5em;
font-family: olney;

}
#header-wrapper{
width: 100%;
position: relative;
height: 70px;
z-index: 60;
background: rgba(0, 0, 0, 0);
overflow: hidden;
box-shadow: 5px 0px 20px #000;

}
#non-robo li{
height: 8%;
padding: 0.4em;
display: block;
transition-property: font-size;
transition-duration: 1s;
cursor: pointer;
text-align: left;
padding-top: 0.5em;
font-family: olney;
}
#online li{
height: 8%;
padding: 0.4em;
display: block;
transition-property: font-size;
transition-duration: 1s;
cursor: pointer;
text-align: left;
padding-top: 0.5em;
font-family: olney;

}
a{
text-decoration:none;
color:white;
position: relative;
left: 10px;

}

button {
	border: none;
	background: rgba(255, 255, 255, 0);
	color: white;
	font-family: aldrich;
	cursor: pointer;
	display: inline-block;
	padding: 0.2em;
   border-radius: 5px;
   text-align: center;
 font-size:18px;
}

h1{
color:white;
font-family:olney;


}

::-webkit-scrollbar {
    width: 12px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(255, 255, 255, 1); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: rgba(0, 245, 255, 0.8); 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: rgba(255,0,0,0.4); 
}

</style>
</head>
<body style="background-color:black">

			<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/torque.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>
					<div class="md-modal md-effect-1" id="modal-2">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/roadblock.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>			
		<div class="md-modal md-effect-1" id="modal-3">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/gladiators.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>			
		<div class="md-modal md-effect-1" id="modal-4">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/robosoccer.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>		
		<div class="md-modal md-effect-1" id="modal-5">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/blindrun.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>		
		<div class="md-modal md-effect-1" id="modal-6">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/riddler.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>		
		<div class="md-modal md-effect-1" id="modal-7">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/oth.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>			
		<div class="md-modal md-effect-1" id="modal-8">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/stockwave.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>			
		<div class="md-modal md-effect-1" id="modal-9">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/web.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>		
		<div class="md-modal md-effect-1" id="modal-10">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/tpp.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>			<div class="md-modal md-effect-1" id="modal-11">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/coder.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>			
		<div class="md-modal md-effect-1" id="modal-12">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/arcane.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>
				</div>		
				<div class="md-modal md-effect-1" id="modal-13">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/gamer.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>				
		<div class="md-modal md-effect-1" id="modal-14">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/projectx.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>					
		<div class="md-modal md-effect-1" id="modal-15">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/picprfct.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>			
		<div class="md-modal md-effect-1" id="modal-16">
			<div class="md-content" style="height: 500px;">
				<h3>RULES</h3>
				<div style="height:62%;overflow:scroll;overflow-x:hidden;" >
			<?php
			 $contents = file_get_contents('Content/contestrules/quiz.txt');
             echo $contents;
			
			?>
			</div><button class="md-close" style="  margin-top: 28px;box-shadow:0 0 5px 3px cyan;padding:0.3em" onClick="backgroundclear()">Close</button>
			</div>
		</div>
		
<div id="header-wrapper">
<div id="header">
<h1><center>Rules And Tracks</center></h1>
</div>
</div>
<div  style="height:100%;width:1024px;margin:0 auto">
		<div id="robo" style="float:left;position: relative;width: 270px;">
<ul>
<h1>Robotics</h1>
<button class="md-trigger" data-modal="modal-1" ><li><img src="images\contesticons\torque.png" id="cont_icon" />Torque</li></button>
<button class="md-trigger" data-modal="modal-2" ><li><img src="images\contesticons\road block.png" id="cont_icon" />Roadblock</li></button>
<button class="md-trigger" data-modal="modal-3" ><li><img src="images\contesticons\gladiators.png" id="cont_icon" />Gladiators</li></button>
<button class="md-trigger" data-modal="modal-4" ><li><img src="images\contesticons\el classico.png" id="cont_icon" />El Classico</li></button>
<button class="md-trigger" data-modal="modal-6" ><li><img src="images\contesticons\d riddler.png" id="cont_icon" />Riddler</li></button>
<button class="md-trigger" data-modal="modal-5" ><li><img src="images\contesticons\blind run.png" id="cont_icon" />Blind Run</li></button>
</ul>
</div>
<div id="non-robo" style="float:left;position: relative;width: 270px;">
<ul>
<h1>Non-Robotics</h1>
<button class="md-trigger" data-modal="modal-11" ><li><img src="images\contesticons\source code.png" id="cont_icon" />Source Code</li></button>
<button class="md-trigger" data-modal="modal-12" ><li><img src="images\contesticons\arcane coding.png" id="cont_icon" />Arcane Coding</li></button>
<button class="md-trigger" data-modal="modal-16" ><li><img src="images\contesticons\mindsweeper.png" id="cont_icon" />Mindsweeper</li></button>
<button class="md-trigger" data-modal="modal-13" ><li><img src="images\contesticons\gamer.png" id="cont_icon" />G.A.M.E.R</li></button>
<button class="md-trigger" data-modal="modal-15" ><li><img src="images\contesticons\picture perfect.png" id="cont_icon" />Picture Perfect</li></button>
<button class="md-trigger" data-modal="modal-10" ><li><img src="images\contesticons\tpp.png" id="cont_icon" />TPP</li></button><br/>
<button class="md-trigger" data-modal="modal-14" ><li><img src="images\contesticons\project x.png" id="cont_icon" />Project X</li></button>
</ul>
</div>

<div id="online" style="float:left;position: relative;width: 270px;">
<ul>
<h1>Online</h1>
<button class="md-trigger" data-modal="modal-8" ><li><img src="images\contesticons\stockwave.PNG" id="cont_icon" />Stockwave</li></button>
<button class="md-trigger" data-modal="modal-9" ><li><img src="images\contesticons\webpreneur.png" id="cont_icon" />Webpreneur</li></button>
<button class="md-trigger" data-modal="modal-7" ><li><img src="images\contesticons\oth.png" id="cont_icon" />Online Treasure hunt</li></button>
</ul>
</div>	

		<div id="robo" style="float:left;position: relative;width: 20%;">
<ul>
<h1>Tracks</h1>
<li><img src="images\contesticons\torque.png" id="cont_icon" /><a href="images\tracks\torque.jpg" target="_blank">Torque</a></li>
<!--li><img src="images\contesticons\road block.png" id="cont_icon" /><a href="images\tracks\torque.jpg" target="_blank">Roadblock</li-->
<li><img src="images\contesticons\gladiators.png" id="cont_icon" /><a href="images\tracks\gladiators.png" target="_blank">Gladiators</li>
<li><img src="images\contesticons\el classico.png" id="cont_icon" /><a href="images\tracks\elclassico.jpg" target="_blank">El Classico</li>
<!--li><img src="images\contesticons\d riddler.png" id="cont_icon" /><a href="images\tracks\torque.jpg" target="_blank">Riddler</li-->
<li><img src="images\contesticons\blind run.png" id="cont_icon" /><a href="images\tracks\blindrun.png" target="_blank">Blind Run</li>
</ul>
</div>
</div>	
		<div id="md" class="md-overlay"></div><!-- the overlay element -->
        <script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>
	

		<script type="text/javascript">
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>		
</body>
</html>
