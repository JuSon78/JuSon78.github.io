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
                <> <b>Info sur cette æpage: </b>
                Ce site est en cours de préparation est à but pour pour partager de bons moments et de l'entraînement à la programmation.  Cette page est dédié à l'album photo et à regrouper toutes nos photos
            </div>
        </div>


        <!--Message 2-->
        <p class="message2">
            Le 06/06/2020, Aujourd'hui premier jour où tu rencontre ma famille, je suis trop content.. tu stress bcp, c'est trop marrent
            Je me sens bien avec toi.. </br>
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
        <div style="margin-left: 12%; margin-right: auto; width: 50%; margin-top: 10px">
            <div style="margin-left: 10%;">
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/06_06_2020/Julien.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Ta petite tête
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/06_06_2020/Table.png" alt="Table" height="400" width="300">
                        <figcaption>
                            Hmmmm miam !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/06_06_2020/Monde.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Toute ma famille
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div style="margin-left: 25%;">
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/06_06_2020/Karaoke.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Karaoke
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/06_06_2020/Julien2.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                           ❣️
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>