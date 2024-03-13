document.getElementById('imageInput').addEventListener('change', function(e) {
    var file = e.target.files[0]; 

    if (file) {
        var reader = new FileReader();

        reader.onload = function(e) {
            var result = e.target.result;
            var img = document.getElementById('coverImage');
            img.src = result;
            img.style.display = 'block';

            document.querySelector('.add-image').style.display = 'none';
            document.getElementById('removeImageButton').style.display = 'block'; // Pr afficher le bouton "retirer l'image"
        };

        reader.readAsDataURL(file);
    }
});

document.getElementById('removeImageButton').addEventListener('click', function() {
    // Pr cacher l'image et le bouton "retirer l'image"
    document.getElementById('coverImage').style.display = 'none';
    this.style.display = 'none';

   
    document.getElementById('imageInput').value = '';

    // C'est pr réafficher le logo du + et le texte "Ajouter une image de couverture"
    document.querySelector('.add-image').style.display = 'flex';
});

function submitForm() {
    const form = document.getElementById('bookForm');
    const formData = new FormData(form);
    let queryString = new URLSearchParams(formData).toString();
    window.location.href = `submit.php?${queryString}`;
  }



 
