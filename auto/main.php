<?php
include_once ("Auto.php");
include_once ("Details.php");
include 'navbar.php';

$merk = $_POST["cars"];
$minimum = $_POST["minprijs"];
$maximum = $_POST["maxprijs"];

$ditmerk = new Auto();

$nieuwdetails0      = new Details("audi",   10000,  "afbeelding/audi.jpg");
$nieuwdetails1      = new Details("audi",   50000,  "afbeelding/audi2.jpg");
$nieuwdetails2      = new Details("audi",   100000, "afbeelding/audi3.jpg");
$nieuwdetails3      = new Details("volvo",  50000,  "afbeelding/volvo.jpg");
$nieuwdetails4      = new Details("volvo",  32000,  "afbeelding/volvo2.jpg");
$nieuwdetails5      = new Details("volvo",  75000,  "afbeelding/volvo3.jpg");
$nieuwdetails6      = new Details("fiat",   30000,  "afbeelding/fiat.jpg");
$nieuwdetails7      = new Details("fiat",   9000,   "afbeelding/fiat2.jpg");
$nieuwdetails8      = new Details("fiat",   7000,   "afbeelding/fiat3.jpg");
$nieuwdetails9      = new Details("saab",   1000,   "afbeelding/saab.jpg");
$nieuwdetails10     = new Details("saab",   500,    "afbeelding/saab2.jpg");
$nieuwdetails11     = new Details("saab",   3000,   "afbeelding/saab3.jpg");

$ditmerk->voegDetailsToe($nieuwdetails0);
$ditmerk->voegDetailsToe($nieuwdetails1);
$ditmerk->voegDetailsToe($nieuwdetails2);
$ditmerk->voegDetailsToe($nieuwdetails3);
$ditmerk->voegDetailsToe($nieuwdetails4);
$ditmerk->voegDetailsToe($nieuwdetails5);
$ditmerk->voegDetailsToe($nieuwdetails6);
$ditmerk->voegDetailsToe($nieuwdetails7);
$ditmerk->voegDetailsToe($nieuwdetails8);
$ditmerk->voegDetailsToe($nieuwdetails9);
$ditmerk->voegDetailsToe($nieuwdetails10);
$ditmerk->voegDetailsToe($nieuwdetails11);

?>


<!DOCTYPE html>
<html>
<head>
  <title>Auto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 
<div class ="container">
    <br>
 Kies merk:
  <form action ="main.php" method="POST">          
  <select name="cars" class="form-control" value="">
  <option value="">Alles</options>
  <option value="audi">audi</option>
  <option value="volvo">volvo</option>
  <option value="fiat">fiat</option>
  <option value="saab">saab</option>
  </select>
  <br>
  
  Maximum bedrag:<br>
  <input type="text" class="form-control" name="maxprijs" value=""><br>
  Minimum bedrag:<br>
  <input type="text" class="form-control" name="minprijs" value=""><br>

  <input type="submit" name="button" value="Zoek"><br>
 

</form><br>


<div class ="row">
 <?php 
    $count = -1;
    foreach ($ditmerk->getDetail() as $detail) {
        if($minimum == ""){
            $minimum = 1;
        }
         if($maximum == ""){
            $maximum = 10000000;
        }
        
        if($merk != ""){
            if(!($detail->getType() == $merk)){
                continue;
            }
             if(!($detail->getKosten() >= $minimum)){
                continue;
            }
             if(!($detail->getKosten() <= $maximum)){
                continue;
            }
          }
        else{
           if(!($detail->getKosten() >= $minimum)){
                continue;
            }
             if(!($detail->getKosten() <= $maximum)){
                continue;
            }
        }
        
    
    $count +=1;
    if($count%4==0){?>
    </div>
    <div class ="row">
        <div class = "col-md-3">
            <div class ="panel panel-default">
               <div class="panel-body">
                <img src="<?=$detail->getPlaatje();?>" class= "img-responsive">
                <h4 class="center"> <?=$detail->getType();?></h4>
                <h4 class="center">$ <?=$detail->getKosten();?></h4>
               </div>
            </div>
         </div>
         
         <?php
    }else{?>
         <div class = "col-md-3">
              <div class ="panel panel-default">
                  <div class="panel-body">
                    <img src="<?=$detail->getPlaatje();?>" class= "img-responsive">
                    <h4 class="center"> <?=$detail->getType();?></h4>
                    <h4 class="center">$ <?=$detail->getKosten();?></h4>
                  </div>
              </div>
         </div>
         
   
    
  <?php  
    }
  }
    
    ?>
            </div>
         </div>  
    </body>
 </html>
