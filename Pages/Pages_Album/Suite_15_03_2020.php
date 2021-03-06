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
            Le 15/03/2020, Petite journée ensemble à Maurecourt, ta mère t'avait dit fait attention c'est sûrement la dernière fois que tu le vois avant le début du confinment et elle avait raison dernière journée ensmeble avant d'être séparé pendant 1 mois et demi !!
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
                        <img src="../../Photos/Album_Photos/15_03_2020/Julien2_Quais.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Encore !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/15_03_2020/Moulin.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Parc de Conflans-Sainte-Honorine
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/15_03_2020/Pointille.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Bonne journée ensoleillé
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/15_03_2020/Julien_Assis.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Petite pause sur l'herbe
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div>
                <div style="margin-left: 45%">
                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/15_03_2020/Julien_Sourire.png" alt="Voiture" height="400" width="300">
                            <figcaption>
                                Ce sourire là ! <3
                            </figcaption>
                        </figure>
                    </div>

                    <div class="rangement">
                        <figure>
                            <img src="../../Photos/Album_Photos/15_03_2020/Julien_Dos.png" alt="Une personne" height="400" width="300">
                            <figcaption>
                                Ouais le dramaQueen !
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>