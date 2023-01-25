function validateUser() {
    var email = $('#email').val();
    var pw = $('#pw').val();
    var cpw = $('#cpw').val();
    reset();
    return (validateEmail(email) && validatePassword(pw) && validateConfirmPassword(pw,cpw));
}

function reset() {
    $('#errorEmail').html("");
    $('#errorPw').html("");
    $('#errorCpw').html("");
}

function validateEmail(email) {
    var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (emailRegex.test(email)) {
        return true
    }
    $('#errorEmail').html("You have entered an invalid email address!");
    return false;
}

function validatePassword(pw) {
    if(pw.length>=8) {
        if(pw.length<=20) {
            var pwRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/
            if (pwRegex.test(pw)) {
                return true
            }else {
                $('#errorPw').html("Password invalid! The password must contain at least 1 numeric, 1 uppercase, 1 lowercase and 1 special character");
                return false;
            }
        }else{
            $('#errorPw').html("Password too long!");
            return false;
        }
    }else {
        $('#errorPw').html("Password too short!");
        return false;
    }
}

function validateConfirmPassword(pw,cpw) {
    if(pw === cpw)
        return true;
    $('#errorCpw').html("Passwords don't match");
    return false;
}