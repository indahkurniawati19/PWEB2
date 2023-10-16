<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <form method="post">
        <label for="x">Masukkan Nilai dqari X:</label>
        <input type="text" name="x">
        <input type="submit" value="kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];}
    echo "Nilai X = $x </br></br>";
    if ($x>0){
        echo " $x Adalah Bilangan Positif";
    } else if ($x<0){
        echo " $x Adalah Bilangan Negatif";
    } else {
        echo "$x Adalah Bilangan Nol";
    }
    ?>
</body>
</html>