document.getElementById("add-chore-button").addEventListener('click', function(){
    document.querySelector(".add-chore-background").style.display = "flex";
})

document.querySelector(".close").addEventListener("click", function(){
    document.querySelector(".add-chore-background").style.display = "none";
})

var assignBtn = document.getElementById("assignBtn");
var addBtn = document.getElementById("addBtn");
assignBtn.addEventListener('click', function(){
    var date = document.getElementById("date").value;
    if (date == ""){
        alert("Please enter a date");
    }

    if (date > new Date().toISOString().split('T')[0]){
        alert("Please enter a valid date");
    }
});

addBtn.addEventListener('click', function(){
    var chore = document.getElementById("chore").value;
    var date = document.getElementById("date").value;
    if (chore == ""){
        alert("Please enter a chore");
    }
    if (date == ""){
        alert("Please enter a date");
    }
    if (date < new Date().toISOString().split('T')[0]){
        document.getElementById("error-msg").style.display = "block";
    }
});