function validateForm() {
    let valid = true;
    let firstName = document.getElementById("firstName").value;
    let lastName = document.getElementById("lastName").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    document.getElementById("firstNameError").innerText = "";
    document.getElementById("lastNameError").innerText = "";
    document.getElementById("emailError").innerText = "";
    document.getElementById("passwordError").innerText = "";
    document.getElementById("confirmPasswordError").innerText = "";

    if (firstName === " ") {
            document.getElementById("firstNameError").innerText = "First name is required";
            valid = false;
        document.getElementById("firstNameError").innerText = "First name is required";
        valid = false;
    }

    if (lastName === " ") {
        document.getElementById("lastNameError").innerText = "Last name is required";
        valid = false;
    }
    const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!emailRegex.test(email)) {
        document.getElementById("emailError").innerText = "Invalid email format";
        valid = false;
    }

    if (password.length < 6) {
        document.getElementById("passwordError").innerText = "Password must be at least 6 characters";
        valid = false;
    }

    if (confirmPassword !== password) {
        document.getElementById("confirmPasswordError").innerText = "Passwords do not match";
        valid = false;
    }

    if (valid) {
        alert("Form submitted successfully!");
        return true;
    } else {
        return false;
    }
}