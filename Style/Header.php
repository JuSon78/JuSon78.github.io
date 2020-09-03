<header>
    <?php
        session_start();
        if(isset($_GET['deconnexion']) OR !isset($_SESSION['username']))
        {
            session_unset();
            header("location:../Pages/Connexion/Connexion.php");
        }
    ?>
    <div id="Bande">
        <a href="Page_Accueil.php"> <img src="../Photos/Logo/Coeur.png" id="Logo" alt="Logo"> </a>
        <div>
             <ul id="liste">
                   <li> <a class="elementList" href="Calendrier.php">Calendrier </a>
                        </li>
                   <li> <a class="elementList" href="Album_Photo.php">Photos </a>
                        </li>
                   <li> <a class="elementList" href="Achat.php">Achat </a>
                        </li>
                   <li> <a class="elementList" href="Message.php">Message </a>
                        </li>

                   <?php
                   include '../Pages/Connexion/Fonctions_DB.php';

                    $user = $_SESSION['username'];

                    if (droit_admin($user)) {
                        echo"<li> <a class=\"elementList\" href=\"Autres.php\">Autres </a>
                    </li>";
                    }

                    if(isset($user)){
                        echo "<li id='user_menu'>$user</li>";
                        echo "<a href=\"../Pages/Connexion/Connexion.php?deconnexion\"> <img src=\"../Photos/Logo/logout.png\" id=\"logo_deconnexion\" alt=\"Logo_deconnexion\"> </a>";
                    }
                    echo "</ul>";
                    ?>
             </ul>
        </div>
    </div>
</header>