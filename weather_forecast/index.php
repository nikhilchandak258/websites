

<html><title>Test</title>
<head>
<style type="text/css">
	#main_form{
		margin:0 auto;
		width:400px;
		border: 1px solid;
		padding: 10px;
	}
	
	#main_form a{margin-left:130px;}
	
	#result{
		margin:0 auto;
		width:400px;
		border: 1px solid;
		padding: 10px;		
	}
	
	#result div{
		width: 200px;
		margin: 0 auto;
		text-align: center;	
	}
	
	#summary{
		font-size:20px;
		font-weight:bold;
		text-align:center;

	}

</style>

<script type="text/javascript">
	function clear_field(){

		document.f1.r_stadd.value="";
		document.f1.r_city.value="";
		var ele = document.getElementsByName("r_deg");
		//for(var i=0;i<ele.length;i++)
		ele[0].checked = true;
		document.getElementById("s_list").selectedIndex = "0";
		document.getElementById("form1").submit();
		
	}
	
	function vaildate_form(){
		var v_add=document.f1.r_stadd.value;
		var v_city=document.f1.r_city.value;
		var v_unit=document.f1.r_deg.value;
		var v_state=document.f1.r_list.value;
		var v_test=document.f1.validate.value;
		
		var v_error="";
		if(v_add=="" || v_add.trim()=="" || v_add==" ")
			v_error=v_error+"-> Street Address\n";
		if(v_city=="" || v_city.trim()=="" || v_city==" ")
			v_error=v_error+"-> City\n";
		if(v_state=="")
			v_error=v_error+"-> State\n";
		if(v_unit=="")
			v_error=v_error+"-> Degree\n";
		
		if(v_error=="")
		{	
			document.f1.validate.value="t";
			document.getElementById("form1").submit();
		}
		else
		{	
			alert("Please Fill the following fields :\n"+v_error);
			document.getElementById("form1").submit();
		}	
	}

</script>

</head>


<?php
	$p_flag="true";
	if(isset($_POST["validate"]))
	{
		$p_ser=$_POST["validate"];
		if($p_ser=="t")
		{
			//echo "success";
			$st_add=$_POST["r_stadd"];
			$p_city=$_POST['r_city'];
			$p_list=$_POST['r_list'];
			$p_unit=isset($_POST['r_deg']) ? $_POST['r_deg'] : '';
			
		
			
				$xml=simplexml_load_file("https://maps.google.com/maps/api/geocode/xml?address=$st_add,$p_city,$p_list&key=AIzaSyBFuzBVvXwyMKk1sEndCbAPWa1sqRxbdDU") or die("Error: Cannot create object");
				//print_r($xml);
				$p_status=$xml->status;
				if($p_status=="OK")
				{	
					$p_lat=$xml->result->geometry->location->lat;
					$p_lng=$xml->result->geometry->location->lng;
					
					
					$p_string = file_get_contents("https://api.forecast.io/forecast/6ac51ed97fdf14ad66a47641584cfb9e/$p_lat,$p_lng?units=$p_unit&exclude=flags");
					//echo $p_string;
					

					$p_json = json_decode($p_string, true);
					//echo $p_json;
					echo '<pre>' . print_r($p_json, true) . '</pre>';
					
					//Extracting parameters from json file
					$p_summary=$p_json['currently']['summary'];
					$p_temper=(int)($p_json['currently']['temperature']);
					$p_icon=$p_json['currently']['icon'];
					$p_preci=$p_json['currently']['precipIntensity'];
					$p_rain=100*($p_json['currently']['precipProbability']);
					
					/*if($p_unit=="si")
					$p_windspeed=(int)(($p_json['currently']['windSpeed'])*2.236);
					else*/
					$p_windspeed=(int)($p_json['currently']['windSpeed']);
					
					$p_dewp=(int)($p_json['currently']['dewPoint']);
					$p_humid=100*($p_json['currently']['humidity']);
					
					/*if($p_unit=="si")
					$p_visi=(int)(($p_json['currently']['visibility'])*0.621);	
					else*/
					$p_visi=(int)($p_json['currently']['visibility']);
					
					$p_sunrise=$p_json['daily']['data'][0]['sunriseTime'];
					$p_sunset=$p_json['daily']['data'][0]['sunsetTime'];
					$p_time=$p_json['timezone'];
					
					
					
					//getiing image from icon value
					$img_tip="";
					 if($p_icon=="clear-day")
						{$p_image="clear.png";$img_tip="Clear Day";}
					 elseif($p_icon=="clear-night")
						{$p_image="clear_night.png";$img_tip="Clear Night";}
					 elseif($p_icon=="rain")
						{$p_image="rain.png";$img_tip="Rain";}
					 elseif($p_icon=="snow")
						{$p_image="snow.png";$img_tip="Snow";}
					 elseif($p_icon=="sleet")
						{$p_image="sleet.png";$img_tip="Sleet";}
					 elseif($p_icon=="wind")
						{$p_image="wind.png";$img_tip="Wind";}
					 elseif($p_icon=="fog") 
						{$p_image="fog.png";$img_tip="Fog";}
					 elseif($p_icon=="cloudy")
						{$p_image="cloudy.png";$img_tip="Cloudy";}
					 elseif($p_icon=="partly-cloudy-day")
						{$p_image="cloud_day.png";$img_tip="Cloudy Day";}
					 elseif($p_icon=="partly-cloudy-night")
						{$p_image="cloud_night.png";$img_tip="Cloudy night";}
					
					//setting the precipitation value
					if($p_unit=="si")
						$p_preci=$p_preci*0.03937;

					//echo "$p_preci";
					
					if($p_preci>=0 && $p_preci<0.002)
						$p_preci_dis="None";
					elseif($p_preci>=0.002 && $p_preci<0.017)
						$p_preci_dis="Very Light";
					elseif($p_preci>=0.017 && $p_preci<0.1)
						$p_preci_dis="Light";
					elseif($p_preci>=0.1 && $p_preci<0.4)
						$p_preci_dis="Moderate";
					elseif($p_preci>=0.4)
						$p_preci_dis="Heavy";
					
				}
				else
				$p_flag="false";
			
		}
	}
?>	
<body>
<h1 style="text-align:center">Forecast Search</h1>
<div id="main_form">

	<form name="f1" id="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table>
		<tr>
			<td>Street Address:*</td><td><input type="text" name="r_stadd" value="<?php echo isset($_POST['r_stadd']) ? $_POST['r_stadd'] : '' ?>" /></td>
		</tr>
		<tr>
			<td>City:*</td><td><input type="text" name="r_city" value="<?php echo isset($_POST['r_city']) ? $_POST['r_city'] : '' ?>" /></td>
		</tr>
		<tr>
			<td>State:*</td><td><select name="r_list" id="s_list">
			<option value="">Select Your State</option>
			<option value="AL" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="AL") echo "selected";?>>Alabama</option>
			<option value="AK" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="AK") echo "selected";?>>Alaska</option>
			<option value="AZ" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="AZ") echo "selected";?>>Arizona</option>
			<option value="AR" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="AR") echo "selected";?>>Arkansas</option>
			<option value="CA" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="CA") echo "selected";?>>California</option>
			<option value="CO" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="CO") echo "selected";?>>Colorado</option>
			<option value="CT" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="CT") echo "selected";?>>Connecticut</option>
			<option value="DE" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="DE") echo "selected";?>>Delaware</option>
			<option value="DC" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="DC") echo "selected";?>>District Of Columbia</option>
			<option value="FL" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="FL") echo "selected";?>>Florida</option>
			<option value="GA" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="GA") echo "selected";?>>Georgia</option>
			<option value="HI" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="HI") echo "selected";?>>Hawaii</option>
			<option value="ID" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="ID") echo "selected";?>>Idaho</option>
			<option value="IL" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="IL") echo "selected";?>>Illinois</option>
			<option value="IN" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="IN") echo "selected";?>>Indiana</option>
			<option value="IA" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="IA") echo "selected";?>>Iowa</option>
			<option value="KS" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="KS") echo "selected";?>>Kansas</option>
			<option value="KY" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="KY") echo "selected";?>>Kentucky</option>
			<option value="LA" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="LA") echo "selected";?>>Louisiana</option>
			<option value="ME" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="ME") echo "selected";?>>Maine</option>
			<option value="MD" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="MD") echo "selected";?>>Maryland</option>
			<option value="MA" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="MA") echo "selected";?>>Massachusetts</option>
			<option value="MI" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="MI") echo "selected";?>>Michigan</option>
			<option value="MN" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="MN") echo "selected";?>>Minnesota</option>
			<option value="MS" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="MS") echo "selected";?>>Mississippi</option>
			<option value="MO" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="MO") echo "selected";?>>Missouri</option>
			<option value="MT" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="MT") echo "selected";?>>Montana</option>
			<option value="NE" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="NE") echo "selected";?>>Nebraska</option>
			<option value="NV" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="NV") echo "selected";?>>Nevada</option>
			<option value="NH" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="NH") echo "selected";?>>New Hampshire</option>
			<option value="NJ" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="NJ") echo "selected";?>>New Jersey</option>
			<option value="NM" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="NM") echo "selected";?>>New Mexico</option>
			<option value="NY" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="NY") echo "selected";?>>New York</option>
			<option value="NC" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="NC") echo "selected";?>>North Carolina</option>
			<option value="ND" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="ND") echo "selected";?>>North Dakota</option>
			<option value="OH" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="OH") echo "selected";?>>Ohio</option>
			<option value="OK" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="OK") echo "selected";?>>Oklahoma</option>
			<option value="OR" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="OR") echo "selected";?>>Oregon</option>
			<option value="PA" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="PA") echo "selected";?>>Pennsylvania</option>
			<option value="RI" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="RI") echo "selected";?>>Rhode Island</option>
			<option value="SC" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="SC") echo "selected";?>>South Carolina</option>
			<option value="SD" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="SD") echo "selected";?>>South Dakota</option>
			<option value="TN" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="TN") echo "selected";?>>Tennessee</option>
			<option value="TX" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="TX") echo "selected";?>>Texas</option>
			<option value="UT" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="UT") echo "selected";?>>Utah</option>
			<option value="VT" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="VT") echo "selected";?>>Vermont</option>
			<option value="VA" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="VA") echo "selected";?>>Virginia</option>
			<option value="WA" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="WA") echo "selected";?>>Washington</option>
			<option value="WV" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="WV") echo "selected";?>>West Virginia</option>
			<option value="WI" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="WI") echo "selected";?>>Wisconsin</option>
			<option value="WY" <?php if (isset($_POST["r_list"]) && $_POST["r_list"]=="WY") echo "selected";?>>Wyoming</option>
			</select></td>
		</tr>
		<tr>
			<td>Degree:*</td><td><input type="radio" name="r_deg" value="us" checked />Farenheit<input type="radio" name="r_deg" value="si" <?php if (isset($_POST["r_deg"]) && $_POST["r_deg"]=="si") echo "checked";?> />Celsius</td>
		</tr>
		<tr>
			<td></td><td><input type="button" value="Search" name="form_search" onclick="vaildate_form()" /><input type="button" value="Clear" onclick="clear_field()" name="r_clr" style="margin-left: 8px;" /></td>
		</tr>
	</table>
	<i>*-Mandatory Fields.</i><br />
	<a href="http://forecast.io/">Powered by Forecast.io</a>

	</div>

	<input type="hidden" name="validate" value="f" />	
	</form>
	
<?php
	if(isset($_POST["validate"]))
	{
		$p_ser=$_POST["validate"];
		if($p_ser=="t" && $p_flag=="true")
		{

			echo "<br />";		
			echo "<div id='result'><div>";
			echo "<span id='summary'>".$p_summary."</span><br />";
			
			if($p_unit=="us")
				echo "<span id='summary'>".$p_temper."&deg; F</span><br />";
			else
				echo "<span id='summary'>".$p_temper."&deg; C</span><br />";
			
			echo "<span id='summary'><img id='main_image' src='images/".$p_image."' title='".$img_tip."' alt='".$img_tip."' /></span><br />";
			echo "<table id='main_content'>";
			echo "<tr><td>Precipitation:</td><td>".$p_preci_dis."</td></tr>";
			echo "<tr><td>Chance of Rain:</td><td>".$p_rain."%</td></tr>";
			
			if($p_unit=="us")
			echo "<tr><td>Wind Speed:</td><td>".$p_windspeed." mph</td></tr>";
			else
			echo "<tr><td>Wind Speed:</td><td>".$p_windspeed." mps</td></tr>";
			
			if($p_unit=="us")
				echo "<tr><td>Dew Point:</td><td>".$p_dewp."&deg; F</td></tr>";
			else
				echo "<tr><td>Dew Point:</td><td>".$p_dewp."&deg; C</td></tr>";
			
			echo "<tr><td>Humidity:</td><td>".$p_humid."%</td></tr>";
			
			if($p_unit=="us")
			echo "<tr><td>Visibility:</td><td>".$p_visi." mi</td></tr>";
			else
			echo "<tr><td>Visibility:</td><td>".$p_visi." km</td></tr>";
				
			date_default_timezone_set("$p_time");
			$p_rise = new DateTime("@$p_sunrise");  // convert UNIX timestamp to PHP DateTime
			$p_rise->setTimezone(new DateTimeZone("$p_time"));
			echo "<tr><td>Sunrise:</td><td>".$p_rise->format('h:i A');
			echo "</td></tr>";
			
			$p_set = new DateTime("@$p_sunset");  // convert UNIX timestamp to PHP DateTime
			$p_set->setTimezone(new DateTimeZone("$p_time"));
			echo "<tr><td>Sunset:</td><td>".$p_set->format('h:i A');
			echo "</td></tr></table></div></div>";
		}
		elseif($p_flag=="false")
		{	
		echo "<script>alert('Please enter a valid input!!!');clear_field();</script>";
		$p_flag="true";
		}
	}
?>	
</body>
</html>
