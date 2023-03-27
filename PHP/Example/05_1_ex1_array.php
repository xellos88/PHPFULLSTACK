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
    $arr_week = array("Sun","Mon","delete","Tue","Wed", "Thu", "Fri","Sat");
        unset($arr_week[2]);
        print_r($arr_week);

        echo($arr_week[2]);
?>