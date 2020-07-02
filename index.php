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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TP XML</title>
</head>

<body>
<nav class="navbar navbar-expand-lg">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="page1.html">Accueil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="page2.html">Informations</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="page3.html">Avis clients</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="page4.html">Contact</a>
    </li>
  </ul>

</nav>

    <h1><?= $sourceXml->page[$page]->title; ?></h1>
    <p><?= $sourceXml->page[$page]->content; ?></p>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>