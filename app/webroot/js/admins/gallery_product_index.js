$(document).ready(function(){
	$('button.btn-edit-priority').click(function(){
		$('div.priority-view').hide();
		$('div.priority-edit').removeClass('invisible');
		$('input.btn-submit-priority').removeClass('invisible');
		console.log('clicked!');
	})
});