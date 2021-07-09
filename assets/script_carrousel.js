// -------------------------------FONCTIONNEMENT CARROUSEL

let slide = document.querySelectorAll(".slide");
let goNext = document.getElementById("btNext");
let goPrev = document.getElementById("btPrev");
let id = 0;
let last = slide.length - 1;
let after = id + 1;

goNext.addEventListener("click", function() {
    if (id == slide.length - 1) {
        id = 0;
        last = slide.length - 1;
        after = 1;
    } else {
        id++;
        after = id + 1;
        last = id - 1;
    }

    if(id <= 39){
        slide[id+2].style.display = "block";
        slide[last].style.display = "none";
        slide[0].style.transform = "translateX(0%)";
        slide[1].style.transform = "translateX(0%)";
        slide[40].style.transform = "translateX(0%)";
        slide[41].style.transform = "translateX(0%)";
    } else if(id == 40){
        slide[0].style.display = "block";
        slide[last].style.display = "none";
        slide[0].style.transform = "translateX(200%)";
        slide[40].style.transform = "translateX(-100%)";
        slide[41].style.transform = "translateX(-100%)";
    } else if(id == 41){
        slide[1].style.display = "block";
        slide[last].style.display = "none";
        slide[0].style.transform = "translateX(100%)";
        slide[1].style.transform = "translateX(100%)";
        slide[41].style.transform = "translateX(-200%)";
    }
})

goPrev.addEventListener("click", function() {
    if (id != 0) {
        id--;
        after = id - 1;
        last = id + 1;
    } else {
        id = slide.length - 1;
        after = 40;
        last = 0;
    }

    if(id == 41){
        slide[41].style.display = "block";
        slide[last+2].style.display = "none";
        slide[0].style.transform = "translateX(100%)";
        slide[1].style.transform = "translateX(100%)";
        slide[41].style.transform = "translateX(-200%)";
    } else if(id == 40){
        slide[40].style.display = "block";
        slide[1].style.display = "none";
        slide[0].style.transform = "translateX(200%)";
        slide[41].style.transform = "translateX(-100%)";
        slide[40].style.transform = "translateX(-100%";
    } else if(id == 39) {
        slide[id].style.display = "block";
        slide[0].style.display = "none";
        slide[41].style.transform = "translateX(0%)";
        slide[40].style.transform = "translateX(0%";
    } else {
        slide[id].style.display = "block";
        slide[last+2].style.display = "none";
        slide[0].style.transform = "translateX(0%)";
        slide[1].style.transform = "translateX(0%)";
    }
})