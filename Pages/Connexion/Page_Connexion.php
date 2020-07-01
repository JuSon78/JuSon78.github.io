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
                             <img src="../../Photos/Logo/Coeur.png" height="40" width="60" id="Logo" alt="Logo"> </a>
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
            define('HOST','127.0.0.1');
            define('DB_name','Site_Web2');
            define('USER','root');
            define('PASS','root');

            try {
                $db = new PDO("mysql:" . HOST . ";dbname" . DB_name, USER, PASS);
                $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $requete = "SELECT * FROM Site_Web2.message";
                $resultat = $db->query($requete);
                try{
                    echo("<div id='boxMessages'>");
                        echo ("<table id='affichageMessages'>");

                        while ($donnees = $resultat->fetch())
                        {
                            $dateJour = str_split($donnees['date'],11)[0];
                            $dateHeure = str_split($donnees['date'],11)[1];
                            echo ("<tr id='message'>");

                            echo("<td>" . $donnees['utilisateur'] . ": </td>");
                            echo("<td>" . $donnees['contenu_message'] ."</td>");
                            echo("<td> le "  . $dateJour . " à " . $dateHeure . "</td>");
                            echo ("</tr>");

                        }
                        echo ("</table>");
                        echo("<form id='formulaire_message' method=\"POST\">
                                <input id='champ_message' type=\"text\" placeholder=\"Tapez ici votre message\" name=\"message\">
                                </br>
                                <input id='bouton_submit_message' type=\"submit\" value=\"Envoyer\">
                            </form>");
                    echo("</div>");
                }
                catch (Exception $e){
                    echo $e;
                }
            } catch (PDOException $e){

                echo $e ->getMessage();
            }

            ?>
        </p>


        <?php include "../../Style/Connexion/Footer_Connexion.php" ?>

    </body>
</html>
