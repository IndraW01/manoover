const myfungsieye = () => {
    var show = document.getElementById("hide1");
    var hide = document.getElementById("hide2");
    var inputt = document.getElementById("pswLogin");

    if (inputt.type === "password") {
        inputt.type = "text";
        hide.classList.add("d-none");
        show.classList.remove("d-none");
    } else {
        inputt.type = "password";
        hide.classList.remove("d-none");
        show.classList.add("d-none");
    }
};

const myfungsieye2 = () => {
    var show3 = document.getElementById("hide3");
    var hide4 = document.getElementById("hide4");
    var inputR = document.getElementById("pswRegis");

    if (inputR.type === "password") {
        inputR.type = "text";
        hide4.classList.add("d-none");
        show3.classList.remove("d-none");
    } else {
        inputR.type = "password";
        hide4.classList.remove("d-none");
        show3.classList.add("d-none");
    }
};
