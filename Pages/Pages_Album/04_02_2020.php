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
            Le 04/02/2020, Petite nuit chez moi, bon pas beaucoup de photo mais c'est la première fois que tu dors chez moi donc il faut quand même le relever ahah ;)
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
        <div style="margin-left: 27%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/04_02_2020/Julien_Premiere.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Quel bg ! Toujours timide celui là...
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>


                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/04_02_2020/Julien_Visage.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Ah bah voilà
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/04_02_2020/Julien_Cuisine.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Il prend son bol de céréale et je l'harcèle de photo </br> de bon matin
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <img src="../../Photos/Album_Photos/04_02_2020/Jeux.png" alt="Une personne" height="400" width="300">
                    <figcaption>
                        NOOOOOOON pas Farming Simularteur, bon </br> c'était les débuts c'était sympas
                    </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>