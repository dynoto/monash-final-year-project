$(document).ready(function(){
	$('input.delete_checkbox').click(function(){
		console.log('clicked');
		console.log($(this).val());
		if($(this).is(':checked')){
			hide_position($(this).val());
		}else{
			show_position($(this).val());
		}
	});
});

function hide_position(id){
	console.log('hidden');
	var el = $('#image_'+id);
	el.attr('disabled','disabled');
	$('#hidden_'+id).attr('disabled','disabled');
	el.hide();
}

function show_position(id){
	console.log('shown');
	var el = $('#image_'+id);
	el.removeAttr('disabled');
	$('#hidden_'+id).removeAttr('disabled');
	el.show();
}