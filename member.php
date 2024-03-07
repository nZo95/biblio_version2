<!DOCTYPE html>
<html lang="fr">
<?php require 'header.php'?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Membre - ASF</title>
    <link rel="stylesheet" href="styles/member.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <script src="scripts/member.js" defer></script>
</head>
<body>
    <div class ="space">
        <h1>Bienvenue sur votre espace membre !</h1>
        <img class="sizeimg" src="images/user.png" alt="">
    </div>
    <section>
        <div class="space">
            <div class="content">
                <form action="#">
                    <div class="main-user-info">
                        <div class="user-input-box">
                            <label for="fullName">Nom Complet</label>
                            <input type="text"
                                    id="fullName"
                                    name="fullName"
                                    placeholder="Nom et Prénom"/>
                        </div>
                        <div class="user-input-box">
                            <label for="fullName">Pseudo</label>
                            <input type="text"
                                    id="username"
                                    name="username"
                                    placeholder="Pseudo"/>
                        </div>
                        <div class="user-input-box">
                            <label for="mail">Adresse Mail</label>
                            <input type="text"
                                    id="email"
                                    name="email"
                                    placeholder="Email"/>
                        </div>
                        <div class="user-input-box">
                            <label for="phone">Téléphone</label>
                            <input type="text"
                                    id="phoneNumber"
                                    name="phoneNumber"
                                    placeholder="Téléphone"/>
                        </div>
                    </div>
                    <div class="gender-details-box">
                        <span class="gender-title">Genre</span>
                        <div class="gender-category">
                            <input type="radio" name="gender" id="male">
                            <label for ="male">Homme</label>
                            <input type="radio" name="gender" id="female">
                            <label for ="female">Femme</label>
                            <input type="radio" name="gender" id="other">
                            <label for ="other">Autre</label>
                        </div>
                    </div>
                    <div class="form-submit-btn">
                        <input type="submit" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="space">
            <h1>Favoris</h1>
            <div class="container">
                <div class="slider-wrapper">
                    <button id="prev-slide" class="slide-button material-symbols-rounded">chevron_left</button>
                    <div class="image-list">
                        <img src="images/9780090898305.jpg" alt="" class="image-item">
                        <img src="images/9780151001637.jpg" alt="" class="image-item">
                        <img src="images/9780307792365.jpg" alt="" class="image-item">
                        <img src="images/9780613135818.jpg" alt="" class="image-item">
                        <img src="images/9782253087830.jpg" alt="" class="image-item">
                    </div>
                    <button id="next-slide" class="slide-button material-symbols-rounded">chevron_right</button>
                </div>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <div class ="space">
        <h1>Paramètres</h1>
    </div>
    <section>
        <div class="space">
            <div class="content-setting">
                <form action="#">
                    <div class="main-user-info">
                        <div class="user-input-box">
                            <label for="password">Mot de passe</label>
                            <input type="password"
                                    id="fullName"
                                    name="password"
                                    placeholder="Mot de passe"/>
                        </div>
                        <div class="user-input-box">
                            <label for="password">Confirmation</label>
                            <input type="password"
                                    id="username"
                                    name="cpassword"
                                    placeholder="Confirmation Mot de passe"/>
                        </div>
                    </div>
                    <div class="form-logout-btn">
                        <input type="submit" value="Déconnexion">   
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<?php require 'footer.php'?>
</html>