<?php
    // $num=10;
    // $week = array("Sun","Mon","TUE","Wed", "Thu", "Fri","Sat");
    // print $week[0];

    // $sun="Sun";
    // $mon="Mon";
    // $tue="Tue";
    // $wed="Wed";

    // $week = array($sun, $mon, $tue, $wed);
    // echo $week[1]."\n"."\n";

    // $week2 = array($week[1],$week[3],$week[0],$week[2]);
    // echo $week2[0]."\n";
    // echo $week2[1]."\n";
    // echo $week2[2]."\n";
    // echo $week2[3]."\n"."\n";
    
    // echo $week2[0]."\n".$week2[1]."\n". $week2[2]."\n". $week2[3]."\n";

    // $arr_mult_type=array("aaa", 1, 3.14, "a");
    // echo  $arr_mult_type[0]."\n";
    // var_dump($arr_mult_type);


    //연상 배열
    // $arr_ass = array("key1" => "val1"
    //                 ,"key2" => "val2");
    // print $arr_ass["key1"];

    // $arr_temp = array(
    //                 array(1,2,3,4)
    //                 ,array(5,6,7,8)
    //                 ,array(
    //                     array(9,10,11)
    //                     )
    //             );
    
    // echo $arr_temp[2][0][1];
    // $arr_temp_3=$arr_temp[2][0];
    
    // $arr_temp_3_c = array(
    //                     array(9,10,11)
    //                 );

    //배열의 원소 삭제 : unset()
    // $arr_week = array("Sun","Mon","delete","Tue","Wed", "Thu", "Fri","Sat");
    //     unset($arr_week[2]);
    //     print_r($arr_week);

    //     echo($arr_week[2]);

    //  중복되지 않는 원소를 반환 : array_diff()
    // $arr_diff_1 = array("a", "b", "c");
    // $arr_diff_2 = array("a", "b", "d");
    // $array_diff = array_diff($arr_diff_1, $arr_diff_2);
    // //배열1 값중에 배열2에 없는 값만 배열 형태로 반환
    // print_r($array_diff);

    //배열의 정렬 : asort(), arsort(), ksort(), krsort()
    // $arr_asort = array("b", "a", "d", "c");
    // $arr_asort_restult =  asort($arr_asort);
    // print_r($arr_asort);

    // $arr_arsort = array("b", "a", "d", "c");
    // $arr_arsort_restult =  arsort($arr_arsort);
    // print_r($arr_arsort);

    //ksort

    // $arr_ksort = array("key1" => "val1"
    //                 ,"key3" => "val3"
    //                 ,"key4" => "val4"
    //                 ,"key2" => "val2");
    // ksort($arr_ksort);  
    // print_r($arr_ksort);

    // //krsort
    // $arr_krsort = array("key1" => "val1"
    //                 ,"key3" => "val3"
    //                 ,"key4" => "val4"
    //                 ,"key2" => "val2");
    // krsort($arr_krsort);  
    // print_r($arr_krsort);
    // //array의 사이즈를 반환하는 함수 :  couunt();
    // echo count($arr_krsort);
    
    //foreach($array as $key => $val){}
    //foreach($array as $val){}
    // $arr1 = array("a" => "1"
    //                 ,"b" => "2"
    //                 ,"c" => "3"
    //                 ,"d" => "4");
    // foreach($arr1 as $i => $j)
    // {
    //     echo $i." : ". $j."\n";
    // }
    //foreach문을 이용해서 키가 "삭제"인 요소를 제거해주세요.
    //if 문 사용, unset("삭제")x

    $arr_ass_del= array("된장찌개"=> "파"
                ,"볶음밥" =>"양파"
                ,"삭제" => "값값"
                ,"김치" => "마늘"
                ,"비빔밥" => "참기름");
                
            foreach($arr_ass_del as $key => $val){
                if($val==="값값"){
                        unset($arr_ass_del[$key]);
                }
                else{
                    echo $key." : ". $val."\n";
                }
            }
?>