<?php 
$title = null;

if (!empty($_GET['title'])) {
    $title = $_GET['title'];
} else {
    $title = "Acceuil";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <header>
        <h1>Notre site de test PHP</h1>
        <nav>
            <a href="index.php?title=Acceuil">Acceuil</a>
            <a href="page1.php?title=page1">page1</a>
            <a href="page2.php?title=page2">page2</a>
        </nav>
    </header>