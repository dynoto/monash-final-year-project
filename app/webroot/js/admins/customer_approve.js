function validateConfirm(approve){
	var word = '';
	var bool;
	if (approve == '1'){
		// var abort;
		// $('#CustomerChecked:checked').each(function(){
		// 	var c_id = $(this).val();
		// 	var CustomerTypeId = $('#Customer'+c_id+'CustomerTypeId').val();
		// 	var DiscountId = $('#Customer'+c_id+'DiscountId').val();
		// 	if(CustomerTypeId == ''){
		// 		console.log(c_id + ': Customer Type blank');
		// 	} else if(DiscountId == ''){
		// 		console.log(c_id + ': Discount blank');
		// 	}
		// });
		word = "APPROVE";
	} else if(approve == '-1'){
		word = "DENY";
	}

	var conf = confirm('are you sure you want to '+word+' these users ?');
	if(conf){
		$("#CustomerApproveBoolean").val(approve);
		return true;
	} else {
		return false;
	}
}