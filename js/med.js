
function checkIfStringHasOnlyDigits(_string) {
    for (let i = _string.length - 1; i >= 0; i--) {
    const codeValue = _string.charCodeAt(i);
    if (codeValue < 48 || codeValue > 57) 
        return false
    }
    return true
}

function myFunction() {
    var MIS = document.getElementById("mis");
    var bloodGroup = document.getElementById("bg")
    var mis_popup = document.getElementById("check_MIS");
    var bg_popup = document.getElementById("check_bg");
    var bg = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
    if (MIS.value.length != 9 || checkIfStringHasOnlyDigits(MIS.value) == false){
        mis_popup.classList.toggle("show");
        return false;
    }
    if (bg.includes(bloodGroup.value) == false){
        bg_popup.classList.toggle("show")
        return false;
    }
}
