function postLink(id){
	console.log('test postlink');
	$.post(id, function(data){
		console.log(data);
		location.reload();
	});
}