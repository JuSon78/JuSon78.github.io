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
            Le 13/02/2020, ah cette journée je me souviens je ne pense pas que ce soit ta préféré en vu de l'invité mystère... Mais bon tu as dus t'amuser en faisant du karting toute la soirée et en m'abandonnant avec ton ex... mdrrrr merci ^^ <3
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
                        <img src="../../Photos/Album_Photos/13_02_2020/Karting_Dernier.png" alt="Score" height="400" width="300">
                        <figcaption>
                            Mdrrrr les 3 derniers c'est qui ??? c'est nous...
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/13_02_2020/Julien_Karting_Score.png" alt="Score" height="400" width="300">
                        <figcaption>
                            Qui nous a laissé tout seul toute la soirée, pendants des heures, pour s'améliorer et devenir premier sur la piste avec des inconnus au karting c'est JULIEN... BRAVO :P
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/13_02_2020/Nous_Fatigue.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Après cette dur et longue soirée on rentre à la maison, euh.. je crois que tu as l'air un peu fatigué le karting ça fatigue ahah
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="rangement">
                <figure>

                    <img src="../../Photos/Album_Photos/13_02_2020/Nous_Maison.png" alt="Score" height="400" width="300">
                    <figcaption>
                        Et c'est parti je t'emmène là où personne ne vas avec moi sauf Damien
                    </figcaption>
                </figure>
            </div>


            <div class="rangement" style="width: 100px;"></div>


            <div class="rangement">
                <figure>
                    <img src="../../Photos/Album_Photos/13_02_2020/Nous_Japonais.png" alt="Score" height="400" width="300">
                    <figcaption>
                        Ouiiii, un bon japonais ! :P
                    </figcaption>
                </figure>
            </div>

            <div class="rangement" style="width: 100px;"></div>

            <div class="rangement">
                <figure>
                    <img src="../../Photos/Album_Photos/13_02_2020/Julien_Japonais.png" alt="Une personne" height="400" width="300">
                    <figcaption>
                        Je vois que tu es content ahah on t'a même serré la main ! prévilégié grace à moi... LOL
                    </figcaption>
                </figure>
            </div>
        </div>
        </div>

        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>