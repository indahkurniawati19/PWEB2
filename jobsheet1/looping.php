<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php 
    echo "Perulangan FOR bilangan  genap 1 hingga 10 </br>";
    for($x=2; $x<=10; $x+=2)
        echo "$x </br>";
    echo "</br>Perulangan WHILE bilangan ganjil 1 hingga 10 </br>";
    $y=1;
    while($y<=10){
        echo "$y </br>";
        $y += 2;
    }
    
    echo "</br>Perulangan DO WHILE bilangan Prima kurang dari 20 </br>";
    $k = 2;
do { 
    $bilprim = true;

    for ($i = 2; $i < $k; $i++) {
        if ($k % $i === 0) {
            $bilprim = false;
            break;
        }
    }

    if ($bilprim) {
        echo $k . "</br> ";
    }

    $k++;
} while ($k < 20);
    ?>
</body>
</html>