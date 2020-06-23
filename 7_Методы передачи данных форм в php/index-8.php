<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лаба 8 в 7 задании</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <p style = 'color:red; font-size:40px;text-transform:uppercase'> Лабораторная работа 8_3</p>
    <form action="index-8.php" method="post">
      <div class="form__container">
       <h2>Исходная валюта</h2>
       <select name="sel" id="sel">
           <option value="eur">EUR</option>
           <option value="usd">USD</option>
           <option value="kzt">KZT</option>
           <option value="jpy">JPY</option>
           <option value="chf">CHF</option>
       </select>
       <h2>Сумма</h2>
        <input type="text" name="text">
        <input type="submit" name="submit" value="пересчитать">
        </div>
    </form>
    <?php
    
   function CBR_XML_Daily_Ru() {
    $json_daily_file = __DIR__.'/daily.json';
    if (!is_file($json_daily_file) || filemtime($json_daily_file) < time() - 3600) {
        if ($json_daily = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js')) {
            file_put_contents($json_daily_file, $json_daily);
        }
    }

    return json_decode(file_get_contents($json_daily_file));
}

$data = CBR_XML_Daily_Ru();
    
    $valute = $_POST['sel'];
    $summa = $_POST['text'];
    $pivot;
    $result = 0;
    
//    $value = array(
//        "usd" => 76.71,
//        "eur" => 83.35,
//        "kzt" => 0.18
//    );
    
    switch($valute){
        case "eur":
            $pivot = $data->Valute->EUR->Value;
            $mark = $data->Valute->EUR->Name;
            break;
        case "usd":
            $pivot = $data->Valute->USD->Value;
            $mark = $data->Valute->USD->Name;
            break;
        case "kzt":
            $pivot = ($data->Valute->KZT->Value)/100;
            $mark = $data->Valute->KZT->Name;
            break;
        case "jpy":
            $pivot = ($data->Valute->JPY->Value)/100;
            $mark = $data->Valute->JPY->Name;
            break;
        case "chf":
            $pivot = ($data->Valute->CHF->Value);
            $mark = $data->Valute->CHF->Name;
            break;
    }
    if(is_numeric($summa)){
     $result = $summa * $pivot;
    echo "<p style = 'color:white;font-size:20px'>$summa ".$mark." = ".$result." рублей</p>";   
    }else{
        echo "<p style = 'color:white;font-size:20px'>Вы не ввели числовое значение в поле для сумммы!</p>";
    }
    ?>
</body>
</html>