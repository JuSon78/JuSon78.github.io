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
        <div style="margin-left: 10%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>

                        <img src="../../Photos/Album_Photos/29_02_2020/Baleine.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Bienvenue à l'exposition de l'évolution 1h30 avant la fermeture ahah on a du faire ça rapidement
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Papillons.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Mode nuit ok ! mdrr
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Animaux.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            taxidermie ne pas toucher, moi : "je peux toucher ?"
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Singe.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            J'aime vraiment la qualité de mon iPhone
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Lapin.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Euh...
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Tigre.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Magnifique !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Wilson_Parc.png" alt="Voiture" height="400" width="300">
                        <figcaption>
                            Voilà c'est fini, on a visité ça rapidement mais c'était sympas quand même !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Apple.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Maintenant direction mon endroit préféré après le japonais biensûr !
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <div style="float: right";"> <a id="Suite" href="Suite2_29_02_2020.php"> Suite </a> </div>


        <?php include"../../Style/Photos/Footer_Album.php" ?>


    </body>
</html>