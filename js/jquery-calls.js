
$(document).ready(function(){
    $('body').addClass('has-js');
    $('.labelCheck, .labelRadio').click(function(){
        setupLabel();
    });
    setupLabel(); 

	
	$('input:radio').bind('click', function(){
		if ($('input.next:disabled').length > 0) {
			console.log('here');
			$('input.next').removeAttr('disabled');
		}
	});

	function setupLabel() {
	    if ($('.labelCheck input').length) {
	        $('.labelCheck').each(function(){ 
	            $(this).removeClass('cOn');
	        });
	        $('.labelCheck input:checked').each(function(){ 
	            $(this).parent('label').addClass('cOn');
	        });                
	    };
	    if ($('.labelRadio input').length) {
	        $('.labelRadio').each(function(){ 
	            $(this).removeClass('rOn');
	        });
	        $('.labelRadio input:checked').each(function(){ 
	            $(this).parent('label').addClass('rOn');
	        });
	    };
	};
});
