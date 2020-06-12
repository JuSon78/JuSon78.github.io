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

                            <span>
                                <div>
                                     <ul id="liste">
                                        <li> <a class="elementList" href="../Calendrier.php">Calendrier </a>
                                            </li>
                                        <li> <a class="elementList" href="../Album_Photo.php">Photos </a>
                                            </li>
                                        <li> <a class="elementList" href="../Liste_Courses.php"> Liste Course </a>
                                            </li>
                                        <li> <a class="elementList" href="../Achat.php">Achat </a>
                                            </li>
                                        <li> <a class="elementList" href="../Message.php">Message </a>
                                            </li>
                                        <li> <a class="elementList" href="../Autres.php">Autres </a>
                                            </li>
                                    </ul>
                                </div>
                            </span>
                        </div>
                    </span>
        </header>
        <div class="body"> </div>

        <span style="text-align: center"
        <p>
        <h2> Ajouter utilisateur </h2>

        <form method="POST">
            <p> <label>Pseudo :</label> <br>
                <input type="text" placeholder="Entrez votre nom" name="pseudo"> </p>

            <p> <label>Email :</label> <br>
                <input type="email" placeholder="Entrez votre adresse email" name="email"> </p>

            <p> <label> Mot de passe :</label> <br>
                <input type="text" placeholder="Entrez votre mot de passe" name="password"> </p>

            <p> <input class="input_Enregistrer" type="submit" value="Ajouter">
        </form>
        </p>

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


        <?php include "../../Style/Connexion/Footer_Connexion.php" ?>

    </body>
</html>
