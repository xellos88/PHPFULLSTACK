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
    // $i = 1;
    // $str = "";
    // $i % 2 === 1 ? $str = "홀수" : $str = "짝수";
    // echo $str;

    //if문
    // $i=1;
    // if ($i %2 === 0) 
    // {
    //     echo "짝수";
    // }
    // else {
    //     echo "홀수";
    // }

    // $i = 1;
    // if($i === "1")
    // {
    //     echo "문자열 1입니다.";
    // }
    // else if($i === 1)
    // {
    //     echo "숫자 1입니다.";
    // }
    // else {
    //     echo "1이 아닙니다.";
    // }

    //과목의 종류는 국어,영어, 수학, 과학
    //평균 점수는 60점이상이고, 각 과목별 점수가 40점 이상 일 때 "합격"출력
    //그 외는 "불합격"출력 
    
    //평균>=60 and 국,영,수,과>=40 ->합격

    // $kor = 100;
    // $eng = 100;
    // $mat = 100;
    // $sci = 39;
    
    // $avg = ($kor+$eng+$mat+$sci)/4;

    // if($avg>=60 && $kor>=40 && $eng>=40 && $mat>=40 && $sci>=40)
    // {
    //     echo "합격";
    // }

    // else{
    //     echo "불합격";
    // }

    // switch문
    //$str_loc에 지역명을 저장하고, 서울->서울사람, 대구-> 대구사람,부산->부산사람,
    //그외는 타지역사람 switch문으로 작성
    
    // $str_loc="서울";

    // switch ($str_loc) {
    //     case "서울":
    //         echo "서울 사람";
    //         break;
            
    //     case "대구":
    //         echo "대구 사람";
    //         break;

    //     case "부산":
    //         echo "부산 사람";
    //         break;
        
    //     default:
    //         echo "타지역 사람";
    //         break;
    // }

    //반복문: while, for, do_while, foreach
    //while문: 조건을 체크하고 연산을 실행하느 루프
    // $i=1;
    // while ($i === 1) {
    //     echo $i;
    //     break;
    // }


    // //do-while문: 연산을 실행하고 조건을 체크하는 루프
    // $i=1;
    // do {
    //     echo $i;
    // } while ($i !== 1);

    //for문:시작과 끝을 우리가 지정해주는 루프(루프의 횟수를 지정가능)
    // for ($i=0; $i <2 ; $i++) {
    //     echo "$i \n";
        
    // }

    //1~50까지 반복문을 이용해서 더하는 프로그램작성
    // $sum = 0;
    // $j = 50;
    // for ($i=1; $i <= $j ; $i++) 
    // {
    //     $sum += $i;
    // }
    // echo "1~".$j."까지의합:".$sum;

    //배열
    // $arr_i  =array(1,2,3);
    // echo $arr_i[1];

    //연상배열
    //키값 : std_no, std_name, std_age, std_gender
    // $arr_acc = array(
    //             "std_no" => 12
    //             ,"std_name" => "박진영"
    //             ,"std_age" => 88
    //             ,"std_gender" => "M"
    //             ,"std_secret_info" 
    //                 =>array(
    //                     "std_city_no" => 0716
    //                     ,"std_addr" => "대구 중구 중앙대로"
    //                     ,"std_top_secret"
    //             )
    // );
    // echo $arr_acc["std_secret_info"]["std_addr"]."\n".$arr_acc["std_age"];

    //foreach문 : 배열을 루프해서 연산을 하고 싶을 때
    //foreach를 돌려서 나이만 출력되게 프로그램 작성
    //콘솔에 출력되는 양식 (숫자)
    // $arr_acc = array(
    //     "std_no" => 12
    //     ,"std_name" => "박진영"
    //     ,"std_age" => 88
    //     ,"std_gender" => "M"
    // );
    // foreach ($arr_acc as $key => $val)
    // {
    //     if($key === "std_age")
    //     {
    //         $arr_acc[$key] += 10;
    //     }
    // }
    // echo $arr_acc["std_age"];

    //함수 : 재사용성 증가, 가독성 증가
    //------------------------------
    // 함수명   : clean 
    // 파라미터 : $param_name(string) 
    //            $param_loc(string)
    // 리턴     : $result_str(string)
    //------------------------------
    // function clean($param_name,$param_loc)
    // {
    //     $result_str = $param_name."씨, ".$param_loc."을/를 청소해주세요.\n";
    //     return $result_str;
    // }
    // $return_str= clean("aaa","bbb");
    // echo $return_str;

    // $return_str = clean("ccc","ddd");
    // echo $return_str;

    // clean("eee","fff");
    // clean("ggg","hhh");

    //------------------------------
    // 함수명   : my_sum_all 
    // 기능     : 1부터 지정숫자까지의 합을 구해서 리턴
    // 파라미터 : $param_int(int) 
    // 리턴     : $result_int(int)
    //------------------------------
    function my_sum_all($param_int){
        $result_int=0;
        for($i=1; $i <= $param_int; $i++) 
        {
            $result_int += $i;
        }
        return $result_int;
    }
    echo my_sum_all(50);


























































?>
