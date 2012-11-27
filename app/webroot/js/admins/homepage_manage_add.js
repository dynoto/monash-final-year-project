$(document).ready(function(){
	var id = $('select.kitchen_list').val();
	$('label:not(.kitchen_'+id+')').hide();

	$('select.kitchen_list').change(function(){
		console.log('fired');
		var id = $(this).val();
		console.log(id);
		$('label.kitchen_'+id).show();
		$('label:not(.kitchen_'+id+')').hide();
	});

	$('input.select_image_checkbox').change(function(){
		var parent_label = $(this).parents('label');
		if(this.checked){
			parent_label.appendTo('td.checked_td');
			parent_label.addClass('no-hide');

		}else{
			parent_label.appendTo('td.unchecked_td');
			parent_label.removeClass('no-hide');
		}
	});
});