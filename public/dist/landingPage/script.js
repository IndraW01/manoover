const navMenu = document.querySelector("#demo");
const content1 = document.querySelector(".contentEvent1");
const content2 = document.querySelector(".contentEvent2");
const content3 = document.querySelector(".contentEvent3");

const navMenu2 = document.querySelector("#demo2");
const content11 = document.querySelector(".contentEvent11");
const content21 = document.querySelector(".contentEvent21");
const content31 = document.querySelector(".contentEvent31");

navMenu.addEventListener("mouseover", () => {
    navMenu.classList.add("show");

    content1.classList.remove("d-none");
    content2.classList.remove("d-none");
    content3.classList.remove("d-none");
});
navMenu.addEventListener("mouseout", () => {
    navMenu.classList.remove("show");

    content1.classList.add("d-none");
    content2.classList.add("d-none");
    content3.classList.add("d-none");
});
navMenu2.addEventListener("mouseover", () => {
    navMenu2.classList.add("show");

    content11.classList.remove("d-none");
    content21.classList.remove("d-none");
    content31.classList.remove("d-none");
});
navMenu2.addEventListener("mouseout", () => {
    navMenu2.classList.remove("show");

    content11.classList.add("d-none");
    content21.classList.add("d-none");
    content31.classList.add("d-none");
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 680) {
            $(".light").removeClass("d-none");
        } else {
            $(".light").addClass("d-none");
        }
    });
});
