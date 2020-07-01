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
    <a href="index.php?page=1">page1</a><br>
    <a href="index.php?page=2">page2</a><br>
    <a href="index.php?page=3">page3</a><br>
    <a href="index.php?page=4">page4</a><br>
    <h1><?= $sourceXml->page[$page]->title; ?></h1>
    <h3><?= $sourceXml->page[$page]->title; ?></h3>
    <?= $sourceXml->page[$page]->content; ?>
</body>

</html>