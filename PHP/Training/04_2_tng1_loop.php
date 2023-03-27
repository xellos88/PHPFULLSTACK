<?php
    // $aa=2;
    // $cc=9;
    // while($aa<=$cc){
    //     echo $aa.' 단'."\n";
    //     $bb=1;
    //     while($bb<=$cc){
    //         echo $aa.' * '.$bb.' = '.($aa*$bb)."\n"; 
    //         $bb++;
    //     }
    //     $aa++;
    //     }
    ///
    // $num = 10;
    // for($i = 0; $i<$num; $i++){
    //     for($j = 0; $j<=$i; $j++){
    //         echo "*";
    //     }
    // echo "\n";
    // }
    $num=10;
    for($a=1; $a<=$num; $a++){
        for($b=$num; $a<$b; $b--){
            echo " ";
        }
        for($b=0; $a>$b; $b++){
            echo "*";
        }
        echo"\n";
    }

    // ///역순
    // $num=10;
    // for($i=0; $i<=$num; $i++){
    //     for($j = $num; $j>$i; $j--){
    //         echo "*";
    //     }
    //     echo "\n";
    // }
    // ///트리///
    // $num = 10;
    // for($i=0; $i < $num; $i++){
    //     for($j=$num-1; $j > $i; $j--){
    //         echo "";
    //     }           
    //     for($j=0; $j < 2*$i+1; $j++){
    //     echo "*";
    //     }
    //     echo "\n";
    // }    
?>