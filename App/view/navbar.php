<nav>
    <img src="../public/img/burger.png" alt="burger" id="burger-icon">

    <a href="?page=home">Home</a>
    <?php if (!$_SESSION) { ?>
        <a href="?page=connexion">Connexion</a>
        <a href="?page=inscription">Inscription</a>

    <?php } ?>

    <?php
    if ($_SESSION) { ?>
        <?php
        if ($_SESSION['email'] == "admin@admin.com") { ?>
            <a href="?page=admin">Admin</a>
        <?php }
        ?>
        <a href="?page=editProfil">Compte: <?php echo ($_SESSION['pseudo']) ?></a>
        <a href="?page=amis">Amis</a>
        <a href="?page=deconnexion">Deconnexion</a>


    <?php }
    ?>


</nav>