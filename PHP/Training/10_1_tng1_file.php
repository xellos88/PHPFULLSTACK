<?php

//파일명 : gugudan.txt 
//파일위치: sam
//내용은 아래와 같습니다
//2단
//2 * 1 = 2
//2 * 2 = 4
//....
//2 * 9 =18

    $gugudan = fopen("..Example/sam/gugudan.txt","w");


    $j = 2;
    echo $j."단\n"; 
    for($i=1; $i <=9; $i++) 
    {
        echo $j." * ".$i." = ".$j * $i."\n";
    }

    fputs($gugudan,"");

    fclose("$gugudan");

?>
