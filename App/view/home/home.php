<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/style.css" rel="stylesheet">
    <link href="../public/css/styleNav.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <?php require ROOT . "/App/view/navbar.php";  ?>

    <section id="sondages">
        <div id="bg">
            <a class="sondages" href="?page=allSondages">
                <p>Accéder aux sondages</p>
            </a>
        </div>
    </section>

    <section id="classements">
        <div id="center">
            <h1 id="classements-title">Classements les plus récents</h1>
        </div>
        <div class="classements 1">
            <?php foreach ($sondages as $sondage) { ?>
                <div class="classements-content">
                    <h2><?php echo $sondage->titre ?></h2>

                    <a href="?page=sondage&sondageid=<?php echo $sondage->id ?>">Voir le sondage</a>
                </div>
            <?php } ?>


        </div>
    </section>

    <?php require ROOT . "/App/view/home/footer.php";  ?>

</body>

</html>