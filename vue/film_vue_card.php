
<div>
    <img src="<?php echo $card['images']; ?>">
    
</div>
<div>
        <h2> <?php echo $card['titre']; ?> </h2>

        <div class="divO">
            <div>
                <h3>Réalisé par:</h3>
                <p> <?php echo $card['realisateur']; ?> </p>
                <h3>Sorti en:</h3>
                <p> <?php echo $card['sortie']; ?> </p>
                <h3>Genre(s): </h3>
                <p> <?php echo $i; ?> </p>
                <p> <?php echo $card['genre']; ?></p>
            </div>
            <div>
                <h3>Synopsis: </h3>
                <p class="syn"> <?php echo $card['synopsis']; ?></p>
            </div>
        </div>
</div>