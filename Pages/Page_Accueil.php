<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Accueil</title>
    <link rel="stylesheet" type="text/css" href="../Style/Page_Accueil.css">
    <link rel="stylesheet" type="text/css" href="../Style/Header_Footer.css">
    <script src="../JavaScript/Java_Accueil.js" defer></script>
</head>
    <body>
        <!--Header-->
        <header>
                <span>
                    <div id="Bande">
                        <span>
                         <a href="Page_Accueil.html"> <img src="../Photos/Logo/Coeur.png" height="40" width="60" id="Logo" alt="Logo"> </a>
                        </span>

                        <span>
                            <div>
                                <ul  id="liste">
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
                                </ul>
                            </div>
                        </span>
                    </div>
                </span>
        </header>

        <?php include "../Style/Footer.php" ?>


    </body>
</html>