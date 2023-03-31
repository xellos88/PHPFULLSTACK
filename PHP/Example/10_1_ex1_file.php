<?php

    //파일을 여는 방법:fopen(파일위치, 파일여는 방식)
    // $f_food = fopen("./sam/food.txt","r");//r 읽기전용
    // // $f_food = fopen("./sam/food.txt","w");//w 쓰기전용(포인터가 파일 시작부분)
    // $f_food = fopen("./sam/food.txt","a");//a 쓰기전용(포인터가 파일 끝부분)
    // var_dump($f_food);

    //파일을 한줄씩 읽어오는 방법: fgets( 오픈한 파일 )
    // print fgets($f_food);

    // while(!feof($f_food))      //feof() 함수는 전달받은 파일 포인터가 파일의 끝에 도달하면, true를 반환
    // {
    //     $aa = fgets($f_food);  // 한 줄씩 $aa 변수에 저장하고 
    //     echo $aa."";           // 출력함
    // }   
    
    // while($line = fgets($f_food))
    // {
    //     print $line;
    // }

    // $f_food = fopen("./sam/food.txt","a");//a 쓰기전용(포인터가 파일 끝부분)
    // //파일에 내용 추가 : fputs(open한 파일, 추가할 내용내용)
    // fputs($f_food,"\n돈가스");
    // fputs($f_food,"\n돈가스2");
    // fputs($f_food,"\n돈가스3");

    
    fclose($f_food);//파일을 닫는 방법:fclose( 오픈한 파일 )









?>