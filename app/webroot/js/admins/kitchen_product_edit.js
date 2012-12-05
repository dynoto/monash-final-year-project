$(document).ready(function(){
	$('a:not(.disableprompt)').click(function(){
		console.log('test');
		var r = confirm('Unsubmitted changes will be lost.\nAre you sure you wanted to do this? \npress YES to confirm or CANCEL to continue editing');
		if (r == true) {
			return true;
		}else{
			return false;
		}
	});

	var screen_height = $(window).height();
    $('tr.image_column > td > img').each(function(){
    	var old_height = $(this).height();
    	$(this).height(screen_height*old_height);
    	//$(this).height(screen_height)
    });
    $('tr.image_column').hide();
    $('input.dimension_input').tooltip({
    	'trigger':'hover',
    	'title':'numbers only'
    });

    $('input.name_input').tooltip({
    	'trigger':'hover',
    	'title':'No Symbols, Alphanumeric Characters Only'
    });
});

function show_hide_image(image_id){
    $('tr.image_column#'+image_id).toggle();
    return false;
}

function validate_fields(){
	var submit = true;
	$('input.dimension_input').removeClass('input_required');
	$('input.dimension_input').each(function(){
		this_val = $(this).val()
		if(reg_int(this_val)==false && this_val!==''){
			submit = false;
			$(this).addClass('input_required');
			console.log('characters detected');
		}
	});

	var name_input = $('input.name_input').val();
	if(reg_name(name_input) == false){
		submit = false;
		$('input.name_input').addClass('input_required');
		console.log('prod name error');
	}

	$('tr.dimension_row').each(function(){
		var min = $(this).find('input.min');
		var min_val = parseInt(min.val());
		console.log(min_val);
		var max = $(this).find('input.max');
		var max_val = parseInt(max.val());
		console.log(max_val);
		var incr = $(this).find('input.increment');
		var incr_val = parseInt(incr.val());
		console.log(incr_val);
		var def = $(this).find('input.default');
		var def_val = def.val();
		console.log(def_val);
		if((min_val !== '') || (max_val !== '') || (incr_val !== '')){
			console.log(def_val);
			if(min_val > max_val){
				min.addClass('input_required');
				max.addClass('input_required');
				submit = false;
				console.log('too small');
			}
			if((max_val-min_val) < incr_val){
				min.addClass('input_required');
				max.addClass('input_required');
				incr.addClass('input_required');
				submit = false;
				console.log('incr too big');
			}
			if(def_val <= min_val){
				min.addClass('input_required');
				def.addClass('input_required');
				console.log('default value not matched');
				submit = false;
			}
			if(def_val >= max_val){
				max.addClass('input_required');
				def.addClass('input_required');
				console.log('default value not matched');
				submit = false;
			}
		}
	});
	return submit;
}