 <?php
    define('HOST','127.0.0.1');
    define('DB_name','Site_Web2');
    define('USER','root');
    define('PASS','root');

    try {
        $db = new PDO("mysql:" . HOST . ";dbname" . DB_name, USER, PASS);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = "SELECT * FROM Site_Web2.message";
        $resultat = $db->query($requete);
        try{
            echo ("<table id='affichageMessages'>");
            echo ("<tr>");
            echo ("<th>utilisateur </th>");
            echo ("<th>contenu_message </th>");
            echo ("<th>date </th>");
            echo ("</tr>");

            while ($donnees = $resultat->fetch())
            {
                echo ("<tr>");

                echo("<td>" . $donnees['utilisateur'] . "</td>");
                echo("<td>" . $donnees['contenu_message'] . "</td>");
                echo("<td>" . $donnees['date'] . "</td>");

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

     ?>