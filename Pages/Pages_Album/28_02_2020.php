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
            Le 28/02/2020, Week-end à la maison pleins d'activités encore de prévus dis donc ça comment à devenir une habitude.. Sache que je t'aime et que je me sens de mieux en mieux avec toi... <3
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
                        <img src="../../Photos/Album_Photos/28_02_2020/iPhone.png" alt="Score" height="400" width="300">
                        <figcaption>
                            Mon dieu quel est cette merveille que je viens d'avoir..
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/28_02_2020/Julien_Bg.png" alt="Score">
                        <figcaption>
                            Mdrrr je commence déjà à te harceler de photos en mode portrait.. Mais quel bg !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/28_02_2020/Nous_Sdb.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            On vient d'arriver on va pouvoir manger, petit film et bien se reposer car demain grosse journée
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/28_02_2020/Harry.png" alt="Score" height="400" width="300">
                        <figcaption>
                            Je t'ai emmené dans le magasin remplis de vêtements, objet, ... de Harry Potter
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div style="margin-left: 20%">
                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/28_02_2020/Julien_Jeux.png" alt="Score" height="400" width="300">
                        <figcaption>
                            Mais toi c'est des jouets en bois qui t'interesse ahah
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/28_02_2020/Figurine.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Concours de mode portrait
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="width: 100px;"></div>

                <div class="rangement">
                    <figure>
                        <img src="../../Photos/Album_Photos/28_02_2020/Julien_Chinois.png" alt="Une personne" height="400" width="300">
                        <figcaption>
                            Après cette belle journée let's go chinois, le début d'une longue série.
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <?php include"../../Style/Photos/Footer_Album.php" ?>


    </body>
</html>