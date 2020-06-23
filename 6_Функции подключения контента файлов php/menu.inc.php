
    

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba-6_PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php
    $menu = array(
        "Home" => "index-6.php",
        "About" => "lib.inc.php",
        "Contact" =>"menu.inc.php",
    );
        foreach($menu as $index =>$value){
            echo "<p><a href = ".$value.">".$index."</a></p>";
        }
    ?>
</body>
</html>