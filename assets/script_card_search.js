var b;
var btn = document.querySelectorAll(".listDiv button");

btn.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        // slice pour retirer le #
        b = e.currentTarget.getAttribute("href").slice(1);
        ajax();
        console.log(b);
    });
});

function ajax() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "controller/films_controller_card.php?name=" + b);
    xhr.onload = function() {
        if(xhr.status === 200) {
            document.querySelector("#listFilm").innerHTML = xhr.responseText;
        } else {
            console.log(xhr.status);
        }
    };
    xhr.send();
}