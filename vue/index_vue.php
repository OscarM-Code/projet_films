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
    <?php
        while ($donnees = $req->fetch())
        {
        ?>
    <section>
    <?php echo $donnees['titre']; ?>
    </section>
    <?php
        }
        $req->closeCursor();
        ?>
</body>
</html>