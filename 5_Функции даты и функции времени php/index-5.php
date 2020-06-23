<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba-5_PHP</title>
</head>
<body>
    <?php
    echo"<p style = 'color:red; font-size:20px;text-transform:uppercase'> Задание php 5_1</p>";
    $now = time();
    $birthday = mktime(0,0,0,6,28,2020);
    $count = $birthday-$now;
    echo"<p>Дата моего следующего дня рождения - ".date("d-m-y",$birthday)."</p>";
    echo "<p>Сегодняшняя дата - ".date("d-m-y",$now)."</p>";
    echo "<p>До моего дня рождения - ".$count." сек.</p>";
    
    echo"<p style = 'color:red; font-size:40px;text-transform:uppercase'> Лабораторная работа_5</p>";
    $H = date("h",$now) +7;
    $I = date("i",$now);
    $minutes;
    $hours;
    if($I%10 == 1){
        $minutes = "минута";
    }else if($I%10 == 2 || $I%10 == 3 || $I%10 == 4){
        $minutes = "минуты";
    }else if($I%10 == 5 || $I%10 == 6 ||$I%10 == 7 || $I%10 == 8 || $I%10 == 9 || $I%10 == 0){
        $minutes = "минут";
    }else if($I>=5 && $I<=20){
        $minutes = "минут";
    }
    if($H == 1 || $H == 21 || $H == 23 || $H == 22){
        $hours = "час";
    }else if(($H>=2 && $H<=4) || $H == 24){
        $hours = "часа";
    }else if($H>=5 && $H<=20){
        $hours = "часов";
    }
    
    echo $H." ".$hours." ".$I." ".$minutes;
    ?>
</body>
</html>