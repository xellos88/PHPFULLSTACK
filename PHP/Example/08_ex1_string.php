<?php

    ///문자열 합치기
    $str_1='aaa';
    $str_2='bbb'."\n";
    $str_sum = $str_1.$str_2;
    
    echo $str_sum;

    //소문자 변환
    $str_en='abcd EFGH';
    echo strtolower($str_en)."\n";
    //대문자 변환
    echo strtoupper($str_en)."\n";
    //맨 앞 글자만 대문자 변환
    echo ucfirst($str_en)."\n";
    //각 단어의 맨 앞 글자만 대문자로 변환
    echo ucwords($str_en)."\n";

    //URL관련 함수
    $url = "https://www.google.com/";
    
    $arr_url = parse_url($url);
    var_dump($url);

    parse_str($arr_url["query"], $arr_parse);

    var_dump($arr_parse);


?>