<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="contact.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <title>Contactez-nous</title>
    </head>

    <body>
    <header>
        <img id="logo" src="../images/logo.png" alt="logo">

        <ul id="nav">
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="../index.php">Qu'est-ce que la cryptomonnaie ?</a></li>
            <li><a href="../index.php">Livres</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </header>

        <main>
            <form action="reponse.php" method="post">
                <fieldset class="info-utilisateur">
                    <legend>Vos Informations</legend>

                    <label for="nom">Nom ou Pseudo :</label>
                    <input type="text" name="nom" id="nom" required>
        
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" name="email" id="email" required>
                </fieldset>

                <fieldset class="message">
                    <legend>Votre Message</legend>

                    <label for="type-demande">Sujet du Message :</label>
                    <select name="type-demande" id="type-demande" required>
                        <option value="" disabled selected>Choisissez le sujet</option>
                        <option value="livre">Proposition de livre</option>
                        <option value="aide">Demande d'aide</option>
                        <option value="autre">Autre</option>
                    </select>
                
                    <label for="message">Votre Message :</label>
                    <textarea name="message" id="message" rows="10" required maxlength="300"></textarea>
                    </fieldset>
                <div class="button">
                <button type="submit">Envoyer</button>
                </div>
            </form>
        </main>

        <footer>
            <p>&copy; 2024 Ma Librairie</p>
        </footer>
    </body>
</html>
