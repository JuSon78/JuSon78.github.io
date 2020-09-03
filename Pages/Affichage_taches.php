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
        echo "<th>titre </th>";
        echo "<th>lieu </th>";
        echo "<th>description </th>";
        echo "<th>importance </th>";
        echo "</tr>";

        while ($donnees = $resultat->fetch())
        {
            echo "<tr>";

            echo "<td>" . $donnees['titre'] . "</td>";
            echo "<td>" . $donnees['lieu'] . "</td>";
            echo "<td>" . $donnees['description'] . "</td>";
            $importance = $donnees['importance'];
            if($importance == 0){
                echo "<td>faible</td>";
            }
            elseif ($importance == 1){
                echo "<td>normale</td>";
            }
            else{
                echo "<td>forte</td>";
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