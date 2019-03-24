<?php
    function error($link, $name, $email, $pwd, $pwd_confirm) {
        if ($name == NULL || $email == NULL || $pwd == NULL || $pwd_confirm == NULL)
            return ("empty");
        if (strlen($name) > 25 || strlen($email) > 320 || strlen($pwd) > 30 || strlen($pwd_confirm) > 30)
            return ("long");
        if ($pwd != $pwd_confirm)
            return ("password");
        $result = mysqli_query($link, "SELECT * FROM users WHERE mail = '".$email."'");
        if (mysqli_num_rows($result) > 0) {
            return ("email");
        }
        $result = mysqli_query($link, "SELECT * FROM users WHERE username = '".$name."'");
        if (mysqli_num_rows($result) > 0) {
            return ("username");
        }
        return (NULL);
    }

    function register() {
        include('../database_connect.php');
        $link = connect();
        if (!$link)
            die("Erreur: " .mysqli_connect_errno() .mysqli_connect_error());
        $sql = "CREATE TABLE users (id INTEGER AUTO_INCREMENT, username VARCHAR(25), mail VARCHAR(320), password CHAR(32), grade CHAR(32), status VARCHAR(320), PRIMARY KEY (id))";
        $link->query($sql);
        if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['pwd']) AND isset($_POST['confirm_pwd'])) {
            $error = error($link, $_POST['name'], $_POST['email'], $_POST['pwd'], $_POST['confirm_pwd']);
            if ($error != NULL)
                return ($error);
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $pwd = htmlspecialchars($_POST['pwd']);
            $pwd = md5($pwd);
            $link->query("INSERT INTO users VALUE(NULL, '$name', '$email', '$pwd', 'guest', NULL)");
            mkdir("../users/".$name);
            copy("../users/none.jpg", "../users/".$name."/avatar.jpg");
            return ("OK");
        }
        $link->close();
    }

    $result = register();
    $redirect = "../register";
    if ($result != "OK")
        $redirect = $redirect."?error=".$result;
    header('Location: '.$redirect);
?>