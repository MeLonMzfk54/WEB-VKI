<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width = device-width initial-scale = 1.0">
    <title>Laba2-PHP</title>
</head>
<body>
    <?php
        echo "Задание php : <br>";
        $name = "Anton";
        $age = 18;
        echo "Имя - ".$name."<br> Возраст - ".$age;
    
    
        echo "Задание php_2 : <br>";     
    $array_pif = array(
        1 => array(
          1 => "1",  
          2 => "2",  
          3 => "3",  
        ),
        2 => array(
            1 =>"4",
            2 =>"6",
            3 =>"8",
        ),
    );
    echo"Значение элемента [1][2] = ".$array_pif[1][2]."<br>";
    
    
    echo "Задание php_3 : <br>";
    define("SIGN","С уважением, Вася");
    
    $names = array(
    0 => "Дмитрий",
    1 => "Антон",
    2 => "Саша",
    );
 
    $events = array(
    "op_doors" => "день открытых дверей",
    "vistavka" => "выставку",
    "birthday" => "день рождения", 
    );
    $date = 28;
    $str = "<p>Уважаемый(ая), <span style = 'color:red'>".$names[2]."</span>! </p>";
    $str1 = "<p>Приглашаем вас на <span style = 'color:red'>".$events["birthday"]."</span>!</p>";
    $str2 = "<span style='color:brown'>".$date."</span> Июня";
    echo $str.$str1.$str2;
    ?>
</body>
</html>