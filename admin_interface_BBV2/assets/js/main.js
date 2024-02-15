let list = document.querySelectorAll(".navigation li");

function activelink(){
    list.forEach(item=>{
        item.classListe.remove("hovered");
    });
    this.classListe.add("hovered");
}

list.forEach(item => item.addEventListener("mouseover", ))