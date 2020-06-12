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

        <span style="text-align: center">
        <p>
            <h2> Se connecter </h2>
            <p id="intro"> Bienvenue sur le site, <br>
                pour vous connecter veuillez insérer votre adresse email et votre mot de passe</p>
            <form method="POST">
                <p> <label>Email :</label> <br>
                    <input type="email" placeholder="Entrez votre adresse email" name="email"> </p>

                <p> <label> Mot de passe :</label> <br>
                    <input type="text" placeholder="Entrez votre mot de passe" name="password"> </p>

                <p> <input class="input_Enregistrer" type="submit" value="Se connecter">
            </form>
            <p> si vous n'avez pas encore un compte veuillez vous <a href="Page_inscription.php" id="redirection">inscrire</a>
        </p>
        </span>

        <div class="body"> </div>



        <?php include "../../Style/Connexion/Footer_Connexion.php" ?>

    </body>
</html>
