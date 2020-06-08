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
            Le 26/05/2020, Week-end important et stressant, première fois que je vais chez toi plus la voiture s'approche de ton domicile
            et plus je stresse. Mon dieu mon coeur palpite à l'idée de rencontrer tes parents tu rigolais et te moqiaos de moi mais la semaine d'après c'est ton
            tour alors rigole bien pendant qu'il en est encore temps. Seul problème j'ai pas assez pris de photo de ce premier jour chez toi..
            Après go to Chartres revoir Médy.
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
                        <img src="../../Photos/Album_Photos/26_05_2020/Fleurs.png" alt="Fleurs" height="400" width="300">
                        <figcaption>
                            Bon j'espère vraiment qu'ils vont m'accepter
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>


                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/26_05_2020/Julien_Jardin.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Pendant que je stresse, toi t'es là tranquille ahah
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/26_05_2020/Bierre_Jardin.png" alt="Bierre" height="400" width="300">
                        <figcaption>
                            Les chats ne sont pas là, les souris dansent
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/26_05_2020/Julien_Pc.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Je vis ma meilleure vie, je suis content d'être avec toi ! Je t'aime
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/26_05_2020/Julien_Voiture.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Let's go to Chartres voir Médy
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/26_05_2020/Julien_Chartres.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Ca va être une bonne journée !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/26_05_2020/Chartres1.png" alt="Ville" height="400" width="300">
                        <figcaption>
                            Go visiter Chartres
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/26_05_2020/Chartres2.jpg" alt="Ville" height="400" width="300">
                        <figcaption>
                            Toujours mon iPhone 11 pro
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <div style="float: right";"> <a id="Suite" href="Suite_26_05_2020.php"> Suite </a> </div>

        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>