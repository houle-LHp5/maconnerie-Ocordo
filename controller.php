<?php
if (file_exists('source.xml')) {
    $xml = simplexml_load_file('source.xml');
} else {
    exit('Echec lors de l\'ouverture du fichier source.xml.');
}
$showHome = true ;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ORCODO</title>
</head>

<body>

    <header><?php
            echo $xml->page[0]->content;
            ?></header>
    <div class="container-fluid">
    <?php if (isset($_GET["index.php?accueil"])) { 
        $showHome = false; ?>
        <div>
            <?php
            echo $xml->page[0]->content;
            ?>
        </div>
    <?php } else { ?>
        <p></p>

    <?php } ?>
    <div>
        <?php
        echo $xml->page[1]->content;
        ?>
    </div>
    <div>
        <?php
        echo $xml->page[2]->content;
        ?>
    </div>
    <div>
        <?php
        echo $xml->page[3]->content;
        ?>
    </div>

  </div>
  
</body>
</html>