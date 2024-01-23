<?php
include 'database.php';
?>

<div class="fond">
  <h1>Où nous retrouver</h1>

  <div id="cases">
    <section class="gauchem">
      <h2>Notre adresse</h2>
      <p>Si vous souhaitez nous contacter pour nous donner votre témoignage ou avoir des informations
        suplémentaires vous pouvez nous trouver Bâtiment H de l'IUT Sénart-Fontainebleau à l'adresse:
      </p>
      <P>240 Rue de la Motte 77550 Moissy-Cramayel Franc</P>
      <img src="public\image\imagescontacts\map.png" alt="Google Map" id="map">

      <h2>Nos réseaux</h2>
      <ul>
        <?php foreach ($reseau as $media) : ?>
          <li class="logos"><a href=<?= $media['url'] ?>><img src=<?= $media['image'] ?> alt="" class="logoo"></a></li>
        <?php endforeach ?>
      </ul>
    </section>

    <section class="droitem">

      <h2>Nous envoyer un message</h2>

      <form id="contact-us">

        <div class="form-group">
          <label id="name-label" for="nom">Nom</label> <br>
          <input type="text" name="nom" id="nom" class="form-control" placeholder="Jacob" required />
        </div>

        <div class="form-group">
          <label id="firstname-label" for="firstname">Prénom</label> <br>
          <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Lola" required />
        </div>

        <div class="form-group">
          <label id="email-label" for="email">Email</label> <br>
          <input type="email" name="email" id="email" class="form-control" placeholder="lola.jacob@mail.fr" required />
        </div>

        <div class="form-group">
          <p class="message">Message</p> <br>
          <textarea id="comments" class="input-textarea" name="comment" placeholder="Veuillez taper votre message ..." required></textarea>
        </div>

        <div class="form-group">
          <button type="submit" id="submit" class="submit-button">
            Envoyer
          </button>
        </div>

      </form>
    </section>
  </div>
</div>