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


const passwordField = document.getElementById('newPassword');
const confirmPasswordField = document.getElementById('confirmNewPassword');
const messageField = document.getElementById('resultPassword');

function checkPasswordMatch() {
    const password = passwordField.value;
    const confirmPassword = confirmPasswordField.value;

    if (password === confirmPassword && password.length >=7) {
            messageField.textContent = 'Les mots de passe correspondent.';
            messageField.style.color = 'green';
    } else if(password === confirmPassword && password.length <=6){
            messageField.textContent = 'Le mot de passe doit contenir 7 caractères ou plus';
            messageField.style.color = 'red';
    } else if(password != confirmPassword && password.length >=7){
            messageField.textContent = 'Les mots de passe ne correspondent pas';
            messageField.style.color = 'red';
    } else {
            messageField.textContent = 'Le mot de passe doit contenir 7 caractères ou plus';
            messageField.style.color = 'red';
        }
    }
    

passwordField.addEventListener('input', checkPasswordMatch);
confirmPasswordField.addEventListener('input', checkPasswordMatch);
