$(document).ready(function(){
var $carousel_container=("#navigation-container-main");
//alert($("#scrollable").outerHeight()); 549
var item_height=$("#scrollable li").outerHeight();
var top_indent = 0;
var top_value = top_indent; 
//alert(item_height); 
//alert($('#scrollable').css('top'));
$('#up').click(function() {
        //get the right position  
        
		//alert($("#scroll-wrap").height());
		        //slide the item    
		        //slide the item    
		//var lower_limit=$("#scroll-wrap").height()
		//alert(lower_limit);
			
			
			top_indent = (parseInt($('#scrollable').css('margin-top')) - item_height);
			//top_value=top_indent+top_value;
			//alert(top_indent);
			//alert(top_indent);
        $('#scrollable').animate({'margin-top' : top_indent}, 200,function(){
		$('#scrollable li:last-child').after($('#scrollable li:first-child'));
		$('#scrollable').css({"margin-top":top_value});
		});
		
		});
		
	$('#down').click(function() {
        //get the right position            
        
		//alert(lower_limit);
		
		
		//alert(top_indent);
        //slide the item
		top_indent = (parseInt($('#scrollable').css('margin-top')) + item_height);		
        $('#scrollable').animate({'margin-top' : top_indent}, 200,function(){
		$('#scrollable li:first-child').before($('#scrollable li:last-child'));
		$('#scrollable').css({"margin-top":top_value});
		});
		
		});
		
		
	
	$('#up2').click(function() {
        //get the right position  
        
		//alert($("#scroll-wrap").height());
		        //slide the item    
		        //slide the item    
		//var lower_limit=$("#scroll-wrap").height()
		//alert(lower_limit);
			
			
			top_indent = (parseInt($('#scrollable2').css('margin-top')) - item_height);
			//top_value=top_indent+top_value;
			//alert(top_indent);
			//alert(top_indent);
        $('#scrollable2').animate({'margin-top' : top_indent}, 200,function(){
		$('#scrollable2 li:last-child').after($('#scrollable2 li:first-child'));
		$('#scrollable2').css({"margin-top":top_value});
		});
		
		});
		
	$('#down2').click(function() {
        //get the right position            
        
		//alert(lower_limit);
		
		
		//alert(top_indent);
        //slide the item
		top_indent = (parseInt($('#scrollable2').css('margin-top')) + item_height);		
        $('#scrollable2').animate({'margin-top' : top_indent}, 200,function(){
		$('#scrollable2 li:first-child').before($('#scrollable2 li:last-child'));
		$('#scrollable2').css({"margin-top":top_value});
		});
		
		});
		

});