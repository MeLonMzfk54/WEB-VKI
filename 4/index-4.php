<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba-4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        echo"<p style = 'color:red; font-size:20px;text-transform:uppercase'> Задание php 4_1</p>";
        for($i=1;$i<10;$i++){
            echo"<p>Квадрат ".$i." = ".pow($i,2)."</p>";
        }
        
        echo"<p style = 'color:red; font-size:20px;text-transform:uppercase'> Задание php 4_2</p>";
            echo"Такое же, как и php 4_1";
    
        echo"<p style = 'color:red; font-size:20px;text-transform:uppercase'> Задание php 4_3</p>";
        $days =array ("понедельник","вторник","среда","четверг","пятница","суббота","воскресенье");
        $end = "1";
        foreach($days as $index => $value){
            
            switch($index){
                   case 0:
                   $end = "-ый";
                    break;
                    case 1:
                   $end = "-ой";
                    break;
                    case 2:
                   $end = "-ий";
                    break;
                    case 3:
                    case 4:
                   $end = "-ый";
                    break;
                    case 5:
                    case 6:
                   $end = "-ой";
                    break;
            }
            $index++;
            echo "<p><span style = 'color:red'>".$value."</span> - день <span style = 'color:red'>".$index."</span>".$end;
        }
    
        echo"<p style = 'color:red; font-size:20px;text-transform:uppercase'> Задание php 4_4</p>";
            for($i=2;$i<=20;$i++){
                if($i%2 !=0){
                    continue;
                }else{
                    echo "<span style = 'margin-right:10px'>".$i."</span>";
                }
            }
        echo"<p style = 'color:red; font-size:20px;text-transform:uppercase'> Задание php 4_5</p>";
        $numbers =array (1,2,3,4,5,6);
        $flag = true;
        foreach($numbers as $value){
            if($value<0){
                $flag = false;
            }
        }
    
    if($flag){
                echo"нет";
            }else{
        echo "да";
    }
    
    echo"<p style = 'color:red; font-size:40px;text-transform:uppercase'> Лабораторная работа_1</p>";
    
    $rows=9;
    $cols=9;
    echo"<table border = '1'>";
    for($tr=1; $tr<=$rows; $tr++){
    echo "<tr>";
        for($td=1; $td<=$cols; $td++){
        if($tr ==1 || $td ==1){
        echo "<th style='background-color:yellow;font-weight:900'>".$tr * $td."</th>";
        }else{
        echo "<td>".$tr * $td."</td>";
        }
        }
        echo "</tr>";
    }
    echo "</table>";
    
    echo"<p style = 'color:red; font-size:40px;text-transform:uppercase'> Лабораторная работа_2</p>";
    $menu = array(
        "Home" => "index.php",
        "About" => "about.php",
        "Contact" =>"contact.php",
    );
        foreach($menu as $index =>$value){
            echo "<p><a href = ".$value.">".$index."</a></p>";
        }
    ?>
</body>
</html>