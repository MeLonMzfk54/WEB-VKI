<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>Dop zadanie_php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
   <div class="container">
    <?php
    echo "<table>";
    echo "<tr><th>Национальность</th><th>Численность чел.</th><th>В% к числу лиц, указавших национальную принадлежность</th></tr>";
       $f = fopen("oblinfo.txt","r");
       do{
           
           $nationality = htmlentities(fgets($f)); 
           $number = htmlentities(fgets($f));
           $ratio = htmlentities(fgets($f));
           echo "<tr><td>".$nationality."</td><td>".$number."</td><td>".$ratio."</td></tr>";
       }while(!feof($f));
    echo "</table>";
    ?>
    </div>
    </div>
</body>
</html>