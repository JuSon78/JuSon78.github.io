<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message</title>
    <link rel="stylesheet" type="text/css" href="../Style/Header_Footer.css">
    <link rel="stylesheet" type="text/css" href="../Style/Message/Message.css">
    <link rel="stylesheet" type="text/css" href="../Pages/Connexion/Style.css">
</head>
    <body>
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

        <?php
        session_start();
        ?>

        <?php
        include 'Header.php';
        ?>
        <div style="margin-left: 22px">
        <p><b>Ecrire à un ami:</b></p>
        <form action="Message.php" method="POST">
                <p>
                <label>Nom d'utilisateur</label>
                <input name='username' type="text" required>
            </p>
            <input id='submit' type="submit" value="Envoyer la demande d'ami">
            <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1)
                    echo "<p style='color:red'>Vous ne pouvez pas vous envoyer un message</p>";
                else if($err==2)
                    echo "<p style='color:red'>L'utilisateur n'existe pas</p>";
                else if($err==3)
                    echo "<p style='color:red'>Vous êtes déjà ami avec cette personne, ou une invitation est en attente d'acceptation</p>";
            }
            ?>
            </div>
        </form>
        </br>
        <div id="messages_window">
            <div id="conversations_panel" class="block">
                <div class="conversation"></div>
            </div>
            <div id="message_text_field" class="block">
                <form>
                    <input type="text">
                    <input type="submit" value="Envoyer">
                </form>
            </div>
            <br clear="both" />
        </div>
        </body>
</html>

        <?php include"../Style/Footer.php" ?>

    </body>
</html>