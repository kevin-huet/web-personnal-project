<?php
    session_start();
    include('../database_connect.php');
    function login() {
        if (isset($_POST['email']) AND isset($_POST['pwd'])) {
            if ($_POST['email'] == NULL || $_POST['pwd'] == NULL)
                return ("../login?error=empty");
            $email = htmlspecialchars($_POST['email']);
            $pwd = md5(htmlspecialchars($_POST['pwd']));
            $link = connect();
            if (!$link)
                die("Erreur: " .mysqli_connect_errno() .mysqli_connect_error());
            $request = mysqli_query($link, "SELECT id,username FROM users WHERE mail = '".$email."' AND password = '".$pwd."'");
            sleep(1);
            if (mysqli_num_rows($request) == 0)
                return ("../login?error=incorrect");
            else {
                $row = mysqli_fetch_assoc($request);
                $_SESSION['email'] = $email;
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['username'];
                echo "Connexion réussie ".$row['username'];
                return ("../?connexion=Ok");
            }
        } else
            echo "Connection failed";
    }
    $status = login();
    header('Location: '.$status);
    $link->close();
?>