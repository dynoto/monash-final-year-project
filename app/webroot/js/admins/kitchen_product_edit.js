$(document).ready(function(){
	$('a:not(.disableprompt)').click(function(){
		console.log('test');
		var r = confirm('Where are you going? unsubmitted changes will be lost.\n Are you sure you wanted to do this?');
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
});

function show_hide_image(image_id){
    $('tr.image_column#'+image_id).toggle();
    return false;
}

function validate_fields(){
	console.log('yup!')
	return false;
}