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
            Le 15/03/2020, Petite journée ensemble à Maurecourt, ta mère t'avait dit fait attention c'est sûrement la dernière fois que tu le vois avant le début du confinment et elle avait raison dernière journée ensmeble avant d'être séparé pendant 1 mois et demi !! </br>
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
        <div style="margin-left: 5%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>
                        <figcaption>
                            <img src="../../Photos/Album_Photos/15_03_2020/Julien_Maison.png" alt="Une personne" height="400" width="300">
                            Que la journée commence !
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement">
                    <figure>
                        <figcaption>
                            <img src="../../Photos/Album_Photos/15_03_2020/Nous_Voiture.png" alt="Une personne" height="400" width="300">
                            On est trop mignon
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/15_03_2020/Pointille.png" alt="Une personne" height="400" width="300">
                        <figcaption> Bonne journée ensoleillé
                        </figcaption>
                    </figure>
                </div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/15_03_2020/Julien_Pointille.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Petite glace !
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div style="margin-left: 27%">
                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/15_03_2020/Signe.png" alt="Une personne" height="400" width="300">
                            <figcaption> Coucou vous !
                            </figcaption>
                        </figure>
                    </div>
                    <div class="rangement">
                        <figure>
                            <figcaption>
                                <img src="../../Photos/Album_Photos/15_03_2020/Wilson_Quais.png" alt="Voiture" height="400" width="300">
                                On tape la pose !
                            </figcaption>
                        </figure>
                    </div>
                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/15_03_2020/Julien_Quais.png" alt="Une personne" height="400" width="300">
                            <figcaption> Toi aussi !
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div style="float: right";"> <a id="Suite" href="Suite_15_03_2020.php"> Suite </a> </div>


        <?php include"../../Style/Photos/Footer_Album.php" ?>


    </body>
</html>