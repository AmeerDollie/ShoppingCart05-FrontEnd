var settingsmenu = document.querySelector(".settingsmenu")
var darkBTN = document.getElementById("darkbtn");
function settingsmenuToggle(){
    settingsmenu.classList.toggle("settingsmenu-height");
}
darkBTN.onclick = function(){
    darkBTN.classList.toggle("darkbtn-on");
    document.body.classList.toggle("nightmode");

    if(localStorage.getItem("theme") == "light"){
        localStorage.setItem("theme", "dark");
    }
    else{
        localStorage.setItem("theme","light");
    }
}

if(localStorage.getItem("theme") == "light"){
    darkBTN.classList.remove("darkbtn-on");
    document.body.classList.remove("dark-theme");
}
else if(localStorage.getItem("theme") == "dark"){
    darkBTN.classList.add("darkbtn-on");
    document.body.classList.add("dark-theme");
}
else{
    localStorage.setItem("theme","light");
}
localStorage.setItem("theme" , "light");
localStorage.getItem("theme");
