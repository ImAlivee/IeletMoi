<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/CSS/Emilie.css">
    <?php if (isset($css)) : ?>
        <link href="public/CSS/<?= $css ?>" rel="stylesheet">
    <?php endif ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Arvo&family=Concert+One&display=swap" rel="stylesheet">
<link rel = "icon" type = "image/png" href = "public\Image\Emilie\modele fleur foncée.png">
    <title>Tiny.Emii</title>

<header>
        <nav class="menu">
            <ul>
                <div class="menug">
                    <li id="desc"><a href="#description" >Description</a></li>
                    <li><a href="#creations" id="crea">Mes créations</a></li>
                </div>
                <div class="menud">
                    <li><a href="#parcours" id="par">Mon parcours</a></li>
                    <li><a href="#contact" id="cont">Contact</a></li>
                </div>
            </ul>
        </nav>
        <img src="public/image/Emilie/Logo.png" alt="Logo de Tiny Emii" class="logo"/>
    </header>
    <main>