<?php
include_once("./main.php");


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
 <form method="GET" action="index.php" class="ms-2 mt-2">
 <input class="form-check-input" type="checkbox" name="check-parking" id="check-parking" <?php echo $filter_parking ? "checked":""?>
 >
 
  <label class="form-check-label" for="check-parking">
    Cerca hotel con parcheggio
  </label>
  <button class="btn btn-primary">Filtra</button>
 </form>   
 <table class="table">
  <thead>  
   <tr>
    <th scope= "col">Nome</th>
    <th scope= "col">Descrizione</th>
    <th scope= "col">Parcheggio</th>
    <th scope= "col">Voto</th>
    <th scope= "col">Distanza dal centro</th>  
   </tr> 
  </thead> 
  <tbody>
    <?php foreach($hotels as $hotel):?> 
    <tr>
     <td><?php echo $hotel["name"]?></td>
     <td><?php echo$hotel["description"]?></td>
     <td><?php
    $parking= $hotel["parking"];
    if ($parking == true){
        echo "SI";
    } else {
        echo "NO";
    }
    ?></td>
     <td><?php echo $hotel["vote"]?></td>
     <td><?php echo $hotel["distance_to_center"]?></td>   
    </tr>
    <?php endforeach;?>
    
    
    
    
    
    
    
   
 </tbody> 
</table>  
    
</body>
</html>