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
            Le 07/03/2020, Week-end chez mon frère à Chartres, je t'ai rejoins à Rambouillet en transport parcours du combattant ^^ heureusement j'ai pas pris le bus pour Ablis, là où j'ai croisé ton père quand tu a voulus me montrer ta maison et que tu aies passé de la 1ère à la 3ème pour accèler d'un coup ahah  </br>
            (Il y a une suite de page en bas à droite)
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
        <div style="margin-left: 9%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Julien_Voiture.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Après t'avoir retrouvé difficilement à Rambouillet direction Chartres
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Medy_Photo.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Voilà mon frère avec son nouvel appareil photo qui m'harcèle déjà
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Nous_Photo.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Go visiter Chartres !
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Chartres.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Très belle ville !
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Julien_Assis.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Toujours gentils à accepter de poser pour moi !
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Nous_Assis.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Petite photo souvenir ! :D
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Medy_Antoine.png" alt="Voiture" height="400" width="300">
                        <figcaption>
                            Regarde mon zoom comment il est bien ahah
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Julien_Photo.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Qui fait pareil du coup ? Julien.. T'es trop mignon
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <div style="float: right";"> <a id="Suite" href="Suite_07_03_2020.php"> Suite </a> </div>


        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>