<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <label for="namaProduk">Nama Produk:</label><br>
        <input type="text" id="namaProduk" name="namaProduk" required><br><br>
</form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

$text = $_POST['namaProduk'];

preg_match_all('/[^a-zA-Z\s]/' , $text, $matches);

if (count($matches[0]) > 0){
    $ucup = array_unique($matches[0]);
    echo "Karakter yang terdapat pada kalimat : " . implode(',' , $ucup);
} else {
    echo "tidak terdapat simbol padass kalimat.";
}
    }
?>