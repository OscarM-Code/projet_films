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
    <div>
        <p> <?php echo $fullList["titre"]; ?> </p>
        <p> <?php echo $fullList["sortie"]; ?> </p>
        <p> <?php echo $fullList["realisateur"]; ?> </p>
        <p> <?php echo $fullList["genre"]; ?> </p>
        <p> <?php echo $fullList["synopsis"]; ?> </p>
    </div>
</div>

<?php endforeach; ?>

</section>

<script src="assets/script_navbar.js"></script>