function verify(){
	var submit = true;
	$('input.quantity_input').each(function(){
		var q_val = $(this).val();
		if(!reg_int(q_val)){
			$(this).addClass('input_required');
			submit = false;
		};
	});
	return submit;
}