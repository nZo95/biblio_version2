
<!DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CryptoLibrairie</title>
  </head>

  <body>
    <header>
      <img id="logo" src="images/logo.png" alt="logo">

      <ul id="nav">
        <li><a href="#section1">Accueil</a></li>
        <li><a href="#section2">Qu'est-ce que la cryptomonnaie ?</a></li>
        <li><a href="#section3">Livres</a></li>
        <li><a href="contact/contact.php">Contact</a></li>
      </ul>
    </header>

    <main>
      <section id="section1">
        <div id="titre-text">
          <h2>
            <strong>CryptoLibrairie</strong> , la bibliothèque <br>
            des investisseurs spécialisé <br>
            dans la crypto.
          </h2>
        </div>
        <div id="titreText2">
          <p>
            Bienvenue à la Bibliothèque Crypto, un sanctuaire intellectuel dédié
            à l'exploration captivante de l'univers en constante évolution des
            cryptomonnaies. Notre bibliothèque virtuelle est une porte d'entrée
            vers la compréhension profonde et éclairée de ce phénomène
            révolutionnaire qui redéfinit les frontières de la finance mondiale.
            <br>
            Plongez dans les rayons numériques de notre bibliothèque, où chaque
            page offre un voyage informatif à travers les technologies
            blockchain, les monnaies décentralisées, et les innombrables
            innovations qui émergent de cet écosystème dynamique. Que vous soyez
            un novice curieux, un investisseur averti ou un passionné chevronné,
            notre bibliothèque a été conçue pour satisfaire votre soif de
            connaissance dans le domaine complexe et fascinant des
            cryptomonnaies.
          </p>
        </div>
      </section>

      <section id="section2">
        <h1>Qu'est-ce que la cryptomonnaie ?</h1>
        <div id="Textqstc">
          <p>
            Les cryptomonnaies sont des formes de monnaie numérique utilisant la
            cryptographie pour sécuriser les transactions via des réseaux
            décentralisés, comme la blockchain. Contrairement aux devises
            traditionnelles, elles ne dépendent pas d'une autorité centrale. Le
            Bitcoin, créé en 2009, est la première et la plus célèbre
            cryptomonnaie. Les transactions sont enregistrées de manière
            transparente sur la blockchain, assurant sécurité et intégrité. Les
            cryptomonnaies offrent des possibilités d'investissement et peuvent
            être utilisées comme moyen de paiement, introduisant ainsi des
            alternatives novatrices dans le paysage financier mondial.
          </p>
        </div>
      </section>

      <section id="section3">
        <h1>Nos livres sur la cryptomonnaie :</h1>

        <div id="div-mere-livre">
          <?php
            include 'connexion_bdd.php'; 

            $query = 'SELECT DISTINCT isbn, titre, annee, Personne.nom, Personne.prenom FROM Livre JOIN Auteur ON Auteur.idLivre = Livre.isbn JOIN Personne ON Auteur.idPersonne = Personne.id;'; 
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='div-fille-livre'>";
                echo "<a href='livres/detail.php?isbn=" . $row['isbn'] . "'><img src='images/" . $row['isbn'] . ".jpg' alt='Livre " . $row['titre'] . "'>";
                echo "<p>" . $row['titre'] . "</p>";
                echo "<p>" . $row['nom'] . " " . $row['prenom'] . "</p>";
                echo "<p>" . $row['annee'] . "</p>";
                echo "</a></div>";}
           ?>
        </div>
      </section>
    </main>
    <footer>
      <p>©️ Cryptolibrairie COPYRIGHT</p>
    </footer>
  </body>
</html>
