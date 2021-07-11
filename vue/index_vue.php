        <ul>

            <li><a id="there" href="./">ACCEUIL</a></li>
            <li><a href="./film">RECHERCHE</a></li>
            <li><a href="./credits">CRÉDITS</a></li>

        </ul>

    </header>

    <section id="card">
        <img id="closeCard" src="assets/images/close_card.jpg" alt="image d'une croix pour fermer la page">
        <div id="cardContent">

        </div>

    </section>

<section id="big">
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
        <button class="btCard" href="#<?php echo $donnees['titre']; ?>"> <p><span>+</span> En savoir plus</p> </button>
    </div>
</section>

<section class="container">

<button id="btPrev"><p><</p></button>

    <div class="slider">

<?php foreach ($allPic as $Pic): ?>

    <div class="slide" href="#<?php echo $Pic['id_film'] ?>">
        <img src="<?php echo $Pic["images"]; ?>" alt="affiche du films">
    </div>

<?php endforeach; ?>

</div>

<button id="btNext"><p>></p></button>
        
</section>

<script src="assets/script_ajax.js"></script>
<script src="assets/script_carrousel.js"></script>
<script src="assets/script_card_index.js"></script>
<script src="assets/script_close_index.js"></script>