<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
 <p style = 'color:red; font-size:40px;text-transform:uppercase'> Лабораторная работа 7_1</p>
    <form action="calculator.php" method="post">
        <input type="text" placeholder="Введите первое число" name="firstNum">
        <input type="text" placeholder="Введите знак" name="mark">
        <input type="text" placeholder="Введите второе число" name="secondNum">
        <input type="submit" name="submit" value ="Посчитать">
    </form>
    
    <?php
      $firstNum=$_POST['firstNum'];
            $secondNum=$_POST['secondNum'];
            $mark=$_POST['mark'];
             $result;
        if(is_numeric($firstNum) && is_numeric($secondNum)){
            switch($mark){
                     case "+":
                       $result = $firstNum+$secondNum;
                         break;
                     case "/":
                       if($secondNum!=0){
                        $result = $firstNum/$secondNum;
                       }else{
                          $result = "Ошибка"; 
                       }   
                         break;
                     case "*":
                       $result = $firstNum*$secondNum;
                         break;
                     case "-":
                       $result = $firstNum-$secondNum;
                         break;
                     default:
                         $result = "Ошибка";
                         break;
                 }
            echo "Результат выполнения операции со знаком ".$mark." = ".$result;
        }else{
            echo "Одно из ваших чисел не является числом";
        }
    ?>
</body>
</html>