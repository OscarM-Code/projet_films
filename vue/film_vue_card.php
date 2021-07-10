
<div>
    <img src="<?php echo $card['images']; ?>">
    
</div>
<div>
        <h2> <?php echo $donnees['titre']; ?> </h2>
        <h3>Réalisé par:</h3>
        <p> <?php echo $donnees['realisateur']; ?> </p>
        <h3>Sorti en:</h3>
        <p> <?php echo $card['sortie']; ?> </p>
        <h3>Genre(s): </h3>
        <p> <?php echo $i; ?> </p>
        <p> <?php echo $card['genre']; ?></p>
        <h3>Synopsis: </h3>
        <p class="syn"> <?php echo $card['synopsis']; ?></p>
</div>