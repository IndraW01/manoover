var marker = document.querySelector("#marker");
var item = document.querySelectorAll(".timeLine span");
var timeContent1 = document.querySelector(".timeContent1");
var timeContent2 = document.querySelector(".timeContent2");
var timeContent3 = document.querySelector(".timeContent3");
var timeContent4 = document.querySelector(".timeContent4");
var timeContent5 = document.querySelector(".timeContent5");

function indicator(e) {
    marker.style.left = e.offsetLeft + "px";
    marker.style.width = e.offsetWidth + "px";
}

item.forEach((link) => {
    link.addEventListener("click", (e) => {
        indicator(e.target);
    });
});

function first() {
    timeContent1.classList.remove("d-none");

    timeContent2.classList.add("d-none");
    timeContent3.classList.add("d-none");
    timeContent4.classList.add("d-none");
    timeContent5.classList.add("d-none");
}
function two() {
    timeContent2.classList.remove("d-none");

    timeContent1.classList.add("d-none");
    timeContent3.classList.add("d-none");
    timeContent4.classList.add("d-none");
    timeContent5.classList.add("d-none");
}
function tree() {
    timeContent3.classList.remove("d-none");

    timeContent1.classList.add("d-none");
    timeContent2.classList.add("d-none");
    timeContent4.classList.add("d-none");
    timeContent5.classList.add("d-none");
}
function four() {
    timeContent4.classList.remove("d-none");

    timeContent1.classList.add("d-none");
    timeContent2.classList.add("d-none");
    timeContent3.classList.add("d-none");
    timeContent5.classList.add("d-none");
}
function five() {
    timeContent5.classList.remove("d-none");

    timeContent1.classList.add("d-none");
    timeContent2.classList.add("d-none");
    timeContent3.classList.add("d-none");
    timeContent4.classList.add("d-none");
}
