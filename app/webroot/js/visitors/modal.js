$(document).ready(function(){
	Galleria.loadTheme('../js/galleria/themes/classic/galleria.classic.min.js');
	$('div.modal').on('shown',function(){
		var crsl_id = $(this).attr('id');
		console.log(crsl_id);
		$('div#crsl_'+crsl_id).galleria({
			transition:'fade',
			showInfo:false,
			height:450,
			imageCrop:'height'	
		});
	});


	// $('div.crsl').each(function(i){
	// 	var div_id = $(this).attr('id');
	// 	console.log(div_id);
	// 	$(this).galleria({
	// 		transition:'fade',
	// 		showInfo:false,
	// 		height:0.425,
	// 		imageCrop:'height'	
	// 	});
		// Galleria.configure({
			// transition:'fade',
			// showInfo:false,
			// height:0.425,
			// imageCrop:'height'
		// });
		// Galleria.run('div#'+div_id);
	// });
	// $('div.crsl').galleria({
	// 	// transition:'fade',
	// 	// showInfo:false,
	// 	// height:400,
	// 	// imageCrop:'height'
	// });
});