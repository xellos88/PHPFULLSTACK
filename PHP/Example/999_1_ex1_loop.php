<?php
//1. while+if 조합

// $a=0;
// while ($a <= 4) 
// {
//     if($a===1)
//     {
//         echo "1입니다.";
//     }    
//     else if($a===4)
//     {
//         echo "4입니다.";
//     }
//     ++$a;
// }
//foreach + if조합
// $arr_ass= array("a"=>1, "b"=>2, "c"=>3);
// foreach ($arr_ass as $key => $val)
// {
//     if($key ==="c"|| $val ===2)
//     {
//         echo "if";
//     }
// }

//이중 루프
// for ($i = 2; $i <=9 ; $i++) 
// { 
//     echo "$i 단\n";
//     for ($j=1; $j<=9; $j++) 
//     { 
//         echo "$i X $j = ",$i*$j,"\n";     
//     }
//     echo "\n";
// }

// $sum = 0;
// $max = 100;
// for ($i=1; $i<=$max; $i++)
// {
//     if($i % 2 === 0)
//     {
//         $sum += $i;
//     }
// };
// echo $sum;

// $arr_test=
//     array(
//         1
//         ,2
//         ,array(
//                 "info_a"=>3
//                 ,"info_b"=>4
//                 ,"info_arr"=>
//                     array(
//                         "f_1" =>5
//                         ,"f_2"=>7
//                     )
//             )
//         );
// echo $arr_test["info"]["info_a"];
// echo "\n";
// echo $arr_test["info"]["info_arr"]["f_2"];
// echo $arr_test[2]["info_arr"]["f_1"];

//함수명    :fnc_sum
//기능      :파라미터를 더한 값을 리턴
//파라미터  :INT $param_a
//          :INT $param_b
//리턴값    :INT $sum;

// function fnc_sum($param_a,$param_b)
//     {
//         $sum = $param_a + $param_b;
//         return $sum;
//     }
// echo fnc_sum(1,2);

// function fnc_sum2(...$param_numbers)
// {
//     $sum =0;
//     foreach ($param_numbers as $val) {
//         $sum += $val;
//     }
//     return $sum;
// }
// echo fnc_sum2(3,4,5,6);

// function fnc_sum2(...$param_numbers)
// {
//     return array_sum($param_numbers);
// }
// echo fnc_sum2(3,4,5,6);

// function fnc_global(){
//     global $global_i;
//     $global_i = 0;

// }
// $global_i = 5;
// fnc_global();
// echo $global_i;

// function fnc_static()
// {
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }
// fnc_static();
// fnc_static();

// function fnc_reference(&$param_str)
// {
//     $param_str= "fnc_reference";
// }
// $str = "aaa";
// fnc_reference( $str );
// echo $str;



// for ($i = 2; $i <=9 ; $i++) 
// { 
//     echo "$i 단\n";
//     for ($j=1; $j<=9; $j++) 
//     { 
//         echo "$i X $j = ",$i*$j,"\n";     
//     }
//     echo "\n";
// }

// *
// **
// ***
// ****
// *****
function star($st){
    for($i=1; $i<=$st; $i++)
    {
        echo "*";
    }
    echo "\n";

}
st(1)

?>