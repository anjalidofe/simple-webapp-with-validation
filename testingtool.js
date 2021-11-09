function validateName(name) {
    const re = /^[a-z ,.'-]+$/i;
    return re.test(String(name).toLowerCase());
}

//function to test only first name
function valid_name(name) {
	var regName = /^[a-zA-Z]+$/;
    if(!regName.test(name)){
        console.log('Please enter first name only.');
        return false;
    }else{
        console.log('Valid name given.');
        return true;
    }
}

//function to test full name
function validate_fullname(name){
    var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
    if(!regName.test(name)){
        console.log('Please enter your full name (first & last name).');
        return false;
    }else{
        console.log('Valid name given.');
        return true;
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

//function to test if email is valid
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

//function to check whether mis is valid
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

//function to check if Age is valid also, in terms of age of college student hence more constraints
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

//function to check if phone number is valid
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

//function to check if graduation year is valid, considering current scenario 2022 to 2025 are valid for current batch students
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

//checking if passport number is valid
function checkPassport(passportNum){
    const re = /^[A-Z]{1}[0-9]{7}$/;
    return re.test(String(passportNum));
}

//checking if bloodgroup is valid
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

//TESTING SAMPLE CASES
console.log("Sample test cases for Bloodgroup\n")
//for bloodgroup
console.log("A+")
if (valid_bg("A+") == false){
	console.log("FAILED TEST CASE")
}
else{
	console.log("TEST CASE PASSED")
}

console.log()

console.log("AP")
if (valid_bg("AP") == false){
	console.log("FAILED TEST CASE")
}
else{
	console.log("TEST CASE PASSED")
}

console.log("\n\n")

console.log("Sample test cases for names\n")
//for name
console.log("Anjali")
if (valid_name("Anjali") == false){
	console.log("FAILED TEST CASE")
}
else {
	console.log("TEST CASE PASSED")
}

console.log()
console.log("For full name: ")
console.log("Anjali Dofe")
if (validate_fullname("Anjali Dofe") == false){
	console.log("FAILED TEST CASE")
}
else {
	console.log("TEST CASE PASSED")
}
console.log()
console.log("Anjali.. Dofe")
if (validate_fullname("Anjali.. Dofe") == false){
	console.log("FAILED TEST CASE")
}
else {
	console.log("TEST CASE PASSED")
}

console.log("\n\n")

//for age
console.log("Test cases for Age\n")
if (valid_age("20") == false){
	console.log("FAILED TEST CASE")
}
else {
	console.log("TEST CASE PASSED")
}

console.log()

if (valid_age("30") == false){
	console.log("FAILED TEST CASE")
}
else {
	console.log("TEST CASE PASSED")
}

//checking passport
console.log("\n\n")
console.log("Test cases for Passport Number\n")
if (checkPassport("M9876543") == false){
	console.log("Invalid Passport Number")
	console.log("FAILED TEST CASE")
}
else {
	console.log("Valid Passport Number")
	console.log("TEST CASE PASSED")
}

console.log()

if (checkPassport("M9876ads") == false){
	console.log("Invalid Passport Number")
	console.log("FAILED TEST CASE")
}
else {
	console.log("Valid Passport Number")
	console.log("TEST CASE PASSED")
}
