// var id;

// window.addEventListener("DOMContentLoaded", (event) => {
//      id = Math.floor(Math.random() * 42) +1;
//      console.log(id);
//      ajax();
//   });

// function ajax() {
//     var xhr = new XMLHttpRequest();
//     xhr.open("GET", "./controller/index_controller.php?id=" + id);
//     xhr.onload = function() {
//         if(xhr.status === 200) {
//             console.log(xhr.status);
//         } else {
//             console.log(xhr.status);
//         }
//     };
//     xhr.send();
// }
// let slide = document.querySelectorAll(".slide");
// let dots = document.querySelectorAll(".indicator");
// let before = document.querySelector(".before");
// let id = 0;
// let last = slide.length - 1;
// let after = id + 1;
// function next() {
//   if (id == slide.length - 1) {
//     id = 0;
//     last = slide.length - 1;
//     after = 1;
//   } else {
//     id++;
//     after = id + 1;
//     last = id - 1;
//   }
//   let second = (slide[id].style.display = "block");
//   let prev = (slide[last].style.display = "none");
//   dots[id].style.background = "dimgray";
//   dots[last].style.background = "darkgray";
//   displayPrev(slide, last);
//   displayNext(slide, after);
// }
// function prev() {
//   if (id != 0) {
//     id--;
//     after = id - 1;
//     last = id + 1;
//   } else {
//     id = slide.length - 1;
//     after = 12;
//     last = 0;
//   }
//   let next = (slide[id].style.display = "block");
//   let prev = (slide[last].style.display = "none");
//   dots[id].style.background = "dimgray";
//   dots[last].style.background = "darkgray";
//   displayPrev(slide, after);
//   displayNext(slide, last);
// }
// function displayPrev(slide, id) {
//   let a = (id == -1) ? 12 : id;
//   document.querySelector(".before")
//     .innerHTML = slide[a].innerHTML;
// }
// function displayNext(slide, id) {
//   let a = (id == slide.length) ? 0 : id;
//   document.querySelector(".after")
//     .innerHTML = slide[a].innerHTML;
// }
// function makeElement(slide) {
//   var before = document.createElement("div");
//   before.innerHTML = slide[slide.length - 1].innerHTML;
//   before.setAttribute("class", "before");
//   var after = document.createElement("div");
//   after.innerHTML = slide[1].innerHTML;
//   after.setAttribute("class", "after");
//   var parent = document.querySelector(".slider");
//   parent.append(before, after);
// }
// makeElement(slide);
// console.log(slide);
let slide = document.querySelectorAll(".slide");
let goNext = document.getElementById("btNext");
let goPrev = document.getElementById("btPrev");
let id = 0;
let last = slide.length - 1;
let after = id + 1;

goNext.addEventListener("click", function() {
    console.log("coucou");
    if (id == slide.length - 1) {
        id = 0;
        last = slide.length - 1;
        after = 1;
    } else {
        id++;
        after = id + 1;
        last = id - 1;
    }
    console.log(after);
    console.log(last);
    console.log(id);
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
    console.log("bruh");
    if (id != 0) {
        id--;
        after = id - 1;
        last = id + 1;
    } else {
        id = slide.length - 1;
        after = 40;
        last = 0;
    }
    console.log(after);
    console.log(last);
    console.log(id);

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
    }
    // else if(id == 41){
    //     slide[0].style.transform = "translateX(100%)";
    //     slide[1].style.transform = "translateX(100%)";
    // }
    // else if(id == 41){
    //     slide[1].style.display = "block";
    //     slide[last].style.display = "none";
    //     slide[0].style.transform = "translateX(100%)";
    //     slide[1].style.transform = "translateX(100%)";
    //     slide[41].style.transform = "translateX(-200%)";
    // }

})