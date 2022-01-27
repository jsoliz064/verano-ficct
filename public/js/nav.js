var b;
function habilitar() {
    var x = document.getElementById("perfil");
    if (x.style.display === "none") {
        b=true;
        x.style.display = "block";
    }
 }
 function habilitarMenu() {
    var x = document.getElementById("mobile-menu");
    if (x.style.display === "none") {
        b=true;
        x.style.display = "block";
    }
 }
 window.addEventListener("click", () => {
    var m = document.getElementById("perfil");
    var x = document.getElementById("mobile-menu");
    if(b===false) {
        if (m.style.display==="block"){
            m.style.display = "none";
        }
        if (x.style.display==="block"){
            x.style.display = "none";
        }
    }else{
        b=false;
    }
});