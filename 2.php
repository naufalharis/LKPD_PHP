<?php

$pembelian = 110000;
$day = date("Tuesday");
$diskon1 = $pembelian * 7/100;
$diskon2 = $pembelian * 5/100;
$total= 0;


        if($pembelian > 100000 && $day == date("Tuesday")){
            $total= $pembelian - $diskon1 - $diskon2;
        }else if ($pembelian > 100000 && $day != date("Tuesday")){
        $total= $pembelian - $diskon2;
        }else if ($pembelian <= 100000 && $day == date("Tuesday")){
            $total = $pembelian - $diskon1;
        }else {
            $total = $pembelian;
        }

    echo "total pembelanjaan" . number_format($pembelian,0,'.','.')."<br>";
    echo "total bayar" . number_format($total,0,'.','.')."<br>";
?>