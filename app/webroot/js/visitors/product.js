$(document).ready(function(){
	$('input.dimension_input').hover(
		function(){
			console.log('clicked!');
			var max = $(this).attr('dimension-max');
			var min = $(this).attr('dimension-min');
			var incr = $(this).attr('dimension-increment');
			var def = $(this).attr('dimension-default');
			var options = {
				'content': 'Maximum: '+max+'<br>Minimum: '+min+'<br>Increment: '+incr,
				'title': 'Information'
			};
			$(this).popover(options);
			$(this).popover('show');
		},
		function(){
			$(this).popover('hide');
		}
	);

	$('select.finish_dropdown').change(function(){
		var finish_type = $(this).val();
		console.log('finish_'+finish_type);
		$(this).siblings('div.finish_group').children('div.finish_'+finish_type).removeClass('hide_div');
		$(this).siblings('div.finish_group').children().not('div.finish_'+finish_type).addClass('hide_div');
	});
});