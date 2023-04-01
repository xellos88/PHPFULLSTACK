<?php

    //콘솔에 출력
    // print "프린트";

    // echo "에코";

    // print_r(array(1,2,3));
    
    // var_dump(array(3,4,5));

    // // 변수: 정보들을 저장하는 장소 
    // //※ 변수명 앞 숫자 x, "_" 제외한 특수문자 x 
    // $int_i=1;
    // $인트 = 1;
    // echo $int_i;
    // $sum = $int_i + 5;

    //스네이크 기법: 영어 소문자만 사용, 단어 사이의 연결은 '_'로 작석하는 방법(ex:$arr_food)
    //카멜 기법: 영어만 사용, 단어 사이의 첫 글자로 대문자로 작성(ex:$arrFood)
    
    //숫자 10을 변수 $i_ten, 숫자 5를 변수 $i_five, 숫자8_eight,숫자 3을 $i_three에저장
    //아래 연산을 해주세요.10 - 5 + 8 하고, 3으로 나눈 나머지
    
    // $i_ten = 10;
    // $i_eight = 8;
    // $i_five = 5;
    // $i_three = 3;

    // $cal=($i_ten - $i_five + $i_eight) % $i_three;
    // echo $cal;

    //증가 연산자, 감소 연산자
    // $i_increase = 0;
    // $i_decarease = 0;

    // ++$i_increase;  //전위 증가 연산자
    // $i_increase++;  //후위 증가 연산자

    // --$i_decarease; //전위 감소 연산자
    // $i_decarease--; //후의 감소 연산자
    // // echo $i_increase;

    // $i_increase = 0;
    // echo ++$i_increase;
    // echo $i_increase++;
    
    // echo $i_increase;

    //산술대입 연산자
    // $i = 0;

    // $i = $i+2;
    // $i += 2;
    // $i -= 1;
    // $i *= 3;
    // $i /= 4;
    // $i=6;
    // $i %= 6;
    
    // $str = "aa";
    // $str = $str."aa";
    // $str .= "bb";
    // echo $str;

    //비교 연산자
    // $a < $b : a가 b보다 작다, b가 a보다 크다.
    // $a > $b : a가 b보다 크다, b가 a보다 작다.
    // $a <= $b :a가 b보다 작거나 같다, b가 a보다 크거나 같다.
    // $a >= $b :a가 b보다 크거나 같다, b가 a보다 작거나 같다.
    // $a != $b: a와 b가 같이 다르다.
    // $a !== $b: a와 b가 값과 데이터 형식 다르다.
    // $a === $b: a와 b가 값과 데이터 형식 같다.

    // $a = 1;
    // $b = 1;
    // var_dump($a !=$b);
    // var_dump($a !==$b);

    //데이터를 비교할 때는 데이터 형식까지 비교해야 버그가 줄어듬.
    // var_dump(false==0);
    // var_dump(false==1); 

    // //논리 연산자
    // $i=1;
    // //&&(and연산자) : 모든 조건이 만족할때 사용
    // var_dump($i===1 && $i<=1 && $i>0);

    // //||(or연산자)  : 여러 조건중 하나만 만족할때 사용
    // var_dump($i===1 || $i<1 || $i>0);

    // //!(not연산자)  : 결과를 반전
    // var_dump(!($i===2));

    //삼항연산자:(조건)? (참의 경우): (거짓의 경우)
    // $i=1;
    // $str = "";
    // $i > 0 ? $str = "000" : $str = "111";
    // echo $str;

    //삼항 연산자를 이용해서 짝수와 홀수
    $i = 1;
    $str = "";
    $i % 2 === 1 ? $str = "홀수" : $str = "짝수";
    echo $str;

    //if문 : 





































































?>
