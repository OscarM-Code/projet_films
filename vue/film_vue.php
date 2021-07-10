<ul>

            <li><a href="./">ACCEUIL</a></li>
            <li><a id="there" href="./film">RECHERCHE</a></li>
            <li><a href="./credits">CRÉDITS</a></li>

        </ul>

    </header>
<input type="text" id="search" placeholder="Rechercher un film par Titres, Dates de sorties, Genres, ou Réalisateurs 🔍">

<section id="listFilm">

<?php foreach ($list as $fullList): ?>

<div class="listDiv" href="#<?php echo $fullList["id_film"]; ?>">
    <img src="<?php echo $fullList["images"]; ?>" alt="affiche du films">

    <button> <p><span>+</span> En savoir plus</p> </button>
    
    <div>
        <p> <span>Titre: </span> <span class="spanSearch"><?php echo $fullList["titre"]; ?></span> </p>
        <p> <span>Année de sortie: </span> <span class="spanSearch"><?php echo $fullList["sortie"]; ?></span> </p>
        <p> <span>Réalisateur(s): </span> <span class="spanSearch"><?php echo $fullList["realisateur"]; ?></span> </p>
        <p> <span>Genre(s): </span> <span class="spanSearch"><?php echo $fullList["genre"]; ?></span> </p>
    </div>
</div>

<?php endforeach; ?>

</section>

<script src="assets/script_navbar.js"></script>