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
            Le 07/03/2020, Week-end chez mon frère à Chartres, je t'ai rejoins à Rambouillet en transport parcours du combattant ^^ heureusement j'ai pas pris le bus pour Ablis, là où j'ai croisé ton père quand tu a voulus me montrer ta maison et que tu aies passé de la 1ère à la 3ème pour accèler d'un coup ahah
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
        <div style="margin-left: 5%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Wilson_Chartres.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Allons visiter cette ville !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Rue_Chartres.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Petites ruelles !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Poupee.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Dommage j'ai pas mis la photo où tu es derrière ahah
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Cathedrale_Vitreaux.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            C'est magnifique !
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div>
                <div style="margin-left: 27%">
                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/07_03_2020/Julien_Feuille.png" alt="Une personne" height="400" width="300">
                            <figcaption>
                                Ahaha avec ton nez rouge ^^
                            </figcaption>
                        </figure>
                    </div>

                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/07_03_2020/Wilson_feuille.png" alt="Voiture" height="400" width="300">
                            <figcaption>
                                De l'autre côté ça donne ça !
                            </figcaption>
                        </figure>
                    </div>

                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/07_03_2020/Jeux_Chartres.png" alt="Une personne" height="400" width="300">
                            <figcaption>
                                Petit jeux de société avant d'aller dormir et rentrer
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>


        <?php include"../../Style/Photos/Footer_Album.php" ?>


    </body>
</html>