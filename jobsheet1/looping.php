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
 
    $i = 2;

    do {
        $isPrime = true;
    
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
    
        if ($isPrime) {
            echo $i . " </br> ";
        }
    
        $i++;
    } while ($i < 20);
    ?>
</body>
</html>