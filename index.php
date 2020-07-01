<?php

// On vérifie si le fichier source.xml
if (file_exists('source.xml')) {
    $sourceXml = simplexml_load_file('source.xml');
} else {
    exit('Echec lors de l\'ouverture du fichier test.xml.');
}
// On récupère la valeur de l'attribut $page sinon on lui donne une valeur de 0
if (isset($_GET['page'])) {
    $page = intval($_GET['page']) - 1;
} else {
    $page = 0;
}
// foreach ($sourceXml->page as $page) {
//     echo '<a href="index.php?id=' . (intval($page[('id')]) - 1) . '">accueil</a>';
// }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP XML</title>
</head>

<body>
    <a href="page1.html">Accueil</a><br>
    <a href="page2.html">Informations</a><br>
    <a href="page3.html">Avis clients</a><br>
    <a href="page4.html">Contact</a><br>
    <h1><?= $sourceXml->page[$page]->title; ?></h1>
    <p><?= $sourceXml->page[$page]->content; ?></p>
</body>

</html>