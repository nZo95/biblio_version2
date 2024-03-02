document.addEventListener("DOMContentLoaded", function() { 
    var copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logos").appendChild(copy);
});

let btnFind = document.getElementById('btnFind');
let divFind = document.getElementById('findDiv');

btnFind.addEventListener("click", find())

function find() {
    if (divFind.style.display === "block") {
        divFind.style.display = "none";
    } else {
        divFind.style.display = "block";
    }
}

