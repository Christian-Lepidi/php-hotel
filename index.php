<?php
require_once("./main.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Hotels</title>
</head>
<body>
  <ul>  
   <?php foreach($hotels as $hotel):?>
    <li><b>nome:</b><?=$hotel["name"]?></li>
    <li><b>descrizione:</b><?=$hotel["description"]?></li>
    <li><b>parcheggio:</b><?=$hotel["parking"]?></li>
    <li><b>voto:</b><?=$hotel["vote"]?></li>
    <li><b>distanza dal centro:</b><?=$hotel["distance_to_center"]?></li>
    
   <?php endforeach();?>
  </ul>  
    
</body>
</html>