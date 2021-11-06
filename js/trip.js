function validateName(name) {
    const re = /^[a-z ,.'-]+$/i;
    return re.test(String(name).toLowerCase());
}
// When the user clicks on div, open the popup
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

  
function myFunction() {
    var mis_popup = document.getElementById("check_MIS");
    var name_popup = document.getElementById("check_name");
    var age_popup = document.getElementById("check_age");
    var email_popup = document.getElementById("check_email");
    var phone_popup = document.getElementById("check_phone");
    var year_popup = document.getElementById("check_year");

    
    var MIS = document.getElementById("MIS");
    var name = document.getElementById("Name")
    var age = document.getElementById("Age")
    var email = document.getElementById("email")
    var phone = document.getElementById("phone")
    var year = document.getElementById("year")
    if (MIS.value.length == 9 && checkIfStringHasOnlyDigits(MIS.value) == true){
        mis_popup.classList.toggle("hide");
    }
    else{
        mis_popup.classList.toggle("show");
        return false;
    }
    
    
    if (name.value.length > 0 || validateName(name.value) == false){
        name_popup.classList.toggle("show");
        return false;
    }
        //pop up
    int_age = Number(age.value)
    if (checkIfStringHasOnlyDigits(age.value) == false || int_age < 18 || int_age > 22){
        age_popup.classList.toggle("show");
        return false;
    }
        //pop up
    if (validateEmail(email.value) == false){
        email_popup.classList.toggle("show");
        return false;
    }
        //pop up
    if (checkIfStringHasOnlyDigits(phone.value) == false || phone.value.length != 10){
        phone_popup.classList.toggle("show");
        return false;
    }
        //pop up
    int_year = Number(year.value)
    if (year.value.length > 0 && (int_year > 2025 || int_year < 2022)){
        year_popup.classList.toggle("show");
        return false;
    }
}
