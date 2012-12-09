function postLink(id){
	console.log('test postlink');
	var conf = confirm("Do you want to delete this item?");
	if(conf){
		$.post(id, function(data){
			console.log(data);
			location.reload();
		});
	}
}