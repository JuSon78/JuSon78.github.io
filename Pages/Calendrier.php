<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calendrier</title>
    <link rel="stylesheet" type="text/css" href="../Style/Header_Footer.css">
    <link rel="stylesheet" type="text/css" href="../Style/Calendrier/Calendrier.css">
</head>
    <body>
        <!--Header-->
        <?php include"../Style/Header.php" ?>
        <div style="margin-left: 5px">
            <h1>Ajouter une idée d'activité</h1>
            <form method="POST">
                <p>
                    <label>Nom d'utilisateur</label>
                    <input name='username' type="text" required>
                </p>
                <p>
                    <label>Mot de passe</label>
                    <input name='password' type="password" minlength="3" required>

                </p>
                <input id='submit' type="submit" value="Se connecter">
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
    <?php
    // ON VERIFIE SI UN PSEUDO ET UN PASSWORD SONT DEJA DEFINIS
    if (isset($_POST['username']) && isset($_POST['password'])) {

        $username = $_POST['username'];
        $password = hash('sha512', $_POST['password']);

        if (verif_connexion($username, $password)) { // SI LE COUPLE PSEUDO MDP ENTREE EXISTE BIEN
            maj_derniere_connexion($username);  // MISE A JOUR DE LA DATE DE DERNIERE CONNEXION
            header('Location: ../Page_Accueil.php');    // REDIRECTION VERS LA PAGE ACCUEIL.PHP
        }
        else {    // SI LE COUPLE PSEUDO MDP N'EXISTE PAS
            header('Location: Connexion.php?erreur=1'); // LE COUPLE PSEUDO ET MOT DE PASSE ENTREE EST INCORRECT
        }


    }
    ?>
</html>