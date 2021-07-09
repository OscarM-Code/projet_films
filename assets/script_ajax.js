var a;
var searchValue;
var ok = document.getElementById("search").value;
var pic = document.querySelectorAll(".slide");
var search = document.getElementById("search");

pic.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        // slice pour retirer le #
        a = e.currentTarget.getAttribute("href").slice(1);
        ajax();
        console.log(a);
    });
});


search.addEventListener("keyup", function() {
    searchValue = document.getElementById("search").value;
    searchBar();
})

function ajax() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "controller/index_controller_ajax.php?id=" + a);
    xhr.onload = function() {
        if(xhr.status === 200) {
            document.querySelector("#big").innerHTML = xhr.responseText;
        } else {
            console.log(xhr.status);
        }
    };
    xhr.send();
}

function searchBar() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "controller/films_controller_search.php?search=" + searchValue);
    xhr.onload = function() {
        if(xhr.status === 200) {
            document.querySelector("#listFilm").innerHTML = xhr.responseText;
        } else {
            console.log(xhr.status);
        }
    };
    xhr.send();
}