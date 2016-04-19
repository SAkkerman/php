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
       $zwembad ["De spartelkuikens"]=25;
       $zwembad ["De Waterbuffels"]=32;
       $zwembad ["Plonsmerdin"]=11;
       $zwembad ["Bommetje"]=23;
       
       $zwemmer = '<img src = "zwemmen.png">';
       
       foreach($zwembad as $label=>$waarde){
           
           for ($i = 5; $i <= $waarde; $i+=5) {
                            echo $zwemmer;
                        }
       
           echo " ".$label." = ".$waarde."<br>";
       
              
                      
                        
       }
       
    ?>   
    </body>
</html>