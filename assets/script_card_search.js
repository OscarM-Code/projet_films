var b;
var btn = document.querySelectorAll(".btCard");

btn.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        var card = document.getElementById("card");
        var listF = document.getElementById("listFilm");
        var footer = document.querySelector("footer");
        var inp = document.querySelector("input");
        b = e.currentTarget.getAttribute("href").slice(1);
        ajax();
        window.scrollTo(0, 0);
        listF.style.display = "none";
        inp.style.display = "none";
        card.style.transform = "scale(1)";
        footer.style.marginTop = "100vh"
    });
});

function ajax() {
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