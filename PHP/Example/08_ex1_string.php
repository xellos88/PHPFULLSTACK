<?php

    // ///문자열 합치기
    // $str_1='aaa';
    // $str_2='bbb'."\n";
    // $str_sum = $str_1.$str_2;
    
    // echo $str_sum;

    // //소문자 변환
    // $str_en='abcd EFGH';
    // echo strtolower($str_en)."\n";
    // //대문자 변환
    // echo strtoupper($str_en)."\n";
    // //맨 앞 글자만 대문자 변환
    // echo ucfirst($str_en)."\n";
    // //각 단어의 맨 앞 글자만 대문자로 변환
    // echo ucwords($str_en)."\n";

    // //URL관련 함수
    // $url = "https://www.google.com/";
    
    // $arr_url = parse_url($url);
    // var_dump($url);

    // parse_str($arr_url["query"], $arr_parse);

    // var_dump($arr_parse);

    //역순의 문자열
    // $str_abcd = "abcd";
    // echo strrev($str_abcd);

    //문자열 자르기
    // $str_1= "가나다라마";
    // //mb_substr(문자열, 시작 숫자, 길이, 인코딩 = mb_internal_encoding())
    // echo mb_substr($str_1,2)."\n";
    // echo mb_substr($str_1,2,1)."\n";
    // echo mb_substr($str_1,3,2);

    //        
    // $str_tng="안녕하세요. PHP입니다.";//

    // echo mb_substr($str_tng, 7)."\n";
    // echo mb_substr($str_tng, -7)."\n";
    // echo mb_substr($str_tng, 7,7)."\n";
    // echo mb_substr($str_tng, -7,7)."\n";

    // echo mb_substr($str_tng, 3,5)."\n";
    // echo mb_substr($str_tng, -11,5)."\n";

    // //문자열 빈공간 지우기
    // $str_trim = "               ab c  d ef              \n";
    // echo trim($str_trim);
    // echo "aaa";
    // echo ltrim($str_trim)."\n";
    // echo rtrim($str_trim)."\n";

    //문자열의 길이르 구하는 함수
    // $str_len="가나다라마";

    // echo mb_strlen($str_len);

    //문자열 포맷에 따라 출력하는 함수
    // printf("안녕하세요. %s입니다. %d", "PHP",1234)."\n";
    // define("WELCOM", "안녕하세요. %s님.");
    // printf(WELCOM, "홍길동");

    //기본 포맷 : ERROR(숫자): XXX ERROR가 발생했습니다.
    //에러 번호 : 에러종류
    //1:시스템 2: 로그인 3:접속
    // define("ERROR_1", "ERROR(%d) : %s ERROR가 발생했습니다."."\n");
    // printf(ERROR_1, 1, "시스템");
    // printf(ERROR_1, 2, "로그인");
    // printf(ERROR_1, 3, "접  속");
    
    //문자열을 분리하는 함수
    // $str_sscanf = "가나다라 50 abcd";
    // sscanf($str_sscanf,"%s %d %s",$str_ko, $int_d, $str_en);
    // echo $str_ko, "\n", $int_d, "\n", $str_en, "\n";

    //문자열을 반복해서 찍어주는 함수
    // echo str_repeat("💎",5);

    //문자열을 특정 문자열로 분리하는 함수 : explode()
    $str_expl = "홍길동,27세,남자,의적,조선";
    $arr_expl = explode(",",$str_expl);
    // print_r($arr_expl);

    //배열을 특정 문자열로 합치는 함수 : implode()
    $str_impl = implode("123",$arr_expl);
    echo $str_impl;

?>