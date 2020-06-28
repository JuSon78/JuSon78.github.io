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
            Le 20/05/2020, Aujourd'hui on va à l'étang du Cora ca va être sympas on va nager, enfin si elle n'est pas trop froide... Ahaha
        </p>

        <!--Menu à droit-->
        <div id="rubrique">
            <ul>
                <li> <a class="Categorie" href ="../Page_Accueil.php"> Page_Accueil </a> </li>
                </br>
                <li> <a class="Categorie" href ="Page3.php"> Par Date </a> </li>
                </br>
            </ul>
        </div>

        <!--Photo-->
        <div style="margin-left: 10%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/20_05_2020/Nous.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Toujours la même photo de début de journée
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>


                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/20_05_2020/Conflans.png" alt="Ville height="400" width="300">
                        <figcaption>
                            Promenade à Conflans !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/20_05_2020/Etang.png" alt="Etang" height="400" width="300">
                        <figcaption>
                            Let's go !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/20_05_2020/Julien.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Vas-t-il aller dans l'eau ?
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div style="margin-left: 20%;">
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/20_05_2020/Julien1_Eau.png" alt="Personne" height="400" width="300">
                        <figcaption>
                            Oui quel courage ahah
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/20_05_2020/Julien_Eau.png" alt="Personne" height="400" width="300">
                        <figcaption>
                            Waaaah, bravo, parce que j'avoue elle n'est pas très chaude
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/20_05_2020/Arbre.png" alt="Arbres" height="400" width="300">
                        <figcaption>
                            Et comme toujours la photo de l'arbre en grand angle
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>


        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>