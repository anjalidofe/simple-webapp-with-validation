
function checkIfStringHasOnlyDigits(_string) {
    for (let i = _string.length - 1; i >= 0; i--) {
    const codeValue = _string.charCodeAt(i);
    if (codeValue < 48 || codeValue > 57) 
        return false
    }
    return true
}
function validateName(name) {
    const re = /^[a-z ,.'-]+$/i;
    return re.test(String(name).toLowerCase());
}

function checkPassport(passportNum){
    const re = /^[A-Z]{1}[0-9]{7}$/;
    return re.test(String(passportNum));
}

function myFunction() {
    var MIS = document.getElementById("mis");
    var passportNum = document.getElementById("pno")
    var passportName = document.getElementById("pname")

    var mis_popup = document.getElementById("check_MIS");
    var name_popup = document.getElementById("check_name");
    var number_popup = document.getElementById("check_number");
    if (MIS.value.length != 9 || checkIfStringHasOnlyDigits(MIS.value) == false){
        mis_popup.classList.toggle("show");
        return false;
    }    
    if (checkPassport(passportNum.value) == false){
        number_popup.classList.toggle("show")
        return false;
    }
        
    if (validateName(passportName.value) == false){
        name_popup.classList.toggle("show");
        return false;
    }
}
