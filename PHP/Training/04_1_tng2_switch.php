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


    // $num = 100;
    // $aaa = '당신의 점수는 ';
    // $bbb = '점 입니다.';

    // switch ($num) {
    // case $num>100 || $num<0; 
    //     echo '잘못된 값을 입력 했습니다.'; 
    //     break;    
    // case $num==100; 
    //     $result = 'A+'; 
    //     break;
    // case $num ==90; 
    //     $result = 'A'; 
    //     break;
    // case $num ==80; 
    //     $result = 'B'; 
    //     break;
    // case $num ==70; 
    //     $result = 'C'; 
    //     break;
    // case $num ==60; 
    //     $result = 'D'; 
    //     break;
    // default: 
    //     echo $aaa , $num, $bbb, $result;
    // }
    
    $num = 0;
    $grade = floor($num/10);
    
    if(($num>100 || $num<0)){
        echo '잘못된 값을 입력했습니다.';
    }
    else{
    switch($grade) {
        case 10:
            echo "등급 A+";
        break;
        case 9:
            echo "등급 A";
        break;
        case 8:
            echo "등급 B";
        break;
        case 7:
            echo "등급 C";
        break;
        case 6:
            echo "등급 D";
        break;
        default:
            echo "등급 F"; 
    }
}
?> 
