var $jq=jQuery.noConflict();


$jq(document).ready(function() {
	contact.initEventHandlers();
});
var contact = {
	initEventHandlers	: function() {
		/* clicking the submit form */
		$jq('#send').bind('click',function(event){
			$jq('#loader').show();
			setTimeout('contact.ContactFormSubmit()',500);
		});
		/* remove messages when user wants to correct (focus on the input) */
		$jq('.inplaceError',$jq('#ContactForm')).bind('focus',function(){
			var $jqthis 		= $jq(this);
			var $jqerror_elem = $jqthis.next();
			if($jqerror_elem.length)
				$jqerror_elem.fadeOut(function(){$jq(this).empty()});
			$jq('#success_message').empty();	
		});
		/* user presses enter - submits form */
		$jq('#ContactForm input,#ContactForm textarea').keypress(function (e) {
			if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {  
				$jq("#send").click();
				return false;  
			} 
			else  
				return true;  
		});
	},
	ContactFormSubmit	: function() {
		$jq.ajax({
			   type		: 'POST',
			   url		: 'php/contact.php?ts='+new Date().getTime(),
			   dataType	: 'json',
			   data		: $jq('#ContactForm').serialize(),
			   success	: function(data,textStatus){
							  //hide the ajax loader
							  $jq('#loader').hide();
							  if(data.result == '1'){
							      //show success message
								  $jq('#success_message').empty().html('Message sent');
								  //reset all form fields
								  $jq('#ContactForm')[0].reset();	
								  //envelope animation
								  $jq('#envelope').stop().show().animate({'marginTop':'-175px','marginLeft':'-246px','width':'492px','height':'350px','opacity':'0'},function(){
								      $jq(this).css({'width':'246px','height':'175px','margin-left':'-123px','margin-top':'-88px','opacity':'1','display':'none'});
								  });
							  }
							  else if(data.result == '-1'){
								  for(var i=0; i < data.errors.length; ++i ){
								      if(data.errors[i].value!='')
								          $jq("#"+data.errors[i].name).next().html('<span>'+data.errors[i].value+'</span>').fadeIn();
								  }
							  }						  
						  },
			   error	: function(data,textStatus){}
		});
	}  
};