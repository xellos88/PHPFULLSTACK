<?php
    $num = 10;
    for($i=0; $i<$num; $i++){
        for($j=$num-1;$j>$i;$j--){
            echo " ";
        }           
        for($j=0;$j<2*$i+1;$j++){
        echo "*";
        }
        echo "\n";
    }    
?>