<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label value="bilangan" for="bilangan">masukan kode:</label><br>
    <input type="number" id="bil1" name="bil1" required><br><br>
    <input type="number" id="bil2" name="bil2" required><br><br>
        <select name="operator" id="">
            <option value="penjumlahan">penjumlahan</option>
            <option value="pengurangann">pengurangan</option>
            <option value="perkalian">perkalian</option>
            <option value="pembagian">pembagian</option>
            <input type="submit" name="hitung"value="hitung">
        </select>
    </form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $text1 = $_POST['bil1'];
    $text2 = $_POST['bil2'];
    $operator =$_POST ['operator'];

    if($operator == "penjumlahan"){
        $hasil = $text1 + $text2;
        echo "$hasil";
    }
    else if($operator == "pengurangan"){
        $hasil = $text1 - $text2;
        echo "$hasil";
    }
    else if($operator == "perkalian"){
        $hasil = $text1 * $text2;
        echo "$hasil";
    }
    else if($operator == "pembagian"){
        $hasil = $text1 / $text2;
        echo "$hasil";
    }
}
?>
</body>
</html>