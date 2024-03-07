<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="styles/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <title>ASF</title>
</head>
<body>
  <header>
    <nav>
      <div class="icon">
        <img src="images/icon.png" alt="error">
        <p>ASF</p>
      </div>
      <div class="links">
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <?php
            $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  
              if (str_contains($actual_link, "admin"))
              {
                echo '<li><a href="ajout_livre_admin.php">Ajout</a></li>';
                echo '<li><a href="notif_admin.php">Comptes client</a></li>';
              }
              else
              {
                  echo '<li><a href="page_Livre.php">Livres</a></li>';
              }
            ?>
          
          <li><img src="images/user.png" alt="error"></li>
        </ul>
      </div>
    </nav>
    <?php 
      session_start();
      $id_session = session_id();
    
      require "bdd/bdd_connexion.php"; 
    ?>
  </header>
</body> 