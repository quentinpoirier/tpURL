<?php
if (file_exists('source.xml')) {
    $sourceXml = simplexml_load_file('source.xml');
    echo ($sourceXml);
} else {
    exit('Echec lors de l\'ouverture du fichier test.xml.');
}
var_dump($sourceXml);

// echo $sourceXml->page[1] ->content;
foreach ($sourceXml->page as $page) {
    echo '<a href="index.php?id=' . (intval($page[('id')]) - 1) . '">accueil</a>';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP XML</title>
</head>

<body>
    <nav>
        <a href="index.php?">Accueil</a>
    </nav>
    <?php echo $sourceXml->page[intval($_GET['id'])]->content; ?>
</body>

</html>