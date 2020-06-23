<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CreateElements</title>
</head>
<body>
    <?php
        if(isset($_POST['checkText'])){
            $text = $_POST['countTxt'];
        }else{
            echo "<p>Вы не выбирали текстовые поля для создания</p>";
        }
        if(isset($_POST['checkButton'])){
            $btns = $_POST['countBtn'];
        }else{
            echo "<p>Вы не выбирали кнопки для создания</p>";
        }
        if(is_numeric($text) && is_numeric($btns)){
            echo"<p>Все поля будут созданы</p>";
        }else{
            echo"<p>Одно или несколько полей имеют нечисловые значения, они не будут созданы, перепроверьте правильность ввода</p>";
        }
        echo " <form action='task.php' method='post'>";
            while($text>0){
                echo "<p>Введите название".$text."-го поля типа text: <input type='text' name='text".$text."'></p>";
                $text--;
            }
         while($btns>0){
             echo "<p>Введите название".$btns."-го поля типа button: <input type='text' name='btnText".$btns."'></p>";
             $btns--;
         }
            echo "<input type='submit' name='submit' value = 'отправить'>";
        echo"</form>";
        echo"<p style = 'color:red; font-size:40px'>Еще не дописал!</p>";
    ?>
</body>
</html>