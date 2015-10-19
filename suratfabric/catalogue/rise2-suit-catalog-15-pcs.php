<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
session_start();
$_SESSION['catname']="Rise-2"; // You can set the value however you like.
$title="Rise-2";
$description="";
$pieces="15";
$top="Spun Cotton";
$dupatta="Shiffon";
$bottom="Spun Cotton";
$inner="-";
$range="Below Rs.500";
?>
	<head>
			<?php
		 $contents = file_get_contents('content/metacat.txt');
        echo $contents; 
		?>
		<title>Rise-2 Suit Catalog 15 pcs - Suratfabric.com</title>
		<meta name="description" content="Buy online Rise-2 Suit Catalogue 15 pcs at lowest Wholesale Prices:Suratfabric.com" />
		<meta name="keywords" content=" Buy, Suits, Rise-2, Suit, wholesale, catalogue, catalog, catlog, catlogue, wholesale price, lowest price" />
		<meta name="author" content="www.suratfabric.com" />
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<link rel="stylesheet" type="text/css" href="css/menu.css" />
		<link rel="stylesheet" type="text/css" href="css/popup.css" />
		<link rel="stylesheet" href="css/colorbox2.css" />



	<script src="js/jquery.js"></script>		<script src="js/jquery.validate.js"></script>	<script type="text/javascript" src="js/jquery.numeric.js"></script>
			<script type="text/javascript">
		function check()
		{
		var c=document.order.country.value;
		if(c!="India")
		document.getElementById("state").style.display="none";
		else
		document.getElementById("state").style.display="table-row";
		}
		
		function addcat()
		{
		var msg=document.order.message.value;
		var cat=document.title;
		document.order.catalogue_name.value=cat;
		document.order.quantity.value=1;
		var cnt=msg+" "+cat;
		document.order.message.value=cnt;
		}

		function clear()
		{
		document.getElementById("error").style.visibility="hidden";
		}
		
		
		</script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.colorbox.js"></script>
		
<script type="text/javascript" src="js/tipuedrop_content.js"></script>
<link rel="stylesheet" type="text/css" href="css/tipuedrop.css">
<script type="text/javascript" src="js/tipuedrop.js"></script>
		<style type="text/css">
		#cat{
		color: #37D4F1;
		border-bottom: 4px solid #37D4F1;
		}
		.grid li {
		min-width: 300px;
height: 400px;
}
</style>
		</head>
	<body onload="addcat()">
		
			<!-- Top Navigation -->
				<?php
            $contents = file_get_contents('content/search.txt');
            echo $contents;            
            ?>
			<header>
				
							     <?php
            $contents = file_get_contents('content/menu.txt');
            echo $contents;            
            ?>	
			</header>
				
				<?php
            $contents = file_get_contents('content/sidemenu.txt');
            echo $contents;            
            ?>
			
			
		
		
		
			<div class="conntainer">
			<?php include 'content/catdata.php'; ?> 
			<div class="sidebutton" >

			<button class="md-trigger" data-modal="modal-2"><img src="images/buy.png" /></button>
			</div>
			<div id="gallery">
			
			<div>
			<ul class="grid effect-1" id="grid">

<?php
	
$row = 1;
	
$i=0;


if (($handle = fopen("excel/rise2.csv", "r")) !== FALSE) {
		

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
		$count=$row-1;	
		echo '<li><a class="group1" href="images/',$data[0],'/',$data[1],'.',$data[2],'" rel="lightbox[project]" ><H1><img src="images/',$data[0],'/',$data[1],'.',$data[2],'" alt="catalog" /></H1></a></li>';

			}	
		
    }	
    fclose($handle);
?>

</ul>
</div>

		</div>
		
			  <?php
            include 'content/pop.php';           
            ?>	
		
			</div>
				<?php
            include 'php/submitform.php';            
            ?>	
			<div class="md-overlay"></div>
			
</div>
			<?php
            $contents = file_get_contents('content/quick.txt');
            echo $contents;            
            ?>
			<?php
            $contents = file_get_contents('content/footer.txt');
            echo $contents;            
            ?>	
			
<script src="js/classie.js"></script>			
<script src="js/modalEffects.js"></script>
			<script type="text/javascript">			var $jq4=jQuery.noConflict();			$jq4("#clr").click(function(){$jq4("#error").css('visibility','hidden');});			$jq4("#clrmsg").click(function(){$jq4("#success").css('visibility','hidden');});$jq4(document).ready(function() {     $jq4('#tipue_drop_input').tipuedrop();});$jq4().ready(function() {		$jq4("#order").validate();});	$jq4(".numeric").numeric();	$jq4(document).ready(function(){	$jq4(".group1").colorbox({rel:'group1'});	});		</script>
			
				<script src="js/cbpTooltipMenu.min.js"></script>
		<script>
			var menu = new cbpTooltipMenu( document.getElementById( 'cbp-tm-menu' ) );
		</script>
	</body>
</html>