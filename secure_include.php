<?php
    function secure_include($path){
        if (empty($page1)) {
            $page1 = $path;
            $page1 = trim($page1.".php");
        }
        $page1 = str_replace("../","protect",$page1);
        $page1 = str_replace(";","protect",$page1);
        $page1 = str_replace("%","protect",$page1);
        if (preg_match("admin", $page1))
            echo "Access error";
        else {
            if (file_exists($page1) && $page1 != 'index.php')
                include("./".$page1);
            else
                echo "404 Not found";
        }
    }
?>