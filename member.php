<!DOCTYPE html>
<html lang="fr">
<?php require 'header.php'?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Membre - ASF</title>
    <link rel="stylesheet" href="member_area/styles/member.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <script src="member_area/js/script.js" defer></script>
</head>
<body>
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
                                    placeholder="Enter Full Name"/>
                        </div>
                        <div class="user-input-box">
                            <label for="fullName">Username</label>
                            <input type="text"
                                    id="username"
                                    name="username"
                                    placeholder="Enter Username"/>
                        </div>
                        <div class="user-input-box">
                            <label for="mail">Email</label>
                            <input type="text"
                                    id="email"
                                    name="email"
                                    placeholder="Enter email"/>
                        </div>
                        <div class="user-input-box">
                            <label for="phone">Phone Number</label>
                            <input type="text"
                                    id="phoneNumber"
                                    name="phoneNumber"
                                    placeholder="Enter Phone Number"/>
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
        <hr />
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
        <hr />
        <div class="space">
            <h1>Paramètre</h1>
        </div>

    </section>
</body>
<?php require 'footer.php'?>
</html>