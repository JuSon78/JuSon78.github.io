<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Message</title>
    <link rel="stylesheet" type="text/css" href="../Style/Header_Footer.css">
    <link rel="stylesheet" type="text/css" href="../Style/Autres/Autres.css">
</head>
    <body style=" background: url('../Photos/Autres/Fond.jpg') ">
    <!--Header-->
    <?php include"../Style/Header.php" ?>

        <div class="body"> </div>
        <span style="text-align: center ">
        <p>
        <h1>liste des utilisateurs du site </h1>
            <?php include"DataBase.php" ?>
        </p>
        </span>

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


            <?php include"../Style/Footer.php" ?>

    </body>
</html>
