<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PAGE FILM</h1>
    <?php
    if(isset($url[3]) && !empty($url[3])){
        ?> <h2> <?php echo "Le film est $url[3]" ?> </h2> <?php
    }
    ?>
</body>
</html>