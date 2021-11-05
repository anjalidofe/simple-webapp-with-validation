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
    // var popup = document.getElementById("validate_MIS");
    // console.log(popup)
    // popup.classList.toggle("show");
    var MIS = document.getElementById("MIS");
    var name = document.getElementById("Name")
    var age = document.getElementById("Age")
    var email = document.getElementById("email")
    var phone = document.getElementById("phone")
    var year = document.getElementById("year")
    if (MIS.value.length != 9 || checkIfStringHasOnlyDigits(MIS.value) == false)
        //pop up ka kuch karna hain
    
    if (validateName(name.value) == false)
        //pop up
    int_age = Number(age.value)
    if (checkIfStringHasOnlyDigits(age.value) == false || int_age < 18 || int_age > 22)
        //pop up
    if (validateEmail(email.value) == false)
        //pop up
    if (checkIfStringHasOnlyDigits(phone.value) || phone.value.length != 10)
        //pop up
    int_year = Number(year.value)
    if (int_year > 2025 || int_year < 2022)
        //pop up
}
