<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Message</title>
    <link rel="stylesheet" type="text/css" href="../../Style/Header_Footer.css">
    <link rel="stylesheet" type="text/css" href="../../Style/Connexion/Connexion.css">
</head>
    <body style=" background: url('../../Photos/Autres/Fond.jpg') ">
        <!--Header-->
        <header>
                    <span>
                        <div id="Bande">
                            <span>
                             <a href="../Page_Accueil.php"> <img src="../../Photos/Logo/Coeur.png" height="40" width="60" id="Logo" alt="Logo"> </a>
                            </span>
                        </div>
                    </span>
        </header>
        <div class="body"> </div>

        <span style="text-align: center"
        <p>
        <h2> S'inscrire </h2>

        <form method="POST">
            <p> <a href="Page_inscription.php"> <bouton class="input_Enregistrer"> Inscription </bouton> </a>
        </form>
        </p>

        <p>
        <h2>Se connecter</h2>
        <form method="POST">
            <p> <a href="Page_connecter.php"> <bouton class="input_Enregistrer"> Se connecter </bouton> </a>
        </form>
        </span>


        <p>
            <?php
            if (isset($_POST['pseudo'])) {
                try{
                    $pseudo = $_POST['pseudo'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $db = new PDO("mysql:" . HOST . ";dbname" . DB_name, USER, PASS);
                    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $requete='INSERT INTO Site_Web.user (pseudo, email, password) VALUES(\''.$pseudo.'\',\''.$email.'\',\''.$password.'\')';
                    $resultat = $db->exec($requete);
                    if ($resultat)
                        echo 'utilisateur a été ajouté';
                    else
                        echo 'Erreur';
                }
                catch (PDOException $e) {
                    echo $e;
                }
            }
            ?>
        </p>


        <?php include "../../Style/Connexion/Footer_Connexion.php" ?>

    </body>
</html>
