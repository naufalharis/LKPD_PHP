<?php



function menghitungkarakter($dicari, $kode){
echo strlen($kode ,$dicari);
}

$text = "agusssss";
$dicari = $text; 
$kode= "/s/i";

echo "karakter yang dicari adalah: ". $dicari. "<br>" . "ada ";
echo menghitungkarakter($dicari,$kode) . " karakter yang dicari ";