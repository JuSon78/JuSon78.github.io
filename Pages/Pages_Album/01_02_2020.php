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
            Le 01/02/2020, Deuxième journée avec toi, cette journée est chargé en activité.. ahh tu devais rencontrer Maryne ce jour-là..
            Patin à glace, Bowling..
            Je me sens bien avec toi.. </br>
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
        <div style="margin-left: 7%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/01_02_2020/Julien_Patin.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Tu patines bien... Mdr
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>


                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/01_02_2020/Wilson_Patin.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Bon j'ai du style quand même ?
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/01_02_2020/Wilson_Glace.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Je gère de ouf ahahah
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/01_02_2020/Christophe_Maryne.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Aller Maryne viens !
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/01_02_2020/Julien_Timide.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            C'était encore les débuts où tu étais géné de me regarder.. trop chou
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>


                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/01_02_2020/Wilson_Echarpe.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Ma tête mdrrr j'aime pas cette photo..
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/01_02_2020/Julien_billard.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Le billard, là où tu gagnais... la bonne époque..
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/01_02_2020/Julien_perd.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Là c'est autre chose.. t'es moins fort..
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <div style="float: right";"> <a id="Suite" href="Suite_01_02_2020.php"> Suite </a> </div>


        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>