<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Album</title>
    <!--Je vais mettre le style de police sur une page CSS prédéfinie-->
    <link rel="stylesheet" type="text/css" href="../../Style/Photos/Album.css">
</head>
    <body>

        <!--Message-->
        <div class="message">
            <div>
                <> <b>Info sur cette page: </b>
                Ce site est en cours de préparation est à but pour pour partager de bons moments et de l'entraînement à la programmation.  Cette page est dédié à l'album photo et à regrouper toutes nos photos
            </div>
        </div>

        <!--Message 2-->
        <p class="message2">
            Le 01/02/2020, Deuxième journée avec toi, cette journée est chargé en activité.. ahh tu devais rencontrer Maryne ce jour-là..
            Patin à glace, Bowling..
            Je me sens bien avec toi..
        </p>

        <!--Menu à droit-->
        <div id="rubrique">
            <ul>
                <li> <a class="Categorie" href ="../Page_Accueil.php"> Page_Accueil </a> </li>
                </br>
                <li> <a class="Categorie" href ="Page2.php"> Par Date </a> </li>
                </br>
            </ul>
        </div>

        <!--Photo-->
        <div style="margin-left: 25%; margin-right: auto; width: 50%; margin-top: 30px">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/01_02_2020/Julien_Bowling.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Pourtant tu as du style, dommage ;)
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/01_02_2020/Score_Bowling.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            On s'y attendait quand même !
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>