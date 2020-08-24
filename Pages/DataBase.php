 <?php
 $servername = "mysql-juson.alwaysdata.net";
 $database = "juson_messagerie";
 $db_username = "juson_principal";
 $db_password = "loluser";
    try {
        $db = new PDO("mysql:host=$servername;dbname=$database", $db_username, $db_password);

        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = "SELECT * FROM user";
        $resultat = $db->query($requete);
        try{
            echo ("<table>");
            echo ("<tr>");
            echo ("<th>id </th>");
            echo ("<th>pseudo </th>");
            echo ("<th>email </th>");
            echo ("<th>date </th>");
            echo ("</tr>");

            while ($donnees = $resultat->fetch())
            {
                echo ("<tr>");

                echo("<td>" . $donnees['id'] . "</td>");
                echo("<td>" . $donnees['username'] . "</td>");
                echo("<td>" . $donnees['email'] . "</td>");
                echo("<td>" . $donnees['creation_date'] . "</td>");

                echo ("</tr>");

            }
            echo ("</table>");
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

        $requete->bindParm("supprimer_utilisateur", $supprimer_utilisateur);
        $requete->execute();

        echo"L'utilisateur a été supprimé";
     }
     catch (PDOException $e) {
         echo $e;
     }
 }
     ?>