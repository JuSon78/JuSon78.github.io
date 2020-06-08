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
            Le 11/05/2020, première fois qu'on se voit officiellement après le déconfinement, je suis content après 2 mois de confinement de te
            retrouver.
        </p>

        <!--Menu à droit-->
        <div id="rubrique">
            <ul>
                <li> <a class="Categorie" href ="../Page_Accueil.php"> Page_Accueil </a> </li>
                <br>
                <li> <a class="Categorie" href ="Page3.php"> Par Date </a> </li>
                <br>
            </ul>
        </div>

        <!--Photo-->
        <div style="margin-left: 10%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/11_05_2020/Nous_Maison.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Les retourvailles
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>


                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/11_05_2020/Moi_dehors.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Toujours aussi bg non ?
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/11_05_2020/Julien_dehors.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Toi oui, il n'y a aucun doute
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/11_05_2020/Julien_assis.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Petite glace du Mcdo pour changer sur les quais de Seine !
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/11_05_2020/Eau.png" alt="Seine" height="400" width="300">
                        <figcaption>
                            Il fait beau, il fait chaud, ca fait du bien de se retrouver sous ce beau temps
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/11_05_2020/Arbre1.png" alt="Arbres" height="400" width="300">
                        <figcaption>
                            Toujours entrain de tester la qualité de mon iPhone 11
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/11_05_2020/Arbre2.png" alt="Arbres" height="400" width="300">
                        <figcaption>
                            Et de 2
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/11_05_2020/Arbre3.png" alt="Arbres" height="400" width="300">
                        <figcaption>
                            Et de 3..
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>


        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>