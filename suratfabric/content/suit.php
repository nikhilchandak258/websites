<?php
	
$row = 1;
	
$i=0;


if (($handle = fopen("excel/suit.csv", "r")) !== FALSE) {
		

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
		$count=$row-1;	
		echo '<a href="catalogue/',$data[0],'"><li><img src="images/',$data[1],'/',$data[2],'.',$data[3],'" alt="catalogue" /><center><h3>',$data[4],'<br/><small style="font-size: 14px;color: rgb(194, 194, 194);">Pieces : ',$data[5],'<br />Range : ',$data[6],'</small></h3></center></li></a>';

			}	
		
    }	
    fclose($handle);
?>
