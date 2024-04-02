const nameRegex = /^[a-zA-Z]+$/;

function validateChore(){
    var choreName = document.getElementById("chore-name").value;
    if (!nameRegex.test(choreName)) {
        document.getElementById('chore-name-error-msg').style.display = 'block';
        isValid = false;
    } 
}