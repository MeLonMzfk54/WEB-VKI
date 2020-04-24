<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Header.php</title>
</head>
<body>
    <h2>Здравствуйте!</h2>
    <?php
    date_default_timezone_set('UTC');
        function Timer(){
            $now = time();
            $stop = time()+5;
            while($now<$stop){
                $now = time();
            }
            if($now == $stop){
                header("Location: https://ru.wikipedia.org/wiki/Заглавная_страница");
                exit;
            }
        }
    Timer();
    ?>
</body>
</html>