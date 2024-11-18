<?php
    require_once 'App/Auth.php';

    if ($usuario && $perm) {
        header('Location: views/');
    } else {
        header('Location: login.php');
    }

?>