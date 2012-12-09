$(document).ready(function(){
	$('p.alertmsg').hide();
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
	$('p.alertmsg').hide();
	var submit = true;
	$('input.dimension_input').removeClass('input_required');
	$('input.dimension_input').each(function(){
		this_val = $(this).val()
		if(reg_int(this_val) == false && this_val!==''){
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

	var pass_null = true;
	var def_null = false;
	var non_numeric = false;
	var alertmsg = '';
	var count = 1;
	$('tr.dimension_row').each(function(){
		alertmsg = alertmsg.concat('Line '+count+' ------- <br>');
		var min = $(this).find('input.min');

		var max = $(this).find('input.max');

		// var incr = $(this).find('input.increment');
		// var incr_val = parseInt(incr.val());
		
		var def = $(this).find('input.default');

		if(min.val()!='' && isNaN(min.val())){
			min.addClass('input_required');
			alertmsg = alertmsg.concat('Non Digit Detected in Dimension Input. <br> ');
			submit = false;
		}
		if(max.val()!='' && isNaN(max.val())){
			max.addClass('input_required');
			alertmsg = alertmsg.concat('Non Digit Detected in Dimension Input');
			submit = false;
		}
		if(def.val()!='' && isNaN(def.val())){
			def.addClass('input_required');
			alertmsg = alertmsg.concat('Non Digit Detected in Dimension Input <br> ');
			submit = false;
		}

		if(def.val() == '' && min.val() == '' && max.val() == ''){
			// ALL VALUES ARE BLANK
			def_null = true;

		}else if(def.val() == '' && (min.val() != '' || max.val() != '')){
			//DEFAULT IS BLANK, BUT MIN or MAX IS PRESENT
			submit = false;
			min.addClass('input_required');
			max.addClass('input_required');
			alertmsg = alertmsg.concat('Remove Min and Max if Default is set to NULL <br> ');

		}else if(def.val() != ''){
			if(min.val() != '' && max.val() == ''){
				alertmsg = alertmsg.concat('Maximum has to be filled <br> ');
				max.addClass('input_required');
				submit = false;
			}else if(min.val() == '' && max.val() != ''){
				alertmsg = alertmsg.concat('Minimum has to be filled <br> ');
				min.addClass('input_required');
				submit = false;
			}else{
				if(parseInt(min.val()) > parseInt(max.val())){
					min.addClass('input_required');
					max.addClass('input_required');
					submit = false;
					alertmsg = alertmsg.concat('Minimum is larger than Maximum <br> ');
				}
				if( (parseInt(min.val()) > parseInt(def.val()) ) || (parseInt(max.val()) < parseInt(def.val()))){
					min.addClass('input_required');
					max.addClass('input_required');
					def.addClass('input_required');
					submit = false;
					alertmsg = alertmsg.concat('Default is either Larger than Maximum or Smaller than minimum <br> ');
				}

			}
		}
		count += 1;
	});
	if(def_null && pass_null){
		def_null = confirm('There are empty default dimension fields, are you sure you want to skip them?');
		if(def_null == false){
			submit = false;
		}
	}else if(def_null){
		alertmsg.concat('Default is empty but Minimum Maximum fields are inserted <br> ');
		submit = false;
	}
	if(alertmsg != ''){
		console.log(alertmsg);
		$('p.alertmsg').html(alertmsg);
		$('p.alertmsg').show();
	}
	return submit;
}