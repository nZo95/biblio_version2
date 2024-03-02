document.addEventListener("DOMContentLoaded", function() { 
    var copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logos").appendChild(copy);
});

let btnFind = document.getElementById('btnFind');
let divFind = document.getElementById('findDiv');

btnFind.onclick = find;

function find() {
    if (divFind.style.display === "none") {
        divFind.style.display = "block";
    } else {
        divFind.style.display = "none";
    }
}

