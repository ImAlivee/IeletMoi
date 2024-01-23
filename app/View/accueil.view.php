 <section class="description">
     <div class="texte">
         <h1 id="Page">IEL & MOI</h1>
         <h3>Vers les autres, pas à pas</h3>
         <p>En quoi consiste notre association : </p>
         <p>collectif 'iel et moi' a constaté que le mauvais emploi des pronoms
         <p>impacte quotidiennement une partie de la communauté LGBTQIA+.</p>
         <p>Nous avons pour but de sensibiliser à ce sujet avec des témoignages retranscrits sous forme de BD podcasts et à l'écrit.</p>
         <p>Notre but : transmettre des connaisance sur la culture LGBTQIA+ et les notions liée aux identitées de genre
         <p>et à l'usage des nouveaux pronoms aux jeunes alliées de 14 à 25 ans.</p>
     </div>
 </section>

 <section class="preview">
     <div class="sujets" id="bd">
         <h2>Bandes Dessinées</h2>
         <img src="<?php echo max($temoignages_bd)['url']  ?>">
         <button class="BD" onclick="window.location.href = '<?php echo max($temoignages_bd)['link'] ?>'">Derniere BD</button>
     </div>
     <div class="sujets" id="Temoignages">
         <h2>Témoignages</h2>
         <h3> </h3>
         <p><?php echo max($temoignages_ecrit)['resume'] ?></p>
         <button class="Témoignage" onclick="window.location.href = '<?php echo max($temoignages_ecrit)['link'] ?>'">Dernier Témoignage</button>
     </div>
     <div class="sujets" id="audio">
         <h2>Podcast</h2>
         <img src="<?php echo max($temoignages_oral)['img'] ?>">
         <button onclick="window.location.href = '<?php echo max($temoignages_oral)['link'] ?>'">Dernier Podcast</button>
     </div>
 </section>

 <section class="mascotte">
     <h1>Voici A : </h1>
     <div><img src="public\image\accueil\charadesign_a.PNG" width="20%"></div>
     <div class="droite">
         <h2>A est notre Mascotte</h2>
         <p>Iel respresente les personnes Non-Binaire, Agenre, Trans ou encore Queer. C'est aussi lia* personnage principal(e) de notre vidéo de sentibilisation, Dans celle-ci lia* est effectivement non-binaire.</p>
         <p>Lia* : signifie "elle" et "lui". C'est le pronoms personnels sujet qui permet de designé les personnes non-binaire ou Agenre, sans utiliser le genre masculin ou féminin !</p>
     </div>
 </section>

 <section class="video">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/-MF8HU2GZ-8?si=Edao5AAvVoTvHU8Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
 </section>