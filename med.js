
function checkIfStringHasOnlyDigits(_string) {
    for (let i = _string.length - 1; i >= 0; i--) {
    const codeValue = _string.charCodeAt(i);
    if (codeValue < 48 || codeValue > 57) 
        return false
    }
    return true
}

function myFunction() {
    // var popup = document.getElementById("validate_MIS");
    // console.log(popup)
    // popup.classList.toggle("show");
    var MIS = document.getElementById("mis");
    var bloodGroup = document.getElementById("bg")
    var bg = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
    console.log()
    if (MIS.value.length != 9 || checkIfStringHasOnlyDigits(MIS.value) == false)
        //pop up ka kuch karna hain
        console.log("Kya haal")
    if (bg.includes(bloodGroup.value))
        //pop up
        console.log("Kya haal")
    
}
