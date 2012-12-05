$(document).ready(function(){
	$('input[required="1"]').addClass('input_required_min');
});

function toggle_login(){
	$('div#login_bar_content').slideToggle('fast');
}