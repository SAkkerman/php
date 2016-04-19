<?php 
    session_start();
    
    if(isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "admin"){
        echo "<h1>Welcome ".$_SESSION["user"]["naam"]." on the admin page";
        echo "<p><a href=inlogg.php>Back</a></p>";
    }else{
        header('location: inlogg.php');
    }
    ?>