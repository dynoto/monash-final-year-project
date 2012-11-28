function verify(){
	var name = $('input#EnquiryName').val();
	var phone = $('input#EnquiryPhone').val();
	var email = $('input#EnquiryEmail').val();

	console.log(phone);
	console.log(email);
	if(email || phone){
		console.log('one haz something');
	}
	var emailRegex = /[\w\.\_\-]*[\@][\w]+[\.][\w\.]+/i;
	var phoneRegex = /[\d\s\-\(\)]*/i;
	if ((phone != null) || (email != null)) {};

	return false;
}