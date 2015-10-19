<!DOCTYPE html>

<html lang="en" class="no-js">
<?php
session_start();
if(empty($_SESSION['catname']))
$_SESSION['catname']="";
?>
	<head>
		<?php
		 $contents = file_get_contents('content/meta.txt');
        echo $contents; 
		?>
		
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
	 <link rel="stylesheet" href="css/style2.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="js/tipuedrop_content.js"></script>
		<link rel="stylesheet" type="text/css" href="css/tipuedrop.css">
		<script type="text/javascript" src="engine1/jquery.js"></script>
		<script type="text/javascript" src="js/tipuedrop.js"></script>
		<script src="js/modernizr.custom.js"></script>
			<style type="text/css">
		#cnt{
		color: #37D4F1;
		border-bottom: 4px solid #37D4F1;
		}
		</style>
		<script type="text/javascript">
		function check()
		{
		var c=document.contact.country.value;
		if(c!="India")
		document.getElementById("state").style.display="none";
		else
		document.getElementById("state").style.display="block";
		}
		
		</script>
	</head>
	<body >
			<?php
            $contents = file_get_contents('content/search.txt');
            echo $contents;            
            ?>
		
	<header class="clearfix">
			<?php
            $contents = file_get_contents('content/menu.txt');
            echo $contents;            
            ?>
			</header>	
			
<div class="container" >
<div id="detail" style="margin:0 auto;width:95%" <div itemscope itemtype="http://schema.org/Business">
<p style="float:left;padding-right: 4em">
<b>Address</b>:
<br /><span itemprop="name">Surat Fabrics</span>
<br />c/o Shree Creation
<br /><span itemprop="market">RKTM,4546-47</span>
<br /><span itemprop="streetAddress">Ring Road </span>
<span itemprop="city">Surat</span>,<span itemprop=pincode">395007</span>
<br />
</p>
<p style="float:left;padding-right: 4em">
<b>Contact:</b>
<br /> <span itemprop="mobile">+919099898992</span>
<br /> <span itemprop="telephone">02613050250</span>
</p>
<p>
<b>Email:</b>
<br /><span itemprop="email">enquiry@suratfabric.com</span>
</p>
</div>
<br /><br /><br />
<hr />
<div id="contact">
            <h1>Contact us</h1>
            <form id="ContactForm" action="" name="contact">
                <p>
                    <label>Name</label>
                    <input id="name" name="name" class="inplaceError" maxlength="120" type="text" autocomplete="off"/>
					<span class="error" style="display:none;"></span>
                </p>
				 <p>
                    <label>Contact number</label>
                    <input id="cntno" name="cntno" class="inplaceError" maxlength="20" type="text" autocomplete="off"/>
					<span class="error" style="display:none;"></span>
                </p>
				<!--p>
                    <label>Telephone Number<span>(optional)</span></label>
                    <input id="teleno" name="teleno" class="inplaceError" maxlength="120" type="text" autocomplete="off"/>
                </p-->
                <p>
                    <label>Email</label>
                    <input id="email" name="email" class="inplaceError" maxlength="120" type="text" autocomplete="off"/>
					<span class="error" style="display:none;"></span>
                </p>
				
				
              
				  <p>
                    <label>Country</label>
                    <?php
					 $contents = file_get_contents('content/cc.txt');
					echo $contents;
					?>
					<span class="error" style="display:none;"></span>
                </p>
				
				<p style="position: absolute;margin-top: 134px;margin-left: 360px;width:250px" id="state">
                    <label style="width:80px" >State</label>
                    <?php
					 $contents = file_get_contents('content/sc.txt');
					echo $contents;
					?>
					<span class="error" style="display:none;"></span>
                </p>
				
				  <p>
                    <label>Address<span>(optional)</span></label>
                    <input id="address" name="address" class="inplaceError" maxlength="120" type="text" autocomplete="off"/>
                </p>
				
				
                <p>
                    <label>Your message<br /> <span>300 characters allowed</span></label>
                    <textarea id="message" name="message" class="inplaceError" cols="6" rows="5" autocomplete="off"><?php echo $_SESSION['catname']; session_destroy(); ?></textarea>
					<span class="error" style="display:none;"></span>
                </p>
                <p class="submit">
                    <input id="send" type="button" value="Submit"/>
                    <span id="loader" class="loader" style="display:none;"></span>
					<span id="success_message" class="success"></span>
                </p>
				<input id="newcontact" name="newcontact" type="hidden" value="1"></input>
            </form>
        </div>
        <div class="envelope">
            <img id="envelope" src="images/envelope.png" alt="envelope" width="246" height="175" style="display:none;"/>
        </div>
		</div>
					<?php
            $contents = file_get_contents('content/quick.txt');
            echo $contents;            
            ?>
		   <?php
            $contents = file_get_contents('content/footer.txt');
            echo $contents;            
            ?>
        <!-- The JavaScript -->
			<script>
			var $jq4=jQuery.noConflict();
			$jq4(document).ready(function() {

			$jq4('#tipue_drop_input').tipuedrop();	
			});
			</script>		
        <script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/jquery.contact.js" type="text/javascript"></script>
				<script src="js/cbpTooltipMenu.min.js"></script>
		<script>
			var menu = new cbpTooltipMenu( document.getElementById( 'cbp-tm-menu' ) );
		</script>
	</body>
</html>
