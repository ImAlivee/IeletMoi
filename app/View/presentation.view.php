<h2>Notre Equipe</h2>
<div class="equipe">
    <?php foreach ($membres as $membre) : ?>
        <div class="carte">
            <a href="<?= $membre['url'] ?>">
                <?php
                if (isset($membre['photo'])) {
                    $photo = $membre['photo'];
                } else {
                    $photo = 'defaut.png';
                }
                ?>
                <figure>
                    <img src="<?= $membre['photo'] ?>" alt="photo de <?= $membre['prenom'] ?>">
                </figure>
                <div class="Informations">
                    <p class="Nom"> <?= $membre['prenom'] ?> <?= $membre['nom'] ?> </p>
                </div>
            </a>
        </div>
    <?php endforeach ?>
</div>