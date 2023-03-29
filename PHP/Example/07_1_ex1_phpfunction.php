<?php
    //min,max,floor,round,ceil,rand

    // echo floor(4.9)."\n";//소수점 아래 내림
    // echo round(4.5)."\n";//소수 반올림
    // echo ceil(4.1)."\n";//소수점 아래 올
    // echo min(array(3,4,6,1,3))."\n";
    // echo max(array(3,4,6,1,3))."\n";
    // echo rand(0,2)."\n";

    //날짜 관련 함수

    // echo time()."\n";
    // echo date('Y-M-D H:I:S')."\n";
    // echo date('y-m-d h:i:s')."\n";
    // echo date('y-m-d h:i:s a')."\n";
    // echo date('y-m-d h:i:s l')."\n";
    // echo date("Y-m-d", mktime(0, 0, 0, 9, 1, 2015));
    
    //난수 함수
    // echo mt_rand(0,10);
    
    //OS, PHP, GLOBALS 정보 상수, 변수 및 함수
    // echo PHP_OS;
    // echo PHP_VERSION;
    // var_dump($GLOBALS);
    // var_dump(phpinfo());
    
    // 상수 선언(명명규칙: 상수명은 꼭 대문자로 작성한다.)
    define("INT_ONE",1);

    echo INT_ONE; 
?>