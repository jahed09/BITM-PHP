
function checkFirstName() {
    var firstNameValue = $('#firstName').val();
    if (firstNameValue.length > 6 && firstNameValue.length < 16) {
        $('#firstNameError').text(' ');
        return true;
    } else {
        $('#firstNameError').text('First Name should be 7 to 15 Character');
        return false;
    }
}
$('#firstName').keyup(function () {
    checkFirstName()
});
/////////////////////////////////////////////////
function checkLastName() {
    var lastNameValue = $('#lastName').val();
    if (lastNameValue.length > 6 && lastNameValue.length < 16) {
        $('#lastNameError').text(' ');
        return true;
    } else {
        $('#lastNameError').text('Last Name should be 7 to 15 Character');
        return false;
    }

}
$('#lastName').keyup(function () {
    checkLastName();
});
/////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////
function checkEmailAddress() {
    var emailAddressValue = $('#emailAddress').val();
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,3}$/i);
    if(pattern.test(emailAddressValue)){
        $('#emailError').text(' ');
        return true;
    }else {
        $('#emailError').text('Your email address is invalid');
        return false;
    }
}
$('#emailAddress').keyup(function () {
    checkEmailAddress();
});
/////////////////////////////////////////////////////////////////////////////
function checkPassworw() {
    var passwordValue = $('#password').val();
    if(passwordValue.length >= 6) {
        $('#passwordError').text('');
        return true;
    } else
        $('#passwordError').text('Password must be minimum 6 Caracter');
        return false;
}
$('#password').keyup(function () {
    checkPassworw();
});
////////////////////////////////////////////////////////////////////////////
$('#checkbox').click(function () {
    if(this.checked) {
        $('#password').attr('type', 'text')
    } else {
        $('#password').attr('type', 'password')
    }
});


////////////////////////////////////////////////////////
function checkConfirmPassword() {
    var passwordValue = $('#password').val();
    var confirmPasswordValue = $('#confirmPassword').val();
    if(passwordValue == confirmPasswordValue) {
        $('#confirmPasswordError').text('');
        return true;
    } else
        $('#confirmPasswordError').text('Password are not same');
        return false;
}
$('#confirmPassword').keyup(function () {
    checkConfirmPassword();
});
//////////////////////////////////////////////////////
function checkGender() {
    var genderValue = $('input[type="radio"]:checked').val();
    if(genderValue == 'male'){
        $('#genderError').text('');
        return true;
    } else if(genderValue == 'female'){
        $('#genderError').text(' ');
        return true;
    }else{
        $('#genderError').text('Please Select Your Gender');
        return false;
    }
}
///////////////////////////////////////////////////////////
function checkDistrictName() {
    var districtName = $('#district').val();
    if (districtName == ' '){
        $('#districtError').text('Please select Your District');
        return false;
    } else{
        $('#districtError').text(' ');
        return true;
    }
}

$('#district').change(function () {
    checkDistrictName();
});

/////////////////////////////////////////////////////////////////////////////////////////////////
$('#myForm').submit(function () {
    if(checkFirstName() == true && checkLastName() == true && checkEmailAddress() == true && checkPassworw() == true && checkConfirmPassword() == true && checkGender() == true && checkDistrictName() == true){
        return true;
    }else {
        return false;
    }
});