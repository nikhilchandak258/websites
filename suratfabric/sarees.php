<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<?php
		 $contents = file_get_contents('content/meta.txt');
        echo $contents; 
		?>
		<title>SAREE Catalogues</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script type="text/javascript" src="js/tipuedrop_content.js"></script>
		<link rel="stylesheet" type="text/css" href="css/tipuedrop.css">
		<script type="text/javascript" src="engine1/jquery.js"></script>
		<script type="text/javascript" src="js/tipuedrop.js"></script>
		
		<script src="js/modernizr.custom.js"></script>
			<style type="text/css">
		#cat{
		color: #37D4F1;
		border-bottom: 4px solid #37D4F1;
		}
		

/*  */
</style>
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
	     <?php
            $contents = file_get_contents('content/saree.txt');
            echo $contents;            
            ?>	
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
