<?php

// Requête pour la barre de recherche + modal

require("access.php");

$search = $_POST['s'];
$sth = $library->prepare(
    "SELECT film.titre, film.synopsis, sorties.sortie,
     group_concat(DISTINCT genres.genre) as genres, 
     group_concat(DISTINCT realisateurs.realisateur) as realisateurs
FROM film
INNER JOIN films_has_realisateur ON films_has_realisateur.films_id_film = films.id_film
INNER JOIN realisateurs ON realisateurs.id_realisateur = film_has_realisateur.realisateur_id_realisateur

INNER JOIN films_has_genres ON films_has_genres.films_id_film = films.id_film
INNER JOIN genres ON genres.id_genres = films_has_genres.genres_id_genres

INNER JOIN sorties ON sorties.id_date_de_sortie = films.date_de_sortie_id_date_de_sortie
WHERE film.titre LIKE '%$search%'
GROUP BY films.titre, films.synopsis, films.date_id_date_de_sortie"
);
$sth->execute();


$test = $sth->fetchAll(PDO::FETCH_NUM);
print_r($test);

// Requête pour l'affiche des films aléatoire sur la page d'acceuil + fonction random


$cover = $library->prepare(
    "SELECT films.images
    FROM films
    WHERE films.id_film
    "
);

// Requête pour la page film avec trailer

$movie_page = $library->prepare(
    "SELECT films.titre, films.synopsis, date_de_sortie.date_de_sortie, 
    group_concat(genres.genre) as genre, 
    group_concat(realisateurs.realisateur) as realisateurs, films.images, films.trailer
    FROM films

    INNER JOIN films_has_realisateur ON films_has_realisateur.films_id_film = films.id_film
    INNER JOIN realisateurs ON realisateur.idrealisateur = films_has_realisateur.realisateurs_idrealisateur

    INNER JOIN films_has_genre ON films_has_genre.films_id_film = films.id_film
    INNER JOIN genres ON genres.id_genres = films_has_genres.genres_id_genres

    INNER JOIN date_de_sortie ON date_de_sortie.id_date_de_sortie = films.date_de_sortie_id_date_de_sortie
    WHERE films.images LIKE '???'
    GROUP BY films.titre, films.synopsis, films.images, films.trailer, films.date_de_sortie_id_date_de_sortie"
);

// Requête pour les Genres

$gender_page = $library->prepare(
    "SELECT films.titre
FROM films
INNER JOIN films_has_genres ON films_has_genres.films_id_film = films.id_film
INNER JOIN genres ON genres.id_genre = films_has_genres.genres_idgenre
WHERE genres.genre = '$gender_name'");



// Requête  par réalisateurs
$director_page = $library->prepare(
    "SELECT film.image
    FROM films
    INNER JOIN films_has_realisateur ON films_has_realisateur.films_id_film = films.id_film
    INNER JOIN realisateurs ON realisateurs.idrealisateur = films_has_realisateur.realisateurs_idrealisateur
    WHERE realisateurs.realisateur = '$director_name'"
);

$years_page = $library->prepare(
    "SELECT film.image
    FROM films
    INNER JOIN"
);