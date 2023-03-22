<?php
    // $num = 0;
    // $aaa = '당신의 점수는 ';
    // $bbb = '점 입니다.';

    // switch ($num) {
    // case $num>100 || $num<0; 
    //     echo '잘못된 값을 입력 했습니다.'; 
    //     break;    
    // case $num==100; 
    //     echo $aaa , $num, $bbb,'A+'; 
    //     break;
    // case $num>=90; 
    //     echo $aaa , $num, $bbb,'A'; 
    //     break;
    // case $num>=80; 
    //     echo $aaa , $num, $bbb,'B'; 
    //     break;
    // case $num>=70; 
    //     echo $aaa , $num, $bbb,'C'; 
    //     break;
    // case $num>=60; 
    //     echo $aaa , $num, $bbb,'D'; 
    //     break;
    // default: 
    //     echo $aaa , $num, $bbb,'E';
    // }
    $num = 65;
    $aaa = '당신의 점수는 ';
    $bbb = '점 입니다.';

    switch ($num) {
    // case $num>100 || $num<0; 
    //     echo '잘못된 값을 입력 했습니다.'; 
    //     break;    
    case $num==100; 
        echo $aaa , $num, $bbb,'A+'; 
        break;
    case $num ==90; 
        echo $aaa , $num, $bbb,'A'; 
        break;
    case $num ==80; 
        echo $aaa , $num, $bbb,'B'; 
        break;
    case $num ==70; 
        echo $aaa , $num, $bbb,'C'; 
        break;
    case $num ==60; 
        echo $aaa , $num, $bbb,'D'; 
        break;
    default: 
        echo $aaa , $num, $bbb,'F';
    }

?> 
