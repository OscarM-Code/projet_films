<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOME PAGE</h1>
    <input type="number" placeholder="id film">
    <?php
        while ($donnees = $req->fetch())
        {
        ?>
    <section>
    <img src="<?php echo $donnees['images']; ?>">
    </section>

    <p><?php 
    echo $donnees['realisateur']; ?></p>
    <?php
        }
        $req->closeCursor();
        ?>

        <script src="../ressource/script.js"></script>
</body>
</html>