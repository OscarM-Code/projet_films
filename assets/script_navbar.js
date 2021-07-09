var searchValue;
var search = document.getElementById("search");

search.addEventListener("keyup", function() {
    searchValue = document.getElementById("search").value;
    searchBar();
})

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