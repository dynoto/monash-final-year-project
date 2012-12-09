$(document).ready(function(){
	$('input.dimension_input').hover(
		function(){
			var max = $(this).attr('dimension-max');
			var min = $(this).attr('dimension-min');
			// var incr = $(this).attr('dimension-increment');
			var def = $(this).attr('dimension-default');
			var type = $(this).attr('dimension-type');
			var options = {
				'trigger':'hover',
				'content': 'Maximum: '+max+'<br>Minimum: '+min,//+'<br>Increment: '+incr,
				'title': type+(' (Numbers Only)'),
				'placement':'top'
			};
			$(this).popover(options);
			$(this).popover('show');
		},
		function(){
			$(this).popover('hide');
		}
	);

	$('button.close_cart_success').click(function(){
		$('div.add_cart_success').addClass('hide_div');
	})


	var options = {
		'trigger':'hover',
		'content':'Characters only, No Symbols or Special Characters',
		'title'	 :'Please input values',
		'placement':'top'
	};
	//$('input.finish_type_select').popover(options);
	$('input.quantity_input').popover(options);

	$('select.RangeValueSelect').change(function(){
		var selectValue = $(this).val();
		$('select.RangeValueSelect').not($(this)).val(selectValue);
	});

	$('tr.dimension-row').each(function(){
		if($(this).has('label').length == 0){
			$(this).hide();
		}
	})
});

function add_to_cart(p_id){
	var submit = true;
	$('div#product_'+p_id).find('input').not(':disabled').each(function(index){
		var check_value = $(this).val();
		if(check_value == ''){
			$(this).addClass('input_required');
			submit = false;
		}else{
			var validate = $(this).attr('data-v');
			if(validate == 'int'){
				if(reg_int(check_value) == false){
					$(this).addClass('input_required');
					submit = false;
				}else{
					$(this).removeClass('input_required');
				}
			} else if(validate == 'str'){
				if(reg_int(check_value) == false){
					$(this).addClass('input_required');
					submit = false;
				}else{
					$(this).removeClass('input_required');
				}
			}

			if($(this).hasClass('dimension_input')){
				if(validate_size($(this)) == false){
					submit = false;
				}
			}
		}
	});
	if(submit == true){
		$.post('cart_add',$('form#product_'+p_id).serialize(),function(data){
			console.log(data);
			$('div#product_'+p_id).find('input.dimension_input').val('');
			$('div#product_'+p_id).find('input.quantity_input').val('');
			var cart_button = $('div#product_'+p_id).find('button');
			cart_button.tooltip({
				title:"Add to Quote Success!",
				trigger:'manual',
				placement:'right'
			});
			cart_button.tooltip('show');
			var timeout = setTimeout(function() {
				cart_button.tooltip('hide');
			}, 5000);


			
		});
		//$('div.add_cart_success').removeClass('hide_div');
	}else{
		console.log('missing?');
	}
}

function validate_size(elem){
	var min = parseInt(elem.attr('dimension-min'));
	var max = parseInt(elem.attr('dimension-max'));
	var input_size = elem.val();
	if(reg_min_max(input_size,min,max)){
		console.log('pass');
		elem.removeClass('hide_div');
	}else{
		console.log('not pass');
		elem.addClass('input_required');
		return false;
	}
}