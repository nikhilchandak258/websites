
function get_preci(p_preci,p_unit)
{
	if(p_unit=="si")
		p_preci=p_preci*0.03937;
	if(p_preci>=0 && p_preci<0.002)
		p_preci_dis="None";
	else if(p_preci>=0.002 && p_preci<0.017)
		p_preci_dis="Very Light";
	else if(p_preci>=0.017 && p_preci<0.1)
		p_preci_dis="Light";
	else if(p_preci>=0.1 && p_preci<0.4)
		p_preci_dis="Moderate";
	else if(p_preci>=0.4)
		p_preci_dis="Heavy";
	
	return p_preci_dis; 
		
}

/*function convert_date(time)
{
	var date = new Date(time*1000);
    // Hours part from the timestamp
    var hours = date.getHours();
	h = h<10?"0"+h:h;
    // Minutes part from the timestamp
	var m = date.getMinutes();
	m = m<10?"0"+m:m;
	var dd = "AM";
    var h = hours;
    if (h >= 12) {
        h = hours-12;
        dd = "PM";
    }
	h = h<10?"0"+h:h;
	var op =h+':'+m+' '+dd;
	return op;
}*/

function convertTimeZone1(time, zone) {
	var date = new Date(time*1000);
    var format = 'hh:mm A';
    return moment.tz(date,zone).format(format);
}

function convertTimeZoneWeek(time, zone) {
	var date = new Date(time*1000);
    var format = 'dddd';
    return moment.tz(date,zone).format(format);
}

function convertTimeZoneDate(time, zone) {
	var date = new Date(time*1000);
    var format = 'MMM D';
    return moment.tz(date,zone).format(format);
}

function share_fb(p_icon,p_city,p_state,p_temper)
{
	var fb_img='http://cs-server.usc.edu:45678/hw/hw8/images/'+p_icon;
	var fb_title='Current Weather in '+p_city+','+p_state;
	var fb_temp=p_temper;
FB.ui(
  {
    method: 'share',
	href: 'http://forecast.io/',
	picture: fb_img,
	title: fb_title,
	caption: 'WEATHER INFORATION FROM FORECAST.IO',
	description: fb_temp
	

  },
  // callback
  function(response) {
    if (response && !response.error_message) {
      alert('Posting Successfully');
    } else {
      alert('Not Posted');
    }
  }
);
}

function create_map(p_lat,p_long){
	//var lonlat = new OpenLayers.LonLat(0, 0);

				var map = new OpenLayers.Map("basicMap");
				// Create OSM overlays
				var mapnik = new OpenLayers.Layer.OSM();
				
				 
				var layer_cloud = new OpenLayers.Layer.XYZ(
					"clouds",
					"http://${s}.tile.openweathermap.org/map/clouds/${z}/${x}/${y}.png",
					{
						isBaseLayer: false,
						opacity: 0.7,
						sphericalMercator: true
					}
				);

				var layer_precipitation = new OpenLayers.Layer.XYZ(
					"precipitation",
					"http://${s}.tile.openweathermap.org/map/precipitation/${z}/${x}/${y}.png",
					{
						isBaseLayer: false,
						opacity: 0.7,
						sphericalMercator: true
					}
				);

				
		 
				map.addLayers([mapnik, layer_precipitation, layer_cloud]);
				//map.addLayers([mapnik]);
				var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
				var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
				var position       = new OpenLayers.LonLat(p_long,p_lat).transform( fromProjection, toProjection);
				var zoom           = 9; 

				map.setCenter(position, zoom );
				
				//map.setCenter(new OpenLayers.LonLat("100","34"), 5);		
				//document.getElementById("basicMap").innerHTML = "";
}

function get_image(p_icon)
{
	
	 if(p_icon=="clear-day")
		{p_image="clear.png";img_tip="Clear Day";}
	 else if(p_icon=="clear-night")
		{p_image="clear_night.png";img_tip="Clear Night";}
	 else if(p_icon=="rain")
		{p_image="rain.png";img_tip="Rain";}
	 else if(p_icon=="snow")
		{p_image="snow.png";img_tip="Snow";}
	 else if(p_icon=="sleet")
		{p_image="sleet.png";img_tip="Sleet";}
	 else if(p_icon=="wind")
		{p_image="wind.png";img_tip="Wind";}
	 else if(p_icon=="fog") 
		{p_image="fog.png";img_tip="Fog";}
	 else if(p_icon=="cloudy")
		{p_image="cloudy.png";img_tip="Cloudy";}
	 else if(p_icon=="partly-cloudy-day")
		{p_image="cloud_day.png";img_tip="Cloudy Day";}
	 else if(p_icon=="partly-cloudy-night")
		{p_image="cloud_night.png";img_tip="Cloudy night";}
	var r_concate="<image class='img-responsive' id='current_image' src='images/"+p_image+"' title='"+img_tip+"' alt='"+img_tip+"' />";
	return r_concate;	
	
}

function get_image_fb(p_icon)
{
	
	 if(p_icon=="clear-day")
		{p_image="clear.png";img_tip="Clear Day";}
	 else if(p_icon=="clear-night")
		{p_image="clear_night.png";img_tip="Clear Night";}
	 else if(p_icon=="rain")
		{p_image="rain.png";img_tip="Rain";}
	 else if(p_icon=="snow")
		{p_image="snow.png";img_tip="Snow";}
	 else if(p_icon=="sleet")
		{p_image="sleet.png";img_tip="Sleet";}
	 else if(p_icon=="wind")
		{p_image="wind.png";img_tip="Wind";}
	 else if(p_icon=="fog") 
		{p_image="fog.png";img_tip="Fog";}
	 else if(p_icon=="cloudy")
		{p_image="cloudy.png";img_tip="Cloudy";}
	 else if(p_icon=="partly-cloudy-day")
		{p_image="cloud_day.png";img_tip="Cloudy Day";}
	 else if(p_icon=="partly-cloudy-night")
		{p_image="cloud_night.png";img_tip="Cloudy night";}
	//var r_concate="<image class='img-responsive' id='current_image' src='images/"+p_image+"' title='"+img_tip+"' alt='"+img_tip+"' />";
	return p_image;	
	
}


function clear_field(){

document.f1.street.value="";
document.f1.city.value="";
var ele = document.getElementsByName("unit");
//for(var i=0;i<ele.length;i++)
ele[0].checked = true;
document.getElementById("state").selectedIndex = "0";
//document.getElementById("form1").submit();
document.getElementById("street-error").value="";
}	

jQuery("#reset").click(function() {
jQuery("#ip_main").validate.resetForm();
});

jQuery.validator.addMethod( 
  "selectNone", 
 function(value, element) { 
	if (element.value == "") 
	{ 
	return false; 
	} 
	else return true; 
	}, 
	"Please select an option." 
	);
	
jQuery.validator.addMethod( 
  "spaceNone", 
 function(value, element) { 
	if (element.value.trim() == "") 
	{ 
	return false;
	} 
	else return true; 
	}, 
	"" 
	);
	
	var x_validate = '';

$().ready(function(){
	x_validate = $("#ip_main").validate({
		rules: {
			street: {required: true,
					spaceNone: true
					},
			city: {required: true,
					spaceNone: true
					},
			state: { 
					selectNone: true 
					} 
		},
		messages: {
			street: "Please enter the street address",
			city: "Please enter the city name",
			state: "Please select a state"
			
		},
		

		submitHandler: function(form) {
			
			var p_street=$("#street").val();
			var p_city=$("#city").val();
			var p_state=$("#state").val();
			var p_degree=document.f1.unit.value;
			$.ajax({  
			type: 'GET',  
			url: 'retrieve.php',
			dataType: 'json',
			data:{ text1: p_street, text2: p_city, text3: p_state, text4: p_degree},
			success: function(response)
			{

				$("body").css("overflow", "visible");
				document.getElementById("basicMap").innerHTML = "";
				p_unit=document.f1.unit.value;
				console.log(p_unit);

				//Tab 1 Content Display
				var p_json=jQuery.parseJSON(response);
				var p_lat=p_json.latitude;
				var p_long=p_json.longitude;
				var p_summary=p_json.currently.summary;
				
				var p_temper=parseInt(p_json.currently.temperature);
				var p_icon=p_json.currently.icon;
				var p_preci=p_json.currently.precipIntensity;
				var p_rain=100*(p_json.currently.precipProbability);
				var p_windspeed=parseInt(p_json.currently.windSpeed);
			
				var p_dewp=parseInt(p_json.currently.dewPoint);
				var p_humid=parseInt(100*(p_json.currently.humidity));
				var p_visi=parseInt(p_json.currently.visibility);
				
				if(typeof p_visi ==="undefined" || p_visi==null || p_visi=='')
					p_visi="N/A ";
				
				var p_sunrise=p_json.daily.data[0].sunriseTime;
				var p_sunset=p_json.daily.data[0].sunsetTime;
				var p_time=p_json.timezone;
				
				var p_tempmin=parseInt(p_json.daily.data[0].temperatureMin);
				var p_tempmax=parseInt(p_json.daily.data[0].temperatureMax);
				
				var fb_image=get_image_fb(p_icon);
				var d_tab1_image=get_image(p_icon);
				var p_forc="";
				if(p_unit=="us")
					p_forc="F";
				else
					p_forc="C";	
				var d_tab1_temp='<span style="font-size: 15px;font-weight: 700;">'+p_summary+' in '+p_city+', '+p_state+'</span><br /><span style="font-size: 60px;">'+p_temper+'</span><span style="margin-top: 16px;position: absolute;font-size: 16px;">&deg; '+p_forc+'</span><br /><span style="color: blue;margin-left: 45px;">L:'+p_tempmin+'&deg;</span> <span style="color:black">|</span> <span style="color: green">H:'+p_tempmax+'&deg;</span>';
				d_tab1_temp=d_tab1_temp+'<button id="fb_share_button" onclick="share_fb(\''+fb_image+'\',\''+p_city+'\',\''+p_state+'\',\''+p_temper+'&deg;'+p_forc+'\')"><img src="images/fb_icon.png" style="width:35px" /></button>';
				
				var d_tab1='<table class="table table-striped" style="border:0px">';
				d_tab1=d_tab1+'<tr><td>Precipitation</td><td>'+get_preci(p_preci,p_unit)+'</td></tr>';
				d_tab1=d_tab1+'<tr class="danger"><td>Chance of Rain</td><td>'+p_rain+'</td></tr>';
				if(p_unit=="us")
				{	
				d_tab1=d_tab1+'<tr><td>Wind Speed</td><td>'+p_windspeed+' mph</td></tr>';
				d_tab1=d_tab1+'<tr class="danger"><td>Dew Point</td><td>'+p_dewp+'&deg; F</td></tr>';							
				d_tab1=d_tab1+'<tr><td>Humidity</td><td>'+p_humid+'%</td></tr>';
				d_tab1=d_tab1+'<tr class="danger"><td>Visibility</td><td>'+p_visi+' mi</td></tr>';
				}
				else
				{
				d_tab1=d_tab1+'<tr><td>Wind Speed</td><td>'+p_windspeed+'m/s</td></tr>';
				d_tab1=d_tab1+'<tr class="danger"><td>Dew Point</td><td>'+p_dewp+'&deg; C</td></tr>';							
				d_tab1=d_tab1+'<tr><td>Humidity</td><td>'+p_humid+'%</td></tr>';
				d_tab1=d_tab1+'<tr class="danger"><td>Visibility</td><td>'+p_visi+' km</td></tr>';	
				}	
				
				d_tab1=d_tab1+'<tr><td>Sunrise</td><td>'+convertTimeZone1(p_sunrise,p_time)+'</td></tr>';
				d_tab1=d_tab1+'<tr class="danger"><td>Sunset</td><td>'+convertTimeZone1(p_sunset,p_time)+'</td></tr></table>';
							
				//Map generation
				//Center of map
				try{
				create_map(p_lat,p_long);
				}
				catch(err){
					console.log(err.msg);
				}
				
				
			   
				$('#d_image').html(d_tab1_image);
				$('#d_temp_fb').html(d_tab1_temp);
				$('#d_current').html(d_tab1);
				
				
				
				//Tab 2 Content generation
				var d_tab2='<table class="table" id="table_next24">';
				d_tab2=d_tab2+'<tr><th>Time</th><th>Smmary</th><th>Cloud Cover</th><th>Temp(&deg;'+p_forc+')</th><th>View Details</th></tr>';
				
				for (i=1;i<25;i++)
				{
					var h_time=p_json.hourly.data[i].time;
					var h_icon=p_json.hourly.data[i].icon;
					var h_cloud=parseInt(100*(p_json.hourly.data[i].cloudCover));
					var h_temp=p_json.hourly.data[i].temperature;
					
					
					
					var h_wind=p_json.hourly.data[i].windSpeed;
					var h_humid=parseInt(100*(p_json.hourly.data[i].humidity));
					var h_visi=p_json.hourly.data[i].visibility;
					
				    if(typeof h_visi ==="undefined"  || h_visi==null || h_visi=='')
						h_visi="N/A ";
					
					var h_pressure=p_json.hourly.data[i].pressure;		
					
			

					
					d_tab2=d_tab2+'<tr><td>'+convertTimeZone1(h_time,p_time)+'</td>';
					d_tab2=d_tab2+'<td>'+get_image(h_icon)+'</td>';
					d_tab2=d_tab2+'<td>'+h_cloud+'</td>';
					d_tab2=d_tab2+'<td>'+h_temp+'</td>';
					d_tab2=d_tab2+'<td><button style="color:#2e6da4;background-color:#ffffff;border:0px" type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo'+(i+1)+'"><span class="glyphicon glyphicon-plus"></span></button></td></tr>';
					
					
					d_tab2=d_tab2+'<tr><td style="background-color:#f0f0f0;padding:0px;border-top: 0px;" colspan="5" class="hiddenRow"><div id="demo'+(i+1)+'" class="collapse"><table class="table" id="inner_table_next24"><tr><th>Wind</th><th>Humidity</th><th>Visibility</th><th>Pressure</th></tr>';
					
					if(p_unit=="us")
					{
					d_tab2=d_tab2+'<tr><td>'+h_wind+'mph</td>';
					d_tab2=d_tab2+'<td>'+h_humid+'%</td>';
					d_tab2=d_tab2+'<td>'+h_visi+'mi</td>';
					d_tab2=d_tab2+'<td>'+h_pressure+'mb</td></tr></table></div></td></tr>';
					}
					else
					{	
					d_tab2=d_tab2+'<tr><td>'+h_wind+'m/s</td>';
					d_tab2=d_tab2+'<td>'+h_humid+'%</td>';
					d_tab2=d_tab2+'<td>'+h_visi+'km</td>';
					d_tab2=d_tab2+'<td>'+h_pressure+'hPa</td></tr></table></div></td></tr>';
					}
					//d_tab2=d_tab2+'<tr><td>'++'</td></tr>';
					
				}
				d_tab2=d_tab2+'</table>';
				$('#nxt24').html(d_tab2);

				//tab 3 content
				var d_tab3="";
				for(i=1;i<8;i++)
				{
					var w_time=p_json.daily.data[i].time;
					var w_icon=p_json.daily.data[i].icon;
				
				
					var w_tempmin=parseInt(p_json.daily.data[i].temperatureMin);
					var w_tempmax=parseInt(p_json.daily.data[i].temperatureMax);
					var w_sunrise=p_json.daily.data[i].sunriseTime;
					var w_sunset=p_json.daily.data[i].sunsetTime;
					var w_summary=p_json.daily.data[i].summary;
					var w_wind=p_json.daily.data[i].windSpeed;
					var w_humid=parseInt(100*(p_json.daily.data[i].humidity));
					
					var w_visi=p_json.daily.data[i].visibility;
					if(typeof w_visi ==="undefined"  || w_visi==null || w_visi=='')
						w_visi="N/A ";
					
					var w_pressure=p_json.daily.data[i].pressure;	
					var w_day=convertTimeZoneWeek(w_time,p_time);
					var w_date=convertTimeZoneDate(w_time,p_time);
					var w_image=get_image(w_icon);	
					
					d_tab3=d_tab3+'<a href="#" data-toggle="modal" class="popup7" data-target="#day'+i+'"><div id="week_day'+i+'" class="col-sm-2" style="text-align:center">';
					d_tab3=d_tab3+w_day+'<br />'+w_date+'<br />'+w_image+'<br />Min<br />Temp<br /><span style="font-size: 35px">'+w_tempmin+'&deg;</span><br />Min<br />Temp<br /><span style="font-size: 35px">'+w_tempmax+'&deg;</span></div></a>';
					
					d_tab3=d_tab3+'<div class="modal fade" id="day'+i+'" role="dialog" style="color:black"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button>';
					d_tab3=d_tab3+'<h4 class="modal-title"><b>Weather in '+p_city+' on '+w_date+'</b></h4></div>';
					d_tab3=d_tab3+'<div class="modal-body"><center>'+w_image+'<br /><span style="font-size:25px"><b>'+w_day+': </span><span style="color:#FEA401;font-size:25px">'+w_summary+'</b></span><br />';
					d_tab3=d_tab3+'<table class="table" id="popup_table_next7" style="text-align:center"><tr><td><b>Sunrise Time</b></td><td><b>Sunset Time</b></td><td><b>Humidity</b></td></tr>';
					d_tab3=d_tab3+'<tr><td>'+convertTimeZone1(w_sunrise,p_time)+'</td><td>'+convertTimeZone1(w_sunset,p_time)+'</td><td>'+w_humid+'%</td></tr>';
					d_tab3=d_tab3+'<tr><td><b>Wind Speed</b></td><td><b>Visibility</b></td><td><b>Pressure</b></td></tr>';
					
					if(p_unit=="us")
					d_tab3=d_tab3+'<tr><td>'+w_wind+'mph</td><td>'+w_visi+'mi</td><td>'+w_pressure+'mb</td></tr></table>';
					else
					d_tab3=d_tab3+'<tr><td>'+w_wind+'m/s</td><td>'+w_visi+'km</td><td>'+w_pressure+'hPa</td></tr></table>';
					
				
					d_tab3=d_tab3+'</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';

          
        
          
        					
				}
				
				
				
				$('#nxt7_content').html(d_tab3);
				//$('#map').html(map);
				$("#tabs").css("visibility", "visible");
			}
			});
		}
	});
	
	



});

	function clear_form(){
		//alert("test");
	x_validate.resetForm();
	$("#tabs").css("visibility", "hidden");
	$("body").css("overflow", "hidden");
	document.getElementById("nxt24").innerHTML = "";
	document.getElementById("d_current").innerHTML = "";
	document.getElementById("basicMap").innerHTML = "";
	}

	





