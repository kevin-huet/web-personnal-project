<?php
    function connect() {
        $db = parse_ini_file("db.ini");
        $host = $db['host'];
        $db_name = $db['name'];
        $user = $db['user'];
        $password = $db['pass'];
        $port = 80;
        $link = mysqli_connect($host, $user, $password, $db_name,$port);
        if (!$link) {
            die("Erreur: " .mysqli_connect_errno() .mysqli_connect_error());
        }
        return ($link);
    }
?>