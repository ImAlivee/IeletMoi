<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/CSS/Main.css">
    <?php if (isset($css)) : ?>
        <link href="public/CSS/<?= $css ?>" rel="stylesheet">
    <?php endif ?>
    <title>IEL & MOI</title>
    <link rel="icon" type="image/png" href="public\Image\logo.png">
</head>

<body>
    <header>
        <nav class="menu">
            <ul>
                <a href="Accueil.php"><img class="logo" src="public/image/logo_groupe.png" width="10%"></a>
                <li class="barre"><a href="Contact.php">Contact</a></li>
                <li class="barre"><a href="Presentation.php">Présentation</a></li>
                <li class="barre"><a href="Temoignages.php">Témoignages</a></li>
                <li class="barre"><a href="formulaire.php">Formulaire</a></li>
                <li class="barre"><a href="Accueil.php">Accueil</a></li>
            </ul>
        </nav>
    </header>
    <main>