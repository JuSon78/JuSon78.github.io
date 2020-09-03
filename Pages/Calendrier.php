<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calendrier</title>
    <link rel="stylesheet" type="text/css" href="../Style/Header_Footer.css">
    <link rel="stylesheet" type="text/css" href="../Style/Calendrier/Calendrier.css">
</head>
    <body>
        <?php include"../Style/Header.php" ?>
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
        <div>

        </div>
    </body>
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
    }
    ?>
    </br>
    </br>
    </br>
    <?php include"Affichage_taches.php" ?>

    <?php include"../Style/Footer.php" ?>
</html>