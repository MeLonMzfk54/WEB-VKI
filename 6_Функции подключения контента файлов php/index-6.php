<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba-6_PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p style = 'color:red; font-size:40px;text-transform:uppercase'> Лабораторная работа_6</p>
        <table border = 1>
            <tr><td colspan = '2' style = 'text-align:center' class = 'header'><?php
                require_once "top.inc.php";?></td></tr>
            <tr><td style = 'text-align:center'  class = 'menu'><h2>МЕНЮ</h2><?php require_once "menu.inc.php";
                ?></td><td><?php require_once "lib.inc.php";?></td></tr>
            <tr><td colspan = '2' style = 'text-align:center'  class = 'header'><?php
                require_once "bottom.inc.php";?></td></tr>
        </table>;
    
</body>
</html>