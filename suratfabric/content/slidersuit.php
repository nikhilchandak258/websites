<?php
	
$row = 1;
	
$i=0;


if (($handle = fopen("excel/slidersuit.csv", "r")) !== FALSE) {
		

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
		$count=$row-1;	
		echo '<a href="catalogue/',$data[0],'"><div class="item"><img src="images/',$data[1],'/',$data[2],'.',$data[3],'" alt="catalogue" /><div class="subtext">',$data[4],'</div></div></a>';

			}	
		
    }	
    fclose($handle);
?>
