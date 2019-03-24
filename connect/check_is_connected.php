<?php
    function check_is_connected() {
        session_start();
        if (isset($_SESSION['name'])) {
            header('Location: /');
        }
        return ('OK');
    }
?>