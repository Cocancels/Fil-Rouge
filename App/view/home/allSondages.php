<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/allSondages.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">

    <link href="../public/css/styleNav.css" rel="stylesheet">
    <title>Sondage</title>
</head>

<body>
    <?php require ROOT . "/App/view/navbar.php";
    ?>


    <section id="classements">
        <div class="classements 1">
            <?php foreach ($sondages as $sondage) { ?>
                <div class="classements-content">
                    <h2><?php echo $sondage->titre ?></h2>

                    <a href="?page=sondage&sondageid=<?php echo $sondage->id ?>">Voir le sondage</a>
                </div>
            <?php } ?>


        </div>
    </section>

</body>

</html>