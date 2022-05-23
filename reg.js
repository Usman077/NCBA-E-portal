// validiation of password and confirm password
function validatePassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
}
// password validation for strong password
function validatePasswordStrength() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }
    if (password.length > 20) {
        alert("Password must be less than 20 characters long.");
        return false;
    }
    if (password.search(/[a-z]/) < 0) {
        alert("Password must contain at least one lower case letter.");
        return false;
    }
    if (password.search(/[A-Z]/) < 0) {
        alert("Password must contain at least one upper case letter.");
        return false;
    }
    if (password.search(/[0-9]/) < 0) {
        alert("Password must contain at least one number.");
        return false;
    }
    if (password.search(/[^a-zA-Z0-9]/) < 0) {
        alert("Password must contain at least one special character.");
        return false;
    }
    return true;
}

//phone number validation
function validatePhone() {
    var phone = document.getElementById("phone").value;
    var phoneRegex = /^\d{10}$/;
    if (phone.match(phoneRegex)) {
        return true;
    } else {
        alert("Please enter a valid phone number");
        return false;
    }
}
