<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calendrier</title>
    <link rel="stylesheet" type="text/css" href="../Style/Header_Footer.css">
    <link rel="stylesheet" type="text/css" href="../Style/Calendrier/Calendrier.css">
</head>
    <body>
        <!--Header-->
        <?php include"../Style/Header.php" ?>

        <!--Formulaire ajouter une tâche-->
        <div id="test" style="margin-left: 5px">
            <h1>Ajouter une idée d'activité</h1>
            <form method="POST" id="form_ajout_activite">
                <p>
                    <label>Titre</label>
                    <input name='titre' type="text" placeholder="Nom de l'activité" required>
                </p>
                <p>
                    <label>Lieu</label>
                    <input name='lieu' type="text" placeholder="Lieu de l'activité" required>

                </p>
                <p>
                    <label>Description</label>
                    <textarea name='description' type="text" form="form_ajout_activite" placeholder="Description" required></textarea>

                </p>
                <p>
                    <label>Importance</label>
                    <SELECT name="importance" size="1">
                        <OPTION>faible
                        <OPTION selected>normale
                        <OPTION>forte
                    </SELECT>

                </p>
                <input id='submit' type="submit" value="Ajouter l'activité">
            </form>
        </div>

        <!--Récupération les données du formulaire pour les ajouter aux tableaux-->
        <?php
        if (isset($_POST['titre']) && isset($_POST['lieu']) && isset($_POST['description']) && isset($_POST['importance'])) {
            $importance = 999;
            if($_POST['importance'] === "faible"){
                $importance = 0;
            }
            elseif ($_POST['importance'] === "forte"){
                $importance = 2;
            }
            else{
                $importance = 1;
            }
            ajout_activite($_POST['titre'], $_POST['lieu'], $_POST['description'], $importance);
            header('Location: Calendrier.php');
        }
        ?>
        </br>
        </br>
        </br>

        <!--Affichage tableau-->
        <?php include "Fonctions_DB_Calendrier.php" ?>

        <!--Suppression tâche-->
        <h2>Supprimer une tache</h2>
        <form method="POST">
            <p> <label> Titre de l'activité :</label> <br>
                <input type="text" placeholder="Entrez le titre de l'activité que vous voulez supprimer"  name="titre_activite"> </p>

            <p> <input class="input_Enregistrer" type="submit" value="Supprimer"> </p>
        </form>

        <!--Récupération les données du formulaire précédent-->
        <?php

        if (isset ($_POST['titre_activite'])) {
            supprimer_activite($_POST['titre_activite']);
            header('Location: Calendrier.php');
        }
        ?>


        <!--Footer-->
        <?php include"../Style/Footer.php" ?>
    </body>
</html>