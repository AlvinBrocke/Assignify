document.getElementById("add-chore-button").addEventListener('click', function(){
    document.querySelector(".add-chore-background").style.display = "flex";
})

document.querySelector(".close").addEventListener("click", function(){
    document.querySelector(".add-chore-background").style.display = "none";
})