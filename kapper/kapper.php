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
       $kappersagenda["9.15"]="mevr. pietersen";
       $kappersagenda["9.30"]="mevr. willems";
       $kappersagenda["9.45"]=""; 
       $kappersagenda["10.00"]="paul van broeken";
       $kappersagenda["10.15"]="Karel de Meeuw";
       $kappersagenda["10.30"]="";
       
       print("De volgende momenten zijn nog beschikbaar:<ul>");
       foreach($kappersagenda as $tijd => $afspraak) {
           
            if($afspraak == "")print("<li>".$tijd."</li>");
        }
print("</ul>");
    ?>   
    </body>
</html>


