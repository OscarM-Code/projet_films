
<div>
    <img src="<?php echo $donnees['images']; ?>">
</div>
<div>
        <h2> <?php echo $donnees['titre']; ?> </h2>
        <h3>Réalisé par:</h3>
        <p> <?php echo $donnees['realisateur']; ?> </p>
        <h3>Sorti en:</h3>
        <p> <?php echo $donnees['sortie']; ?> </p>
        <h3>Genre(s): </h3>
        <p> <?php echo $donnees['genre']; ?></p>
        <h3>Synopsis: </h3>
        <p class="syn"> <?php echo $donnees['synopsis']; ?></p>
        <button> <p><span>+</span> En savoir plus</p> </button>
</div>