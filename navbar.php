<?php
    if (!isset($_SESSION['name']))
        include("bar/navbar_visitor.php");
    else
        include("bar/navbar_user.php");
?>
