<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $time = date("h:i:sa");
    echo $time . "<br>";
    $date = date("m/d/y");
    echo $date . "<br>";
    
    //or you can make the function directly into the echo. No need to create the variable, but keep in mind the variable is very important
    echo date("M/D/Y") . "<br>";

    $x = 10;
    $y = 50;
    $sum = $x + $y;
    echo $sum . "<br>";
    $subtraction = $x - $y;
    echo $subtraction . "<br>";
    $multiplication = $x * $y;
    echo $multiplication . "<br>";
    $division = $y / $x;
    echo $division . "<br>";
    ?>
</body>
</html>