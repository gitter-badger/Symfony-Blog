$(document).ready(function(){
	
	$('#clean_btn, #login_btn, #signup_btn').click(function(){
		open_box($(this));
	})
	
	function open_box(e){
		var opened_box_id = $('#header').find('.header_box:visible').attr('id');
		if(opened_box_id != undefined ){
			$('#'+opened_box_id).slideUp('slow');
		}
		if(e.attr('box') != opened_box_id){
			$('#'+e.attr('box')).slideDown('slow');
		}
	}
})

