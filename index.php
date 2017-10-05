<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - oef3</title>
</head>
<body>
    <?php
        $x = 10;
        $y = 7;

        $sum = $x + $y;
        $min = $x - $y;
        $multiply = $x * $y;
        $divide = $x / $y;
        $rest = $x % $y;
    ?>

    <p><?=$x?>+<?=$y?>=<?=$sum?></p>
    <p><?=$x?>-<?=$y?>=<?=$min?></p>
    <p><?=$x?>*<?=$y?>=<?=$multiply?></p>
    <p><?=$x?>/<?=$y?>=<?=$divide?></p>
    <p><?=$x?>%<?=$y?>=<?=$rest?></p>


</body>
</html>