<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<?php
		 $contents = file_get_contents('content/meta.txt');
        echo $contents; 
		?>
		
		<title>About Suratfabrics</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script type="text/javascript" src="js/tipuedrop_content.js"></script>
		<link rel="stylesheet" type="text/css" href="css/tipuedrop.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/tipuedrop.js"></script>
		<script src="js/modernizr.custom.js"></script>
			<style type="text/css">
		#about{
		color: #37D4F1;
		border-bottom: 4px solid #37D4F1;
		}
		</style>
	</head>
	<body>
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
			
<div class="container">
 <div align="justify">
            <?php
            $contents = file_get_contents('content/about.txt');
            echo $contents;            
            ?>
                </div>
                <div align="justify">
                    <p>
                        <br>
                        Surat Fabrics - Wide range of Polyester, Satins, georgette, crepes, chiffons, velvets , brocades , knits , dhupians , polyester blends and nylon of different weaves of plain , jacquard , satin and moss.<br>
                        <br />
                        Surat Fabrics &#8211; Wide range of fabrics made up of natural fibers like cotton, silk, bamboos, soya, viscose, wool,
                        <br /><br />Value additions &#8211; Embroidery, pleating, crushing, stamping, foiling, coding. Taping and flocking,<br />
                    </p>
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
			<script>
			var $jq4=jQuery.noConflict();
			$jq4(document).ready(function() {

			$jq4('#tipue_drop_input').tipuedrop();	
			});
			</script>
		<script src="js/cbpTooltipMenu.min.js"></script>
		<script>
			var menu = new cbpTooltipMenu( document.getElementById( 'cbp-tm-menu' ) );
		</script>
	</body>
</html>
