<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photos</title>
    <link rel="stylesheet" type="text/css" href="../Style/Header_Footer.css">
    <link rel="stylesheet" type="text/css" href="../Style/Photos/Photo.css">
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

        <!--Message-->
        <div class="message" STYLE="padding-top: 20px">
            <div>
                <> <b>Info sur cette page: </b>
                Ce site est en cours de préparation est à but pour pour partager de bons moments et de l'entraînement à la programmation.  Cette page est dédié à l'album photo et à regrouper toutes nos photos
            </div>
        </div>

        <!--Message 2-->
        <p class="message2">
            Découvrez nos superbes photos pleins de souvenirs afin de se mémorer ou se re-mémorer ces moments. Déjà pleins d'évènements s'est passé et encore d'autre se passeront.
            Alors si tu es prêt je te laisse parcourir ce site avec plaisir ! Bon visionnage.
        </p>

        <!--Menu à droit-->
        <div id="rubrique">
            <ul class="Bande_Rubrique">
                <li class="Bande_Rubrique"> <a class="Bande_Rubrique" href ="Pages_Album/Page2.php"> Voir les dates  </a> </li>
                </br>
            </ul>
        </div>

        <!--Photo-->
        <div style="margin-left: 25%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../Photos/Album_Photos/Julien2.jpg" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Une ptite princesse
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement" style="width: 100px;"></div>
                <div class="rangement">
                    <figure>
                        <img src="../Photos/Album_Photos/Wilson2.jpg" alt="Une personne" height="400" width="300">
                        <figcaption>
                            à Chartres
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div>
                <div class="rangement">
                    <figure>
                        <img src="../Photos/Album_Photos/Julien.jpg" alt="Une personne" height="400" width="300">
                        <figcaption>
                            En mode beau-gosse
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement" style="width: 100px;"></div>
                <div class="rangement">
                    <figure>
                        <img src="../Photos/Album_Photos/Wilson.jpg" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Pose en public
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <?php include "../Style/Footer.php" ?>

    </body>
</html>