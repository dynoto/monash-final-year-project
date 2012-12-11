function reg_phone(val){
	var regex = /^[\d\s\-\(\)\+]+$/i;
	return test_regex(regex,val);
}

function reg_email(val){
	var regex = /^[\w\.\_\-]+[\@][\w]+[\.][\w\.]+$/i;
	return test_regex(regex,val);
}

function reg_int(val){
	var regex = /^[\d]+$/i;
	return test_regex(regex,val);
}

function reg_str(val){
	var regex = /^[\w]+$/i;
	return test_regex(regex,val);
}

function reg_username(val){
	var regex = /^[\w\.\-\_]+$/i;
	return test_regex(regex,val);
}

function reg_name(val){
	var regex = /^[\w\s\.]+$/i;
	return test_regex(regex,val);
}

function reg_min_max(val,min,max){
	if(reg_int(val) && reg_int(val) && reg_int(max)){
		if((val >= min) && (val <= max)){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

function reg_no_symbol(val){
	var regex = /^[\w\n\_]$/i;
	return test_regex(regex,val);
}

function test_regex(reg_param,val){
	var result = reg_param.test(val);
	return result;
}

function reg_compare(p1,p2){
	if (p1.val() === p2.val()){
		return true;
	}
	else{
		p1.addClass('input_required');
		p2.addClass('input_required');
		return false;
	}
}