</main>
<?php include 'database.php'; ?>
<footer id="footer">
    

   <?php foreach($reseaux as $icone) : ?>
    <div class="bas"> 
        
            
         <?php if (isset($icone['image'])) {
         $image = $icone['image'];
          } else {
         $image = 'default.png';
         }
         ?>    
        <a href ="<?= $icone['url'] ?>">
           <figure>
              <img src="<?= $icone['image'] ?>" alt="Notre <?= $icone['title'] ?>">
           </figure>
        </a>
    
    </div>
    <?php endforeach ?>

    <?php foreach($menu as $infos) : ?>
      <div class="bas">
        <a href ="<?= $infos['url'] ?>"> <?= $infos['title'] ?></a>
     </div>
    <?php endforeach ?>


    </footer>
</body>
</html>
