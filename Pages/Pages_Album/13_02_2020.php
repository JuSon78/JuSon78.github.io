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
            Le 13/02/2020, ah cette journée je me souviens je ne pense pas que ce soit ta préféré en vu de l'invité mystère... Mais bon tu as dus t'amuser en faisant du karting toute la soirée et en m'abandonnant avec ton ex... mdrrrr merci ^^ <3  </br>
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
                        <img src="../../Photos/Album_Photos/13_02_2020/Julien_Voiture.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Qui est donc sur la route pour venir chez moi ??
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"> </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/13_02_2020/Nous_Voiture.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Les retrouvailles.. <3
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"> </div>


                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/13_02_2020/Julien_Joie.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Mais pourquoi es tu si joyeux... Parce qu'on nous allons voir la personne que tu préfère... :p
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"> </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/13_02_2020/Paul.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Ahhhh je comprends mieux, bienvenue à toi Paul !!
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>


                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/13_02_2020/Wilson_Mal.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Qui ne sait pas cadrer pour prendre "de base c'est une vidéo" des photos... JULIEN... Petite partie de bowling enfin grâce à moi nous avons eu Bowling, Karting, Billard à volonté et 3 boissons.. ahlala la soirée à 100€ mdrrr <3
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"> </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/13_02_2020/Paul_Billard.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Dis donc je crois qu'il va détrôner le chef du billard Julien !!!
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"> </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/13_02_2020/Karting.png" alt="Voiture" height="400" width="300">
                        <figcaption>
                            Ah et c'est parti pour la course !!! qui va gagner ???
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"> </div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/13_02_2020/Wilson_Karting.png" alt="Une personne" height="400" width="300">
                        <figcaption> Perso je suis prêt !
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <div style="float: right";"> <a id="Suite" href="Suite_13_02_2020.php"> Suite </a> </div>


        <?php include"../../Style/Photos/Footer_Album.php" ?>

    </body>
</html>