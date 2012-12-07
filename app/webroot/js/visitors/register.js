$(document).ready(function(){
	$('#username').tooltip({
		'trigger':'hover',
		'title':'Alphanumeric, Dashes(-), Period(.) and Underscore(_) only',
		'placement':'right'
	});
	$('#name').tooltip({
		'trigger':'hover',
		'title':'Alphanumeric, Spaces, and Period(.) only',
		'placement':'right'
	});
	$('#phone').tooltip({
		'trigger':'hover',
		'title':'Digits, Spaces, Dashes(-), and Curly Brackets only ()',
		'placement':'right'
	});
})

function validate_register(){
	$('input').removeClass('input_required');
	var go_ahead = true;
	var username = $('#username').val();
	var password = $('#password').val();
	var confirm_password = $('#confirm_password').val();
	var full_name = $('#name').val();
	var phone = $('#phone').val();
	var email = $('#email').val();
	var address = $('#address').val();
	if(!reg_username(username)){
		go_ahead = false;
		$('#username').addClass('input_required');
		console.log('username wrong');
	}
	if(!(password == confirm_password)){
		go_ahead = false;
		$('#password').addClass('input_required');
		$('#confirm_password').addClass('input_required');
		alert('Passwords Do not Match');
	}

	if(go_ahead){
		return true;
	}else{
		return false;
	}
}