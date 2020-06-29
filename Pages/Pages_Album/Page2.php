<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Album</title>
    <!--Je vais mettre le style de police sur une page CSS prédéfinie-->
    <link rel="stylesheet" type="text/css" href="../../Style/Photos/Photo.css">
    <link rel="stylesheet" type="text/css" href="../../Style/Header_Footer.css">
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
            Découvrez nos superbes photos pleins de souvenirs afin de se mémorer ou se re-mémorer ces moments. Déjà pleins d'évènements s'est passé et encore d'autre se passeront.
            Alors si tu es prêt je te laisse parcourir ce site avec plaisir ! Bon visionnage.
        </p>



        <!--Menu à droit-->
        <div id="rubrique">
            <ul>
                <li> <a class="Categorie" href ="../Page_Accueil.php"> Page_Accueil </a> </li>
                </br>
            </ul>
        </div>

        <!--Photo-->
        <div style="margin-left: 0; margin-right: 0; width: 50%; margin-top: 10px">
            <div>
                <div>
                    <div class="rangement">
                        <figure> <!-- onclick="Redirection()">-->
                            <img src="../../Photos/Album_Photos/25_01_2020/Julien_Mcdo.png" alt="Une personne" height="400" width="300">
                            <figcaption class="Text_Image">
                                <a style="text-decoration: none; color: #00008b" href="25_01_2020.php"> 25/01/2020 </a>
                            </figcaption>
                        </figure>
                    </div>


                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/01_02_2020/Julien_Patin.png" alt="Une personne" height="400" width="300">
                            <figcaption>
                                <a style="text-decoration: none; color: darkblue" href="01_02_2020.php"> 01/02/2020 </a>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/04_02_2020/Julien_Cuisine.png" alt="Une personne" height="400" width="300">
                            <figcaption>
                                <a style="text-decoration: none; color: darkblue" href="04_02_2020.php"> 04/02/2020 </a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/13_02_2020/Nous_Voiture.png" alt="Une personne" height="400" width="300">
                            <figcaption>
                                <a style="text-decoration: none; color: darkblue" href="13_02_2020.php"> 13/02/2020 </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/28_02_2020/Julien_Jeux.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            <a style="text-decoration: none; color: darkblue" href="28_02_2020.php">28/02/2020 </a>
                        </figcaption>
                    </figure>
                </div>


                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Nous_Arc.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            <a style="text-decoration: none; color: darkblue" href="29_02_2020.php">29/02/2020 </a>
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/07_03_2020/Chartres.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            <a style="text-decoration: none; color: darkblue" href="07_03_2020.php">07/03/2020 </a>
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/15_03_2020/Julien_Dos.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            <a style="text-decoration: none; color: darkblue" href="15_03_2020.php">15/03/2020 </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <div style="float: right";"> <a id="Suite" href="Page3.php"> Suite </a> </div>

        <?php include "../../Style/FooterNA.php" ?>

    </body>
</html>
