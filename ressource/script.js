var id = document.querySelector("input");

id.addEventListener("keyup", function(){
    var num = document.querySelector("input").value;
    fetch("../controller/index.php", {
        method: "post",
        body: num
    }).then(console.log("all ok"));
});