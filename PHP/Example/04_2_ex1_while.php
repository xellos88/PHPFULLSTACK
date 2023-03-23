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
		// do{
		// 	반복할 처리}
		// }
		// while(조건);

		// $i=0;

		// do{
		// 	echo $i, " do while";
		// }
		// while($i===1);
		// while($i===1){
		// 	echo $i, "while";
		// }
		
	//3.for문
	for ($i=2; $i <=9; $i++){
		echo $i, "단\n";
			for ($j=1; $j <=9; $j++){
				echo $i."*".$j."=".($i* $j)."\n";
			}
		}
?>
