
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
        const nameRegex = /^[a-zA-Z]+$/;
        const phoneRegex = /^[+]{1}(?:[0-9\-\(\)\/\.]\s?){6,15}[0-9]{1}$/;

        
        function validateRegister(){
            var isValid = true;
            var firstName = document.getElementById("firstName").value;
            var lastName = document.getElementById("lastName").value;
            var emailaddress = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            var phone = document.getElementById("phoneNumber").value;
        
            if (!nameRegex.test(firstName)) {
                document.getElementById('fname-error-msg').style.display = 'block';
                isValid = false;
            } 
            
         if (!nameRegex.test(lastName)) {
                document.getElementById('lname-error-msg').style.display = 'block';
                isValid = false;
            }

         if (!phoneRegex.test(phone)) {
                document.getElementById('phone-error-msg').style.display = 'block';
                isValid = false;
            }

         if (!emailRegex.test(emailaddress)) {
                document.getElementById('email-error-msg').style.display = 'block';
                isValid = false;
            }
            
         if (!passwordRegex.test(password)) {
                document.getElementById('password-error-msg').style.display = 'block';
                isValid = false;
            }

         if (password !== confirmPassword) {
                document.getElementById('confirmpassword-error-msg').style.display = 'block';
                isValid = false;
            }
            console.log(isValid);
            return isValid;

        }

        
           

        




