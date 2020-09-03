<?php
$servername = "mysql-juson.alwaysdata.net";
$database = "juson_principal";
$db_username = "juson_principal";
$db_password = "loluser";
try {
    $db = new PDO("mysql:host=$servername;dbname=$database", $db_username, $db_password);

    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = "SELECT titre, lieu, description, importance FROM activities";
    $resultat = $db->query($requete);
    try{
        echo "<table>";
        echo "<tr>";
        echo "<th class='tableau'>titre </th>";
        echo "<th class='tableau'>lieu </th>";
        echo "<th class='tableau'>description </th>";
        echo "<th class='tableau'>importance </th>";
        echo "</tr>";

        while ($donnees = $resultat->fetch())
        {
            echo "<tr>";

            echo "<td class='tableau'>" . $donnees['titre'] . "</td>";
            echo "<td class='tableau'>" . $donnees['lieu'] . "</td>";
            echo "<td class='tableau'>" . $donnees['description'] . "</td>";
            $importance = $donnees['importance'];
            if($importance == 0){
                echo "<td class='tableau'>faible</td>";
            }
            elseif ($importance == 1){
                echo "<td class='tableau'>normale</td>";
            }
            else{
                echo "<td class='tableau'>forte</td>";
            }

            echo "</tr>";

        }
        echo "</table>";
    }
    catch (Exception $e){
        echo $e;
    }
} catch (PDOException $e){

    echo $e ->getMessage();
}


//FONCTION SUPPRIMER UN UTILISATEUR
function supprimer_utilisateur (String $supprimer_utilisateur) {
    $db = $GLOBALS['db'];
    try {
        $requete = $db->prepare("DELETE FROM `user` WHERE username = :supprimer_utilisateur");

        $requete->bindParam("supprimer_utilisateur", $supprimer_utilisateur);
        $requete->execute();

        echo "L'utilisateur a été supprimé";
    }
    catch (PDOException $e) {
        echo $e;
    }
}
?>