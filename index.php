<?php
if (file_exists('source.xml')) {
    $xml = simplexml_load_file('source.xml');
    echo($xml);
} else {
    exit('Echec lors de l\'ouverture du fichier test.xml.');
} 
var_dump($xml);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP XML</title>
</head>
<body>
    
</body>
</html>