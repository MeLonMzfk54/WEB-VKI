<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laboratornaya rabota 8_1</title>
</head>
<body>
    <?php
           $counter = 0;
           if(isset($_COOKIE["counter1"])){
             $counter = $_COOKIE["counter1"]+1;
           }else{
               $counter = 1;
               echo "<p>Добро пожаловать!</p>";
           }
           setcookie("counter1",$counter);
           setcookie("counter1",$counter);
           if(isset($_COOKIE["counter1"])){
            echo "<p>Вы зашли на страницу - ".$counter." раз</p>";
               $date = $_COOKIE["date"]; 
                if (!isSet($date)) 
                $date = date('Y-m-d H:i:s'); 
                else 
                $date = $date; 
//               $now = time();
//               $date = date("Y-M-D h:i:s");
               echo "<p>Последнее посещение - ".$date."</p>";
           }
    ?>
</body>
</html>