var closeCard = document.querySelector("#closeCard");

closeCard.addEventListener("click", function() {
    var card = document.getElementById("card");
    var otherS = document.querySelector("#listFilm");
    var inp = document.querySelector("input");
    var footer = document.querySelector("footer");

    card.style.transform = "scale(0)";
    otherS.style.display = "block";
    inp.style.display = "block";
    footer.style.marginTop = "0";
})