<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba-6_PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
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
    getTable(9,9,"red");
    ?>
</body>
</html>