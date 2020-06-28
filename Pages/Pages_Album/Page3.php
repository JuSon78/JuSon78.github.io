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
                <li> <a class="Categorie" href ="../Page_Accueil.php"> Page_Accueil </a> </li> <br>
                <li> <a class="Categorie" href ="Page2.php"> Page Précédente </a> </li>
                </br>
            </ul>
        </div>

        <!--Photo-->
        <div style="margin-left: 20%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div>
                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/11_05_2020/Julien_assis.png" alt="Une personne" height="400" width="300">
                            <figcaption>
                                <a style="text-decoration: none; color: darkblue" href="11_05_2020.php"> 11/05/2020 </a>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/20_05_2020/Julien1_Eau.png" alt="Une personne" height="400" width="300">
                            <figcaption>
                                <a style="text-decoration: none; color: darkblue" href="20_05_2020.php"> 20/05/2020 </a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/26_05_2020/Chartres1.png" alt="Maison" height="400" width="300">
                            <figcaption>
                                <a style="text-decoration: none; color: darkblue" href="26_05_2020.php"> 26/05/2020 </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>


        <?php include "../../Style/FooterNA.php" ?>

    </body>
</html>
