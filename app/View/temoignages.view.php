<section  id ="BD">
<h3>Titre de la BD</h3>

<div>
    <div class="slider">
    <div id="slide-1">
      <img src="public\Image\BD\1.png">
    </div>
    <div id="slide-2">
    <img src="public\Image\BD\2.png">
    </div>
    <div id="slide-3">
    <img src="public\Image\BD\3.png">
    </div>
    <div id="slide-4">
    <img src="public\Image\BD\4.png">
    </div>
    <div id="slide-5">
    <img src="public\Image\BD\5.png">
    </div>
    <div id="slide-6">
    <img src="public\Image\BD\6.png">
    </div>
    <div id="slide-7">
    <img src="public\Image\BD\7.png">
    </div>
    <div id="slide-8">
    <img src="public\Image\BD\8.png">
    </div>
    </div>
</div>

</section>

<section id = "ecrit">
    <h2>Témoignages écrits</h2>

    <div class = "temoignage">
        <img class ="icone" src ="public\Image\Temoignage\Icone_livre.svg"> 
        <div class = "description">
            <h3>Titre du témoignage</h3>
            <p>le résumé du témoignage</p>
            <span>Nom, prénom, age (ou anonyme)</span>
        </div>
    </div>

    <div class = "temoignage">
        <img class ="icone" src ="public\Image\Temoignage\Icone_livre.svg"> 
        <div class = "description">
            <h3>Titre du témoignage</h3>
            <p>le résumé du témoignage</p>
            <span>Nom, prénom, age (ou anonyme)</span>
        </div>
    </div>

</section>

<section id = "audio">
    <h2>Témoignages audio</h2>

    <div class = "temoignage">
        <img class ="icone" src ="public/Image/Temoignage/Icone_audio.svg"> 
        <audio src="<?php echo max($temoignages_oral)['audio']?>" controls></audio>
        <div class = "description">
            <p><?php echo max($temoignages_oral)['resume']?></p>
            <span><?php echo ($temoignages_oral)['auteur']?></span>
        </div>
    </div>

<?php foreach ($temoignages_oral as $temoignage) : ?>
    <div class="temoignage">
        <img class="icone" src="public/Image/Temoignage/Icone_audio.svg"> 
        <audio src="<?php echo $temoignage['audio']; ?>" controls></audio>
        <div class="description">
            <p><?php echo $temoignage['resume']; ?></p>
            <span>
                <?php 
                    $auteur = $temoignage['auteur'];
                    echo $auteur['nom'] . ' ' . $auteur['prenom'] . ', ' . $auteur['age'] . ' ans';
                ?>
            </span>
        </div>
    </div>
<?php endforeach; ?>

    </section>
    