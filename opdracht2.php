<!DOCTYPE html>
<html>
<head>
    <title>php opdrachten</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php include 'navbar.php'; ?>
</head>
<body>
<?php
	$price =10;
    $leeftijd = 66;
    
    if($leeftijd > 65){
        $korting =  0.5;
    }
    else if($leeftijd<= 12){
        $korting =  0.5;
    }
    else if ($leeftijd<= 3) {
        $korting = 0;
    }
    else{
        $price;
    }
   echo $price * $korting; 
    ?>
</body>
</html>