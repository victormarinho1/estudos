<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    require_once('Lutador.php');
    $l = array();
    $l[0] = new Lutador("Pretty Boy",
    "França",
    31,1.75,90.9,
    11,3,1);

    $l[1] = new Lutador("Putscript",
    "Brasil",
    29,1.68,57.8,
    14,2,3);

    $l[2] = new Lutador('Snapshadow',
    "EUA",
    35,1.65,80.9,
    12,2,1 );

    $l[3] = new Lutador("Dead Code",
    "Austrália", 28, 1.93,
    81.6, 13,0,2);

    $l[0]->status();
    $l[1]->status();
    $l[2]->status();
    $l[3]->status();
    
    ?>

</body>
</html>