$(document).ready(function(){

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
	}
	if(!(reg_name(full_name))){
		go_ahead = false;
		$('#name').addClass('input_required');
		console.log('name error');
	}
	if((phone != '') && (email != '')){
		if(!(reg_phone(phone))){
			go_ahead = false;
			$('#phone').addClass('input_required');
			console.log('phone error - both');
		}else if(!(reg_email(email))){
			go_ahead = false;
			$('#email').addClass('input_required');
			console.log('email error - both');
		}
	}else if(phone != ''){
		if(!(reg_phone(phone))){
			go_ahead = false;
			$('#phone').addClass('input_required');
			console.log('phone error');
		}
	}else if(email != ''){
		if(!(reg_email(email))){
			go_ahead = false;;
			$('#email').addClass('input_required');
			console.log('email error');
		}
	}

	if(go_ahead){
		return true;
	}else{
		return false;
	}
}