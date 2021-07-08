<?php

function getMovie($id)
{
    require 'access.php';
	try
	{
	    $bdd = new PDO($dsn, $username, $password);
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
    
    $req = $bdd->prepare("SELECT films.titre, films.synopsis, films.images, sorties.sortie,
    group_concat(genres.genre) as genre,
    group_concat(DISTINCT realisateurs.realisateur) as realisateur
    FROM films
    INNER JOIN films_has_genres ON films_has_genres.films_id_film = films.id_film
    INNER JOIN genres ON films_has_genres.genres_id_genres = id_genres
    
    INNER JOIN films_has_realisateur ON films_has_realisateur.films_id_film = films.id_film
    INNER JOIN realisateurs ON films_has_realisateur.realisateur_id_realisateur = id_realisateur
    
    INNER JOIN sorties ON films.date_id_date_de_sortie = sorties.id_date_de_sortie
    WHERE id_film = :id
    GROUP BY films.titre, films.synopsis, films.images, films.date_id_date_de_sortie"
    );
    $req->execute(["id" => $id]);

    return $req;
	
}
?>