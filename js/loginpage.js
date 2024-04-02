const errorMsg = document.getElementById('error-msg');
const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;

function validateLogin(){
    var isValid = true
    var emailaddress = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    const emailValid = emailRegex.test(emailaddress);
    const passwordValid = passwordRegex.test(password);
    console.log(emailaddress);
    console.log(emailValid)
    console.log(password);
    console.log(passwordValid);

    if(emailValid && passwordValid){
        console.log("Login Successful")
        isValid = true;
        
    } else {
        errorMsg.style.display = 'block';
        isValid = false;
    }
    return isValid;
}

