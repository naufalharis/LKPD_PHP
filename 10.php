<?php
function checkJawaban($nama, ...$injawaban){
    $jawaban =[ 'A','2','B','4','C','6','D','8','E','10'];
    $jawabanBenar = [];

    foreach($jawaban as $key => $value){
        if($injawaban[$key] == $value){
            $jawabanBenar[$key] = 1;
        }else{
            $jawabanBenar[$key] = 0;
        }
    }

    echo count (array_keys($jawabanBenar, 1)) . "<br>";
    echo count (array_keys($jawabanBenar, 0)) . "<br>";
    echo $nama;
}


// $namauser = "muhammad";
// $jawabanuser = ['A','B','C','D','E','F','G','H','I','J'];
checkJawaban("muhammad", 'A','2','B','4','C','6','D','8','E','10');
?>