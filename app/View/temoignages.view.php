<section id = "ecrit">
    <h2>Témoignages écrits</h2>


    <?php
        foreach ($temoignages_ecrit as $ecrit)  :
    ?>
    
    <div class = "temoignage">
        <img class ="icone" src ="public\Image\Temoignage\Icone_livre.svg"> 
        <div class = "description">
            <h3><?= $temoignages_ecrit['1']['titre'] ?></h3>
            <p><?= $temoignages_ecrit['1']['temoignage'] ?></p>
            <span>
                <?php 
                        $temoignant = $temoignages_ecrit['1']['temoignant'];
                        echo $temoignant['prénom'] . ' '  . $temoignant['age'] . ' ans';
                    ?>
            </span>
        </div>
    </div>
    <?php endforeach; ?>

</section>

<section id="audio">
    <h2>Témoignages audio</h2>

    <?php 
    shuffle($temoignages_oral);
    $deuxTemoignages = array_slice($temoignages_oral, 0, 2);

    foreach ($deuxTemoignages as $temoignage) : 
    ?>
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
<section  id ="BD">
    <h2>Témoignages BD</h2>

    <h3><?= $temoignages_bd['1']['titre'] ?></h3>

    <?php
   $slide = $temoignages_bd['1']['slides'];
    foreach($slide as $slides) :
    ?>
        <div class="slider">
            <div id="slide">
            <img src="public/image/BD/<?= $slide ?>">
            </div>
        </div>
    <?php endforeach; ?>
</section>