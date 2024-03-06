const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" })
        });
    });

    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "block";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "block";
    }

    imageList.addEventListener("scroll", () => {
        handleSlideButtons();
    })
}
window.addEventListener("load", initSlider);

let btnFind = document.getElementById('buttonFind');
let divFind = document.getElementById('find');

btnFind.onclick = find;

function find() {
    if (divFind.style.display === "none") {
        divFind.style.display = "block";
    } else {
        divFind.style.display = "none";
    }
}

let btnSignIn = document.getElementById('SignIn');
let btnSignUp = document.getElementById('SignUp');
let divSignIn = document.getElementById('inscription');
let first = document.getElementById('first');


btnSignIn.onclick = connexion;

function connexion(){
    first.style.display = "none";
    divSignIn.style.display = "block";
}
