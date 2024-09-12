<?php
    for($i=1 ; $i < 100 ; $i++){
        if($i % 3 == 0 && $i % 5 ==  0 ){
            echo "fizzbuzz";
            echo "<br>";
        }else if($i % 3 == 0){
            echo "buzz";
            echo "<br>";
        }else if($i % 5 == 0){
            echo "fizz";
            echo "<br>";
        }else{echo $i;
            echo "<br>";}
}
    echo "<br>";
?>