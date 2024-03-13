<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Interface Administrateur ASF</title>
        <link rel="stylesheet" href="styles/json.css">
    </head>
    <body>
        <?php require('header.php'); ?>

        <?php
            if(isset($_FILES["jsonFile"]["tmp_name"]))
            {   
                $fileTmp = $_FILES["jsonFile"]["tmp_name"];
                copy($fileTmp, "uploads/recent_import.json");
                
                $content = file_get_contents("uploads/recent_import.json");
                if (str_contains($content, "card") != "1") 
                {     
                    echo '<div class="space"></div>
                    <h2>JSON Incorrect</h1>
                    <div class="space"><hr></div>';
                    
                    return; 
                }

                $json = json_decode($content);
                foreach($json as $line)
                {
                    $countAccountQueryFetch = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM compte WHERE id = '" . $line->card . "';"));
                    $countAccountQuery = intval($countAccountQueryFetch["count(*)"]);
                    $countBookQueryFetch = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM livre WHERE isbn = '" . $line->isbn . "';"));
                    $countBookQuery = intval($countBookQueryFetch["count(*)"]);
                    $countReserveQueryFetch = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM reserve WHERE isbn = '" . $line->isbn . "';"));
                    $countReserveQuery = intval($countBookQueryFetch["count(*)"]);
                    
                    if ($countAccountQuery == 0 || $countBookQuery == 0 || $countReserveQuery == 1) { continue; }

                    $stmt = $link->prepare("INSERT INTO reserve (isbn, id, date) VALUES (?, ?, ?)");
                    $stmt->execute(array($line->isbn, $line->card, $line->loan_date));
                    $stmt->close();
                }
            }
        ?>
            
        <div class="space"></div>
            <h2>Importer le JSON</h1>
        <div class="space"><hr></div>
        
        <form id="importJson" name="importJson" enctype="multipart/form-data" method="post" action="json_admin.php">
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
            <input name="jsonFile" type="file" id="jsonFile" size="200">
            <input type="button" id="jsonSubmit" name="jsonSubmit" value="Envoyer" onClick="document.getElementById('importJson').submit();"/>
        </form>
        <div class="space"></div>
        <?php require('footer.php'); ?>
    </body>
</html>