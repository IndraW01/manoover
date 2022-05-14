var marker = document.querySelector("#marker");
var item = document.querySelectorAll(".timeLine span");
var timeContent1 = document.querySelector(".timeContent1");
var timeContent2 = document.querySelector(".timeContent2");

function indicator(e) {
    marker.style.left = e.offsetLeft + "px";
    marker.style.width = e.offsetWidth + "px";
}

item.forEach((link) => {
    link.addEventListener("click", (e) => {
        indicator(e.target);
    });
});

function DetailAcara() {
    timeContent1.classList.remove("d-none");

    timeContent2.classList.add("d-none");
}
function DetailTiket() {
    timeContent2.classList.remove("d-none");

    timeContent1.classList.add("d-none");
}
