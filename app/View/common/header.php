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
    <link rel="icon" type="image/png" href="public\image\logo.png">
</head>

<body>
    <header>
        <nav class="menu">
            <ul>
                <a href="accueil.php"><img class="logo" src="public/image/logo_groupe.png" width="10%"></a>
                <?php foreach($header as $element => $lien):?>
                <li class="barre"><a href=<?=$lien?>><?=$element?></a></li>
                <?php endforeach?>
            </ul>
        </nav>
    </header>
    <main>