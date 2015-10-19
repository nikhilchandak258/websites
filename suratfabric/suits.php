<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<?php
		 $contents = file_get_contents('content/meta.txt');
        echo $contents; 
		?>
		<title>SUIT Catalogues</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script type="text/javascript" src="js/tipuedrop_content.js"></script>
		<link rel="stylesheet" type="text/css" href="css/tipuedrop.css">
		<script type="text/javascript" src="engine1/jquery.js"></script>
		<script type="text/javascript" src="js/tipuedrop.js"></script>
		
		<script src="js/modernizr.custom.js"></script>
			<style type="text/css">
		#suits{
		color: #37D4F1;
		border-bottom: 4px solid #37D4F1;
		}
		.container{
		background-color: rgba(0,0,0, 0);
		 box-shadow: 0 0 20px 5px rgba(0,0,0, 0);
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
				<div id="three-columns" class="grid-container">
				<h1>Suit Catalogues</h1>
			<ul class="rig columns-3">
			<?php include 'content/suit.php'; ?> 
			</ul>
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
