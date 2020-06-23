<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba-functions DOP</title>
</head>
<body>
    <?php
    echo"<p style = 'color:red; font-size:20px;text-transform:uppercase'> Задание php 5_1</p>";
    function stepen ($a,$b){
        return pow($a,$b);
    }
       echo stepen(2,3);
    
    echo"<p style = 'color:red; font-size:20px;text-transform:uppercase'> Задание php 5_2</p>";
    function stepen2($a =2){
        return pow(2,$a);
    }
    echo stepen2(5);
    
    echo"<p style = 'color:red; font-size:40px;text-transform:uppercase'> Лабораторная работа_1</p>";
    
    function getTable($cols=9,$rows=9,$color = "yellow"){
    echo"<table border = '1'>";
    for($tr=1; $tr<=$rows; $tr++){
    echo "<tr>";
        for($td=1; $td<=$cols; $td++){
        if($tr ==1 || $td ==1){
        echo "<th style='background-color:".$color.";font-weight:900'>".$tr * $td."</th>";
        }else{
        echo "<td>".$tr * $td."</td>";
        }
        }
        echo "</tr>";
    }
    echo "</table>";
    }
    getTable();
    getTable(5);
    getTable(5,5);
    getTable(5,5,"red");
    
    echo"<p style = 'color:red; font-size:40px;text-transform:uppercase'> Лабораторная работа_2</p>";
    
    function getMenu($menu,$vertical = true){
        if($vertical == true){
          foreach($menu as $index =>$value){
            echo "<p><a href = ".$value.">".$index."</a></p>"; 
          }  
        }else{
           foreach($menu as $index =>$value){
            echo "<a style = 'margin-right:10px'href = ".$value.">".$index."</a>"; 
          } 
          }
        }  
    $menu = array(
        "Home" => "index.php",
        "About" => "about.php",
        "Contact" =>"contact.php",
    );
    getMenu($menu,false);
    getMenu($menu);
    ?>
</body>
</html>