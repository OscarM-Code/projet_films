<div class="listDiv" href="#<?php echo $fullList['id_film']; ?>">
    <img src="<?php echo $fullList["images"]; ?>" alt="affiche du films">

    <button> <p><span>+</span> En savoir plus</p> </button>
    
    <div>
        <p> <span>Titre: </span> <span class="spanSearch"><?php echo $fullList["titre"]; ?></span> </p>
        <p> <span>Année de sortie: </span> <span class="spanSearch"><?php echo $fullList["sortie"]; ?></span> </p>
        <p> <span>Réalisateur(s): </span> <span class="spanSearch"><?php echo $fullList["realisateur"]; ?></span> </p>
        <p> <span>Genre(s): </span> <span class="spanSearch"><?php echo $fullList["genre"]; ?></span> </p>
    </div>
</div>