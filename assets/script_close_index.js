var closeCard = document.querySelector("#closeCard");

closeCard.addEventListener("click", function() {
    var card = document.getElementById("card");
    var otherS = document.querySelector("#big");
    var inp = document.querySelector(".container");
    var footer = document.querySelector("footer");

    card.style.transform = "scale(0)";
    otherS.style.display = "flex";
    inp.style.display = "flex";
    footer.style.marginTop = "0";
})