function verify(){
	var name = $('input#EnquiryName')
	var phone = $('input#EnquiryTelephone')
	var email = $('input#EnquiryEmail')
	var emailRegex = /^[\w\.\_\-]+[\@][\w]+[\.][\w\.]+$/i;
	var phoneRegex = /^[\d\s\-\(\)]+$/i;
	var emailR = emailRegex.test(email.val());
	var phoneR = phoneRegex.test(phone.val());
	console.log('phone :'+phoneR);
	console.log('email :'+emailR);
	console.log(emailR && phoneR);
	if(emailR && phoneR){
		console.log('both correct');
		return true;
	}else if(emailR){
		console.log('email only, true');
		phone.val('-');
		return true;
	}else if(phoneR){
		console.log('phone only, true');
		email.val('-');
		return true;
	}
	else{
		alert('email or phone number is wrong, please check again');
		return false;
	}
}