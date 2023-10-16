<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fungsi</title>
</head>
<body>
    <?php 
    function persegi_panjang($p,$l){
        return $p * $l;
    }
    function lingkaran($r){
        return 3.14*$r*$r;
    }
  
 ?>

    <form method="post"></br>
    <input type="text" name="panjang" placeholder="Masukkan Panjang"></br>
    <input type="text" name="lebar" placeholder="Masukkan lebar"></br>
    <input type="text" name="radius" placeholder="Masukkan radius">
    <input type="submit" name="hitung">
</from>
<?php 
 if (isset ($_POST["hitung"])){
    $panjang=$_POST["panjang"];
    $lebar=$_POST["lebar"];
    $radius=$_POST["radius"];

    echo "</br> Luas Persegi Panjang= " . persegi_panjang($panjang, $lebar) . "</br>";
    echo "</br> Luas Lingkaran= " . lingkaran($radius) . "</br>";
  
 }

?>
</body>
</html>