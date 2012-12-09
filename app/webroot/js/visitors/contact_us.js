function verify(){
	var name = $('input#EnquiryName')
	var phone = $('input#EnquiryTelephone')
	var email = $('input#EnquiryEmail')
	var emailR = reg_email(email.val());
	var phoneR = reg_phone(phone.val());
	console.log('phone :'+phoneR);
	console.log('email :'+emailR);
	console.log(emailR && phoneR);

	email.tooltip({
		title:'please input correct email',
		trigger:'manual',
		placement:'right'
	});
	phone.tooltip({
		title:'please input correct phone number',
		trigger:'manual',
		placement:'right',
	});

	if(email.val() != '' && phone.val() != '' ){
		if(emailR && phoneR){
			console.log('both correct');
			return true;
		}else{
			if(emailR != true){
				email.tooltip('show');
				phone.tooltip('hide');
			}
			if(phoneR != true){
				phone.tooltip('show');
				email.tooltip('hide');
			}
			return false;
		}
	}else if(email.val() != '' && phone.val() == ''){
		if(emailR){
			console.log('email only, true');
			return true;
		}else{
			email.tooltip('show');
			return false;
		}
	}else if(email.val() == '' && phone.val() != ''){
		if(phoneR){
			console.log('phone only, true');
			return true;
		}else{
			phone.tooltip('show');
			return false;
		}
	}else{
		alert('email or phone number is wrong, please check again');
		return false;
	}
}