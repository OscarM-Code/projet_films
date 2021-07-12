var a;
var pic = document.querySelectorAll(".slide");

pic.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        // slice pour retirer le #
        a = e.currentTarget.getAttribute("href").slice(1);
        ajax();
    });
});

function ajax() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "controller/index_controller_ajax.php?id=" + a);
    xhr.onload = function() {
        if(xhr.status === 200) {
            document.querySelector("#big").innerHTML = xhr.responseText;
            var b;
var btn = document.querySelectorAll(".btCard");

btn.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        var card = document.getElementById("card");
        var big = document.getElementById("big");
        var footer = document.querySelector("footer");
        var container = document.querySelector(".container")
        b = e.currentTarget.getAttribute("href").slice(1);
        ajaxC();
        big.style.display = "none";
        container.style.display = "none";
        card.style.transform = "scale(1)";
        footer.style.marginTop = "100vh"
    });
});

function ajaxC() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "controller/films_controller_card.php?name=" + b);
    xhr.onload = function() {
        if(xhr.status === 200) {
            document.querySelector("#cardContent").innerHTML = xhr.responseText;
        } else {
            console.log(xhr.status);
        }
    };
    xhr.send();
}
        } else {
            console.log(xhr.status);
        }
    };
    xhr.send();
}