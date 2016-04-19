<?php 
    session_start();
    include 'navbar.php';

$user = array(
    "sjoerd" => array("pwd" => "1234", "rol" => "admin"),
    "nick" => array("pwd" => "12345", "rol" => "user"),
    "dorian" => array("pwd" => "123456", "rol" => "user"),
);
    
if(isset($_GET['logout'])){
    $_SESSION = array();
    session_destroy();
}
    
if (isset($_POST["knop"])
        && isset($user[$_POST["loggin"]])
        && $user[$_POST["loggin"]]["pwd"]==$_POST["pwd"]){
           $_SESSION["user"] = array("naam" => $_POST["loggin"],
                                     "pwd"=>$user[$_POST["loggin"]]["pwd"],
                                     "rol"=>$user[$_POST["loggin"]]["rol"]);
           echo $message = "welcome ".$_SESSION['user']["naam"]. " your rol is "
                .$_SESSION['user']["rol"]  ;
        }else{
          echo $message = "<h1>inloggen</h1>";
        }

    ?>
<!DOCTYPE html>
<html> 
<head>
  <title>inlogg</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<form action=<?php echo $_SERVER ['PHP_SELF']; ?> method="POST">
<div class = "form-group">
    <label for="form-group">Login:</label>    
	<input type="text" name="loggin" value="" ><br>
    </div>
    <div class = "form-group">
    <label for="form-group">Password:</label>  
	<input type="password" name="pwd" value=""><br>
    </div>
	<input type="submit" name="knop"><br>
    
</form>
<p><a href="user.php">website</a></p>
<p><a href="admin.php">Admin page</a></p>
<p><a href="inlogg.php?logout">log out</a></p>
</body>
</html>