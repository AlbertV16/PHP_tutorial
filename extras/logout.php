<?php
    session_start();

    session_destroy();
    header('Location: /php_tutorial/13_sessions.php');