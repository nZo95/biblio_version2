document.addEventListener("DOMContentLoaded", function() { });

let btnFind = document.getElementById('btnFind');

btnFind.onclick = find;

function find() {
    let divFind = document.getElementById('findDiv');

    divFind.style.display = 'block';
}