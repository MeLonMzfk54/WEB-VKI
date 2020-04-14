<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale = 1">
    <title>Laba-1</title>
</head>
<body>
    <?php
         $xn = 0.1;
         $xk = 1;
         $n = 8;
         $s = 0;
         $y = 1;
         $h = 0;
         function factorial($n) {
         return ($n <= 0)? 1 : $n * factorial($n-1); 
         } 
    do 
    { 
        for($i=0; $i <=$n; $i++) 
        { 
            $a=pow(-1,$i); $b=pow($xn,(2*$i)+1); $s +=$a*($b/factorial((2*$i)+1));
        } 
        $y=sin($xn); 
        echo "при x = " .$xn." S(x)=".$s." Y(x)=".$y." <br>";
             $s = 0;
             $h = ($xk-$xn)/10;
             $xn+=$h;
             }
             while ($xn <$xk-0.1);
    ?>
</body>
</html>