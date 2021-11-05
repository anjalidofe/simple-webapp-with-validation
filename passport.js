
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
function myFunctions() {
    // var popup = document.getElementById("validate_MIS");
    // console.log(popup)
    // popup.classList.toggle("show");
    var MIS = document.getElementById("mis");
    var passportNum = document.getElementById("pno")
    var passportName = document.getElementById("pname")
    console.log(checkPassport("N98065069"));

    if (MIS.value.length != 9 || checkIfStringHasOnlyDigits(MIS.value) == false)
        //pop up ka kuch karna hain
    if (checkPassport(passportNum.value) == false)
        //pop up
    if (validateName(passportName.value) == false)
        //pop up
    console.log("dsd")
}
