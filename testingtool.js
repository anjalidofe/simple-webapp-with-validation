function validateName(name) {
    const re = /^[a-z ,.'-]+$/i;
    return re.test(String(name).toLowerCase());
}

function valid_name(name) {
	// var small = ['a','b','c', 'd', 'e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',' '];
	// var up = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',' '];
	for (let i = 0; i < name.length; i++) {
		if (name[i] < 65 || (name[i] > 91 && name[i] < 97) || name[i] >122 ){
			console.log("Invalid Name");
			return false;
		}
		else {
			console.log("Valid Name");
			return true;
		}
	}
}

function checkIfStringHasOnlyDigits(_string) {
    for (let i = _string.length - 1; i >= 0; i--) {
    const codeValue = _string.charCodeAt(i);
    if (codeValue < 48 || codeValue > 57) 
        return false
    }
    return true
}

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function valid_MIS(MIS) {
	if (MIS.length == 9 && checkIfStringHasOnlyDigits(MIS) == true){
        console.log("Valid MIS");
        return true;
    }
    else{
        console.log("Invalid MIS");
        return false;
    }
}

function valid_age(age) {
	int_age = Number(age)
    if (checkIfStringHasOnlyDigits(age) == false || int_age < 18 || int_age > 22){
        console.log("Invalid Age");
        return false;
    }
    else {
    	console.log("Valid Age");
    	return true;
    }
}

function valid_phone(phone) {
	if (checkIfStringHasOnlyDigits(phone) == false || phone.length != 10){
        console.log("Invalid Phone Number");
        return false;
    }
    else {
    	console.log("Valid Phone number");
    	return true;
    }
}

function valid_gradYead(year){
	int_year = Number(year)
    if (year.length > 0 && (int_year > 2025 || int_year < 2022)){
        console.log("Invalid Graduation Year");
        return false;
    }
    else {
    	console.log("Valid Graduation Year");
    	return true;
    }
}

function checkPassport(passportNum){
    const re = /^[A-Z]{1}[0-9]{7}$/;
    return re.test(String(passportNum));
}

function valid_bg(bloodGroup) {
	var bg = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
	 if (bg.includes(bloodGroup) == false){
        console.log("Invalid bloodGroup");
        return false;
    }
    else {
    	console.log("Valid Blood Group");
    	return true;
    }
}

if (valid_bg("A+") == false){
	console.log("FAILED TEST CASE")
}
else{
	console.log("TEST CASE PASSED")
}

console.log("\n")

if (valid_bg("AP") == false){
	console.log("FAILED TEST CASE")
}
else{
	console.log("TEST CASE PASSED")
}

console.log("\n")

if (valid_name("Anjali") == false){
	console.log("FAILED TEST CASE")
}
else {
	console.log("TEST CASE PASSED")
}

