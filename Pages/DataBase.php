 <?php
    define('HOST','localhost');
    define('DB_name','Site_Web');
    define('USER','root');
    define('PASS','');

    try {
        $db = new PDO("mysql:host=" . HOST . ";dbname" . DB_name, USER, PASS);
        $db -> setAttribute(ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connexion > Ok";

    } catch (PDOException $e){
        echo $e;
    }