<?php
include_once("./main.php");
$parking= !empty($hotels["parking"]) ? "SI": "NO";

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
    <li><b>parcheggio:</b><?=$parking?></li>
    <li><b>voto:</b><?=$hotel["vote"]?></li>
    <li><b>distanza dal centro:</b><?=$hotel["distance_to_center"]?></li>
    <hr>
    
   <?php endforeach;?>
  </ul>  
    
</body>
</html>