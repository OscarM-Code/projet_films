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
        } else {
            console.log(xhr.status);
        }
    };
    xhr.send();
}