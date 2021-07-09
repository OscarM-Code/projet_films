<section id="big">
    <div>
        <img src="<?php echo $donnees['images']; ?>">
    </div>
    <div>
        <p> <?php echo $donnees['titre']; ?> </p>
        <p>Par:</p>
        <p> <?php echo $donnees['realisateur']; ?> </p>
        <p>Genre: </p>
        <p> <?php echo $donnees['genre']; ?></p>
        <p>Synopsis: </p>
        <p> <?php echo $donnees['synopsis']; ?></p>
    </div>
</section>

<section class="container">

<button id="btPrev"><</button>

    <div class="slider">

<?php foreach ($allPic as $Pic): ?>

    <div class="slide" href="#<?php echo $Pic['id_film'] ?>">
        <img src="<?php echo $Pic["images"]; ?>" alt="affiche du films">
    </div>

<?php endforeach; ?>

</div>

<button id="btNext">></button>
        
</section>