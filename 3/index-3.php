<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width initial-scale = 1">
    <link rel="stylesheet" href="style.css">
    <title>Laba3-PHP</title>
</head>
<body>
  <form action='index-3.php' method = 'post'>
       <p><input class='input-txt' type='text' placeholder='Введите ваше имя тут' name='name'></p>
       <p><input type='submit' value='Отправить'></p>
        </form>
    <?php
        echo "<p style = 'color:red'>Задание php 3_1:<p>";
       $colors = array("blue","red","white","black");
        $a = $colors[1];
        switch($a){
            case "blue":
                echo "Синий";
                break;
            case "red":
                echo "Красный";
                break;
            case "white":
                echo "Белый";
                break;
            case "black":
                echo "Чёрный";
                break;
            default:
                echo "Не знаю такого цвета!";
                break;
        }
    
    echo "<p style = 'color:red'>Задание php 3_2:<p>";
    function max1($a,$b,$c){
        $maximum = 0;
//        if($a>$b){
//            if($a>$c){
//                echo "Максимальное число - ".$a;
//            }else {
//                echo "Максимальное число - ".$c;
//            }
//        }else{
//            if($b>$c){
//                echo "Максимальное число - ".$b;
//            }else{
//               echo "Максимальное число - ".$c; 
//            }
//        }
        ($a>$b) ? $maximum = $a : $maximum = $b;
        ($c> $maximum) ? $maximum = $c : $maximum = $maximum;  
        return $maximum;
    }
    $gg = max1(5,19,17);
    echo "Максимальное число - ".$gg;
    
    echo "<p style = 'color:red'>Задание php 3_3:<p>";
    echo "<p style = 'color:blue'>Инпут находится сверху, введите туда имя и нажмите на кнопку, чтобы с вами поздоровался сайт!<p>";
       $name = $_POST['name'];
        if($name != null && $name !="" && $name !="0"){
            echo"Привет, ".$name."!";
        }else{
            echo"Привет,незнакомец!";
        }
    
    echo "<p style = 'color:red'>Задание php 3_4:<p>";
    $day = 8;
    switch($day){
        case 1:           
        case 2:        
        case 3:     
        case 4:  
        case 5:
            echo "Это рабочий день!";
            break;
        case 6:
            echo "Это выходной день!";
            break;
        case 7:
            echo "Это выходной день!";
            break;
        default:
            echo "Это неизвестный день!";
            break;
    }
    
    echo "<p style = 'color:red'>Задание php 3_5:<p>";
   $msg = ($day == 1 || $day == 2 || $day == 3 || $day == 4 || $day == 5)? "Это рабочий день!" : ($day == 6 || $day == 7)?  "Это выходной день!" :  "Это неизвестный день!";
    echo "Тернарный оператор:<br>";
    echo $msg."<br><br>";
    echo "Логические операторы:<br>";
    if($day == 1 || $day == 2 || $day == 3 || $day == 4 || $day == 5){
        echo "Это рабочий день!";
    }elseif($day == 6 || $day == 7){
        echo "Это выходной день!";
    }else{
       echo "Это неизвестный день!";
    }
        
    ?>
</body>
</html>