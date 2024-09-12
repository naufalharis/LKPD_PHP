<?php

$barang =[
    ['nama_barang' => 'Pasta Gigi',
    'harga_barang' => 18000,
    'jumlah_beli' => 1,],
    ['nama_barang' => 'Odol',
    'harga_barang' => 5000,
    'jumlah_beli' => 2,],
    ['nama_barang' => 'Sabun Mandi',
    'harga_barang' => 7000,
    'jumlah_beli' => 3,],
];

$harga = 0;

echo "Daftar belanjaan";
echo "<ol>";

foreach ($barang as $item){
    $sharga = $item['harga_barang'] * $item ['jumlah_beli'];

    echo "<li>" .($item['nama_barang']) .  "(". ($item['jumlah_beli']) . ") : ". number_format($sharga, 0, ".", ".") . "<br>" ;

    $harga += $sharga;
}

echo "</ol>";
echo  $harga;



?>