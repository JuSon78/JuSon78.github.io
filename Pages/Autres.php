<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Message</title>
    <link rel="stylesheet" type="text/css" href="../Style/Header_Footer.css">
    <link rel="stylesheet" type="text/css" href="../Style/Autres/Autres.css">
</head>
    <body style=" background: url('../Photos/Autres/Fond.jpg'); background-repeat:no-repeat; background-size: 1500px ">
        <!--Header-->
        <?php
        include"../Style/Header.php";
        if (!droit_admin($_SESSION['username'])) {
            echo "<p id='erreur'> vous n'avez pas les droits !!!!</p>";
            header( "refresh:3;url=Page_Accueil.php" );
            return false;
        }
        ?>
        <!--Formulaire Liste utilisateurs-->
        <span style="text-align: center ">
            <p>
                <h1>liste des utilisateurs du site </h1>
                <?php include"DataBase.php" ?>
            </p>
        </span>


        <!--Formulaire suppression utilisateurs-->
        <span style="text-align: center"
            <p>
                <h2>Supprimer utilisateur</h2>
                <form method="POST">
                    <p> <label> Pseudo :</label> <br>
                        <input type="text" placeholder="Entrez le pseudo que vous voulez supprimer"  name="suppression_utilisateur"> </p>

                    <p> <input class="input_Enregistrer" type="submit" value="Supprimer"> </p>
                </form>
            </p>
        </span>

        <p>
            <?php

            if (isset ($_POST['suppression_utilisateur'])) {
                Supprimer_utilisateur($_POST['suppression_utilisateur']);

            }
            ?>
        </p>
        <br>

        <!--Footer-->
        <?php include"../Style/Footer.php" ?>
    </body>
</html>
