<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Album</title>
    <!--Je vais mettre le style de police sur une page CSS prédéfinie-->
    <link rel="stylesheet" type="text/css" href="../../Style/Photos/Album.css">
</head>
    <body class="body_Album1">


        <!--Message-->
        <div class="message">
            <div>
                <> <b>Info sur cette page: </b>
                Ce site est en cours de préparation est à but pour pour partager de bons moments et de l'entraînement à la programmation.  Cette page est dédié à l'album photo et à regrouper toutes nos photos
            </div>
        </div>

        <!--Message 2-->
        <p class="message2">
            Le 25/01/2020, première fois que l'on se vois, tu es tellement timide et mignon. Quand je te vois, cela confirme mon avis sur toi et que vraiment tu me plais beaucoup.
            J'ai hate que cette journée se passe, mais pas qu'elle se termine. Tu es tellement mignon.. Tu avais tellement peurs que tu ne me plaise pas que tu as versé quelques larme en partant... ces mots m'ont tellement plus...
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
        <div style="margin-left: 20%; margin-right: auto; width: 50%; margin-top: 10px">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/25_01_2020/Gallerie_fleurs.jpg" alt="Magasin" height="400" width="300">
                        <figcaption>
                            Gallerie Lafayette première fois avec bébé
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>


                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/25_01_2020/Julien_Mcdo.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            00h00 passé tu finis ta "journée" de travail avant de me rejoindre
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>


                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/25_01_2020/Lunettes.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            En mode beau-gosse
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="rangement">
                <figure>
                    <img src="../../Photos/Album_Photos/25_01_2020/Plafond.jpg" alt="Magasin" height="400" width="300">
                    <figcaption>
                        Louis Vuitton le plafond au niveau des malles que je voulais acheter ! ahah
                    </figcaption>
                </figure>
            </div>
            <div class="rangement" style="width: 100px;"></div>
            <div class="rangement">
                <figure>
                    <img src="../../Photos/Album_Photos/25_01_2020/Manteau.png" alt="Une personne" height="400" width="300">
                    <figcaption>
                        Euh... qui porte ça ?
                    </figcaption>
                </figure>
            </div>

            <div class="rangement" style="width: 100px;"></div>

            <div class="rangement">
                <figure>
                    <img src="../../Photos/Album_Photos/25_01_2020/Pull_Teddy.png" alt="Une personne" height="400" width="300">
                    <figcaption>
                        Je l'ai pris en photo pour me l'acheter plus tard tu crois qu'il y sera encore ?
                    </figcaption>
                </figure>
            </div>
        </div>

        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>
