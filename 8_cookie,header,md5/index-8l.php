<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba8</title>
</head>
<body>
    <?php
    echo "<p style = 'color:red;font-size:20px'>Задание 8_1</p>";
        setcookie("name","Anton");
    if(isset($_COOKIE["name"])){
      function printCookie(){
          echo $_COOKIE["name"];
      }
    }else{
        echo "Данные пока не передавались в куки";
    }
    ?>
    <input type="text" value = "<?php printCookie()?>">
    <?php
    echo "<p style = 'color:red;font-size:20px'>Задание 8_2</p>";
           $counter = 0;
           if(isset($_COOKIE["counter"])){
             $counter = $_COOKIE["counter"]+1;
           }else{
               $counter = 1;
           }
           setcookie("counter",$counter);
           if(isset($_COOKIE["counter"])){
            echo "Количество посещений сайта - ".$counter;   
           }
       echo "<p style = 'color:red;font-size:20px'>Задание 8_3</p>";  
//           while(list($pass,$value) = each($_COOKIE)){
//               $array[0] = "qwerty";
//               $array[1] = "8552";
//               $array[2] = "anton";
//           }
//           foreach($array as $val){
//              
//           }
           $passwords = array(
               0 =>"qwerty",
               1 =>"8552",
               2 =>"anton"
           );
           
           foreach($passwords as $index => $val){
               setcookie("pass[".$index."]",$val);
           }
           
           if(isset($_COOKIE["pass"])){
               foreach($_COOKIE["pass"] as $index => $value){
                   $value = htmlspecialchars($value);
                   ?>
                   <input type="text" value="<?php echo $value ?>">
                   <?php
               }
           }           
//           $passwords = array(
//               0 =>"qwerty",
//               1 =>"8552",
//               2 =>"anton"
//           );
//           foreach($passwords as $val){
//               setcookie("pass",$val);
//               if(isset($_COOKIE["pass"])){
                  
//               }
//           }
         echo "<p style = 'color:red;font-size:20px'>Задание 8_4</p>";    
//           echo "удаляю куки из 8_1";
//           setcookie("name","",time()-3600);
           
        echo "<p style = 'color:red;font-size:20px'>Задание 8_5 в файле header.php</p>";
           
           echo "<p style = 'color:red;font-size:40px'>Лабораторная работа 8_1 в файле cookie.php</p>";  
           
    ?>
</body>
</html>