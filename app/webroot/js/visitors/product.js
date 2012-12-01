$(document).ready(function(){
	$('input.dimension_input').hover(
		function(){
			console.log('clicked!');
			var max = $(this).attr('dimension-max');
			var min = $(this).attr('dimension-min');
			var incr = $(this).attr('dimension-increment');
			var def = $(this).attr('dimension-default');
			var type = $(this).attr('dimension-type');
			var options = {
				'trigger':'hover',
				'content': 'Maximum: '+max+'<br>Minimum: '+min+'<br>Increment: '+incr,
				'title': type+(' (Numbers Only)')
			};
			$(this).popover(options);
			$(this).popover('show');
		},
		function(){
			$(this).popover('hide');
		}
	);

	var options = {
		'trigger':'hover',
		'content':'Characters only, No Symbols or Special Characters',
		'title'	 :'Please input values'
	};
	$('input.finish_type_select').popover(options);
	$('input.quantity_input').popover(options);

	$('select.finish_dropdown').change(function(){
		var finish_group = 'div.finish_group_'+$(this).attr('data-product');
		var finish_class = 'div.finish_' + $(this).val();
		$(finish_group).children(finish_class).removeClass('hide_div');
		$(finish_group).children(finish_class).find('input').removeAttr('disabled');
		$(finish_group).children().not(finish_class).addClass('hide_div');
		$(finish_group).children().not(finish_class).children('input').attr('disabled','disabled');
		$('select.finish_dropdown').not($(this)).val($(this).val());
	});
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
			console.log(validate);
			var intRegex = /^[\d]+$/i;
			var strRegex = /^[\w]+$/i;
			if(validate == 'int'){
				if(intRegex.test(check_value) == false){
					$(this).addClass('input_required');
					submit = false;
				}else{
					$(this).removeClass('input_required');
				}
			} else if(validate == 'str'){
				if(strRegex.test(check_value) == false){
					$(this).addClass('input_required');
					submit = false;
				}else{
					$(this).removeClass('input_required');
				}
			}
		}
	});
	if(submit == true){
		console.log('everything green!');
		console.log('div#product_'+p_id);
		$.post('cart_add',$('form#product_'+p_id).serialize(),function(data){
			console.log(data);
		});
	}else{
		console.log('missing?');
	}
}