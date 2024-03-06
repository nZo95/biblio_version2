document.getElementById('imageInput').addEventListener('change', function(e) {
    var file = e.target.files[0]; // Récupérer l'image qu'on veut

    if (file) {
       
        var reader = new FileReader();

        reader.onload = function(e) {
            
            var result = e.target.result;
            
            // Afficher l'image
            var img = document.getElementById('coverImage');
            img.src = result;
            img.style.display = 'block'; 
        };

       
        reader.readAsDataURL(file);
    }
});
