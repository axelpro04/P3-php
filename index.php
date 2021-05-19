<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>exercice 6 pt3</title>
</head>

<body>
    <?php
    $departments = array(
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme'
    );
    $toto = 'assets/img/toto.jpg'
    ?>
    <?php foreach ($departments as $departmentNumber => $departmentName) { ?>
        <p>Le département <span class="thomas"><?= $departmentName ?></span> a le numéro <span class="thomas2"><?= $departmentNumber ?></span class="thomas2">.</p>
    <?php } ?>
    <img src="<?= $toto ?>">
</body>

</html>