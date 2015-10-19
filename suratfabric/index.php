<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<?php
		 $contents = file_get_contents('content/meta.txt');
        echo $contents; 
		?>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/tipuedrop.css">
		<link rel="stylesheet" href="css/slider.css" type="text/css" />
		 <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		 <link rel="stylesheet" href="css/defaultnivo.css" type="text/css" media="screen" />
	    <script type="text/javascript" src="js/tipuedrop_content.js"></script>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/tipuedrop.js"></script>
				<script type="text/javascript" src="js/flowslider.jquery.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<style type="text/css">
		#home{
		color: #37D4F1;
		border-bottom: 4px solid #37D4F1;
		}
		</style>
		<script>
	var $jq6=jQuery.noConflict();
        jQuery(document).ready(function($jq6) {
            // create a slider out of each element with .simple-cycle class name
            $jq6(".simple-cycle").each(function(k, sc) {
                var $jq6sc = $jq6(sc);
                $jq6sc.children(".flow-slider").FlowSlider({
                    marginStart: 0,
                    marginEnd: 0,
                    infinite: true,
                    startPosition: 0.0,
                    position: 0.0,
                    animationOptions: {
                        snap: true
                    },
                    controllers: ["Event", "Event"],
                    controllerOptions: [
                        {
                            el: $jq6sc.children(".arrow-left"),
                            step: -137
                        },
                        {
                            el: $jq6sc.children(".arrow-right"),
                            step: 137
                        },
                    ]
                });
            });
        });
    </script>
	</head>
	<body>
	<div style="visibility:hidden;position: absolute;" itemscope itemtype="https://schema.org/ShoppingCenter">
	 <span itemprop="name">Suratfabric.com</span>
	 <span itemprop="description">Surat's Online Wholesale textile Market. Buy online latest Suit Catalogues, Sari Catalogues, Laces, kurtis, Fabrics and dress materials and many more at wholesale rates directly from manufacturers. We ship Worldwide.</span>
	</div>
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
			
			<div class="container1">
    <div id="wrapper">


        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/home/1.jpg" data-thumb="images/home/1.jpg" alt="Catalogue" title="#cat1" data-transition="slideInLeft" />
                <img src="images/home/2.jpg" data-thumb="images/home/2.jpg" alt="Catalogue" title="#cat2" data-transition="slideInLeft" />
                <img src="images/home/3.jpg" data-thumb="images/home/3.jpg" alt="Catalogue" title="#cat3" data-transition="slideInLeft" />
                <img src="images/home/4.jpg" data-thumb="images/home/4.jpg" alt="Catalogue" title="#cat4" data-transition="slideInLeft" />
            </div>
			
			<div id="cat1" class="nivo-html-caption">
             <b>Catalogue - <a href="catalogue/nithya44-lt-fabrics-suit-catalog-12-pcs">LT-Fabrics Nithya 44</a></b> 
            </div>
			<div id="cat2" class="nivo-html-caption">
             <b>Catalogue - <a href="catalogue/majestic-beauty-lt-fabrics-suit-catalog-8-pcs">LT-Fabrics Majestic Beauty</a></b> 
            </div>
			<div id="cat3" class="nivo-html-caption">
             <b>Catalogue - <a href="catalogue/zaraa-catalog-11-pcs">Zaraa</a></b> 
            </div>
            <div id="cat4" class="nivo-html-caption">
             <b>Catalogue - <a href="catalogue/bipasha-catalog-9-pcs">Bipasha</a></b>
            </div>
        </div>

    </div>
		</div>
		<div id="qsaree">
		<div class="title"><b>Suit Catalogues</b><span class="viewbutton"><a href="suits">View More</a></span> </div>
		<div class="slider">
		<div class="simple-cycle simple-cycle-2">
        <div class="arrow arrow-left"></div>
        <div class="flow-slider">
		<?php include 'content/slidersuit.php'; ?> 	
		</div>
        <div class="arrow arrow-right"></div>
		</div>
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

			   <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
			<script>
			var $jq4=jQuery.noConflict();
			$jq4(document).ready(function() {

			$jq4('#tipue_drop_input').tipuedrop();
			});

    $jq4(window).load(function() {
        $jq4('#slider').nivoSlider();
    });
</script>
   


		<script src="js/cbpTooltipMenu.min.js"></script>

		<script>
			var menu = new cbpTooltipMenu( document.getElementById( 'cbp-tm-menu' ) );
		</script>
	</body>
</html>
