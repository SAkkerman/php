<?php 
    session_start();
    if(isset($_SESSION["user"])){
        echo "<h1>Welcome ".$_SESSION["user"]." on the website";
        echo "<p><a href=inlogg.php>Back</a></p>";
    }else{
        header('location: inlogg.php');
    }
    ?>