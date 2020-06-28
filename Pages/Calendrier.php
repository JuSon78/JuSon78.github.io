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

        <h1> Calendrier où on mettra nos planning</h1>
        <p> Par exemple quand est-ce que nous sommes chez l'un ou l'autre ou des rendez-vous important etc.. Puis comme ça même
            si on a un doute on peut vérifier ici pour nous aussi </p>

        <h1> WhishList </h1>
        <p> Ici on peut faire comme un barre où on insère du caractère et ça serai retranscris en liste comme un wish liste mais
            des activités que l'on voudrais ensemble sans forcément dire quand et comment mais juste des idées. <br>
            Avec des boutons qui ferai "Ajouter" "Modifier" "Supprimer". </p>

         <?php include"../Style/Footer.php" ?>


    </body>
</html>