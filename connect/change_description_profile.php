<?php
    if (isset($_POST['desc'])) {
        include('../database_connect.php');
        session_start();
        $link = connect();
        $name = $_SESSION['name'];
        if ($error != NULL)
            return ($error);
        $desc = htmlspecialchars($_POST['desc']);
        $query = "UPDATE users SET status='$desc' WHERE username='$name'";
        $link->query($query);
    }
    header('Location: ../profile');
?>