<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message</title>
    <link rel="stylesheet" type="text/css" href="../Style/Header_Footer.css">
    <link rel="stylesheet" type="text/css" href="../Style/Autres/Autres.css">
</head>
    <p>
        <!--Header-->
        <header>
            <span>
                <div id="Bande">
                    <span>
                     <a href="Page_Accueil.php"> <img src="../Photos/Logo/Coeur.png" height="40" width="60" id="Logo" alt="Logo"> </a>
                    </span>

                    <span>
                        <div>
                             <ul id="liste">
                                <li> <a class="elementList" href="Calendrier.php">Calendrier </a>
                                    </li>
                                <li> <a class="elementList" href="Album_Photo.php">Photos </a>
                                    </li>
                                <li> <a class="elementList" href="Liste_Courses.php"> Liste Course </a>
                                    </li>
                                <li> <a class="elementList" href="Achat.php">Achat </a>
                                    </li>
                                <li> <a class="elementList" href="Message.php">Message </a>
                                    </li>
                                <li> <a class="elementList" href="Autres.php">Autres </a>
                                    </li>
                            </ul>
                        </div>
                    </span>
                </div>
            </span>
        </header>

    <p>
    <h1>liste des utilisateurs du site </h1>
        <?php include"DataBase.php" ?>
    </p>

    <p>
    <h1>Ajouter utilisateur</h1>
    <form method="POST">
        <label>Pseudo</label> <input type="text" name="pseudo">
        <label>Email</label> <input type="email" name="email">
        <label>PassWord</label> <input type="text" name="password">
        <br>
        <input type="submit" value="Ajouter">
    </form>
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
        </p>


        <?php include"../Style/Footer.php" ?>

    </body>
</html><?php
