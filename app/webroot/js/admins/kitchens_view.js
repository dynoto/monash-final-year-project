$(document).ready(function(){
    var screen_height = $(window).height();
    $('tr.image_column > td > img').each(function(){
    	var old_height = $(this).height();
    	$(this).height(screen_height*old_height);
    	//$(this).height(screen_height)
    });
    $('tr.image_column').hide();
});

function show_hide_image(kitchen_id){
    $('tr.image_column#'+kitchen_id).toggle();
    return false;
}