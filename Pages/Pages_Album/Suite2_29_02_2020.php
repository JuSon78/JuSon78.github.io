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
            Le 29/02/2020, Journée avec beaucoup de marche et surtout 2eme fois où nous allons à Paris depuis notre premiere fois il y a de ça 1 mois.. Cette journée va être sympas !
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
        <div style="margin-left: 8%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Arche.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            L'arche de la défense !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Defense.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            La défense avec ses belles tours..
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Nous_Arc.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Direction Arc de Triomphe !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/29_02_2020/Julien_Arc.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Beau gosse !
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>

                <div style="margin-left: 20%">
                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/29_02_2020/Wilson_Arc.png" alt="Une personne" height="400" width="300">
                            <figcaption>
                                Mais il y a mieux ahah
                            </figcaption>
                        </figure>
                    </div>

                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/29_02_2020/Julien_Neon.png" alt="Voiture" height="400" width="300">
                            <figcaption>
                                Jeux de lumière tel un papillon !
                            </figcaption>
                        </figure>
                    </div>

                    <div class="rangement">
                        <figure>
                            <figcaption>
                                <img src="../../Photos/Album_Photos/29_02_2020/Julien_Sub.png" alt="Une personne" height="400" width="300">
                                <figcaption>
                                    On termine par cette longue journée, qui a pris 3 pages, par un Subway
                                </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>