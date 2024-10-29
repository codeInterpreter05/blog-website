<?php
    require_once 'config.php';

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Couldn't connect to database");

    function showPage($page,$data=""){
        include("assets/pages/$page.php");
    }

?>