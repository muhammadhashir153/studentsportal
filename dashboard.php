<?php
    session_start();
    if (isset($_SESSION["name"])) {
        require_once("./tempelates/dashboard-data.php");
    }else{
        header("location:index.php");
    }

?>