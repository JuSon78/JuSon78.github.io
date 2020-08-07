<?php
// DEMARRAGE DE LA SESSION
session_start();
?>

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
        <!--
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
-->

        <p>
            <?php
            // CONFIG LOCALE
            /*define('HOST','127.0.0.1');
            define('DB_name','Site_Web2');
            define('USER','root');
            define('PASS','root');*/

            $servername = "localhost";
            $username = "id14239712_juson";
            $password = "Wilson-le-plus-beau78";
            $database = "id14239712_site_web";

            if (isset($_SESSION['pseudo'])){ // SI UN PSEUDO EST DEJA DEFINI
                $pseudo = $_SESSION['pseudo'];
                try {
                    $db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                    // set the PDO error mode to exception
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $requete = "SELECT * FROM id14239712_site_web.message";
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
                        echo("<div style='text-align: center'>Pseudo: ". $pseudo."</div>");
                        echo("<form id='formulaire_message' method=\"POST\">
                                <input id='champ_message' type=\"textarea\" placeholder=\"Tapez ici votre message\" name=\"message\">
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
            }
            else{
                if(isset($_POST['pseudo'])){
                    $_SESSION['pseudo'] = $_POST['pseudo'];
                }
                else{
                    echo("<form id='formulaire_message' method=\"POST\">
                                <input id='champ_pseudo' type=\"text\" placeholder=\"Tapez ici votre pseudo\" name=\"pseudo\">
                                </br>
                                <input id='bouton_submit_message' type=\"submit\" value=\"Envoyer\">
                            </form>");
                }
            }



            // SI LE MESSAGE EST ENTRE
            if (isset($_POST['message'])) {
                try{
                    $message = $_POST['message'];
                    $db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                    // set the PDO error mode to exception
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $requete= 'INSERT INTO Site_Web2.message (utilisateur, contenu_message) VALUES(\''.$pseudo .'\',\''.$message.'\')';
                    $resultat = $db->exec($requete);
                    if ($resultat)
                        header("Refresh:0");
                    else
                        echo 'Erreur';

                    unset($_POST['message']);
                }
                catch (PDOException $e) {
                    echo $e;
                }
            }

            ?>
        </p>

        <script>
            element = document.getElementById('affichageMessages');
            element.scrollTop = element.scrollHeight;
        </script>

    </body>
</html>
