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
            Le 29/02/2020, Journée avec beaucoup de marche et surtout 2eme fois où nous allons à Paris depuis notre premiere fois il y a de ça 1 mois.. Cette journée va être sympas ! </br>  (Il y a une suite de page en bas à droite)
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
        <div style="margin-left: 7%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Nous_Maison.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            C'est Parti
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Metro_Paris.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Aventurons nous dans les métros parisien
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Wilson_Assis.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Bravo, admirateur secret !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Paris1.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Paris nous voilà avec mon iPhone 11 Pro Max, qui fait de belles photos faut se l'avouer
                        </figcaption>
                    </figure>
                </div>
            </div>


            <div style="margin-left: 20%">
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Paris2.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Oui j'aime beaucoup !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Julien_Paris.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Oui tkt on arrive bientôt, un enfant celui là
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Julien_Parc.png" alt="Voiture" height="400" width="300">
                        <figcaption>
                            Regardes c'est juste derrière toi tkt on est arrivé
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <div style="float: right";"> <a id="Suite" href="Suite_29_02_2020.php"> Suite </a> </div>


        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>