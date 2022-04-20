const competition1 = document.querySelector("#demoCompetition");
const demoCompetition1 = document.querySelector(".contentCompetition1");
const demoCompetition2 = document.querySelector(".contentCompetition2");

const competition2 = document.querySelector("#demoCompetition2");
const demoCompetition3 = document.querySelector(".contentCompetition3");
const demoCompetition4 = document.querySelector(".contentCompetition4");

const competition3 = document.querySelector("#demoCompetition3");
const demoCompetition5 = document.querySelector(".contentCompetition5");
const demoCompetition6 = document.querySelector(".contentCompetition6");

const competition4 = document.querySelector("#demoCompetition4");
const demoCompetition7 = document.querySelector(".contentCompetition7");
const demoCompetition8 = document.querySelector(".contentCompetition8");

competition1.addEventListener("mouseover", () => {
    competition1.classList.add("show");
    demoCompetition1.classList.remove("d-none");
    demoCompetition2.classList.remove("d-none");
});
competition1.addEventListener("mouseout", () => {
    competition1.classList.remove("show");
    demoCompetition1.classList.add("d-none");
    demoCompetition2.classList.add("d-none");
});
competition2.addEventListener("mouseover", () => {
    competition2.classList.add("show");
    demoCompetition3.classList.remove("d-none");
    demoCompetition4.classList.remove("d-none");
});
competition2.addEventListener("mouseout", () => {
    competition2.classList.remove("show");
    demoCompetition3.classList.add("d-none");
    demoCompetition4.classList.add("d-none");
});
competition3.addEventListener("mouseover", () => {
    competition3.classList.add("show");
    demoCompetition5.classList.remove("d-none");
    demoCompetition6.classList.remove("d-none");
});
competition3.addEventListener("mouseout", () => {
    competition3.classList.remove("show");
    demoCompetition5.classList.add("d-none");
    demoCompetition6.classList.add("d-none");
});
competition4.addEventListener("mouseover", () => {
    competition4.classList.add("show");
    demoCompetition7.classList.remove("d-none");
    demoCompetition8.classList.remove("d-none");
});
competition4.addEventListener("mouseout", () => {
    competition4.classList.remove("show");
    demoCompetition7.classList.add("d-none");
    demoCompetition8.classList.add("d-none");
});

// ================
