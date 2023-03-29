<?php

//void 함수(리턴값이 없는)           
// function sum($n1, $n2)      //function 함수명(파라미터)
//     {
//         echo $n1 + $n2."\n";
//         return;
//     }


// //return 함수(리턴값이 있는)
// function sum2($n1, $n2)
//     {
//         return $n1 + $n2;
//     }

//     sum(1,2);
//     echo sum(2,4);
//     echo "\n"."\n";
//     sum2(3,6);
//     echo sum2(3,6);

    // $arr = array(5,10,7,3,1);  //0>5 1>10 2>7 3>3 4>1
    // for($i=0; $i < count($arr); $i++)
    // {
    //     echo $i." > ".$arr[$i]."\n";
    // }
    // $temp = $arr[0];
    // $arr[0] = $arr[1];
    // $arr[1] = $temp;


    // $arr = array(5,10,7,3,1);
    // for($i = count($arr) - 2; $i >= 0; $i--)
    //     {
    //         for($j=0; $j <= $i; $j++)
    //             {
    //                 if($arr[$j] > $arr[$j + 1])
    //                 {
    //                     $tmp = $arr[$j];
    //                     $arr[$j] = $arr[$j + 1];
    //                     $arr[$j + 1] = $tmp;
    //                 }
    //             }
    //     }
    // for($a = 0; $a < count($arr); $a++)
    // {
    //     echo $arr[$a]. " ";
    // }

    //배열 안에 최대값을 출력해주는 함수를 각각 구현해 주세요.
    //함수명은 "my_max", "my_min"
    $arr = array(5,10,7,3,1);
    
    function my_min($array)
    {
        $min = $array[0];
        for($i = 1; $i < count($array); $i++)
        {
            if($min > $array[$i])
            {
                $min = $array[$i];
            }
        }
        echo "최소값: " . $min."\n";
    }
    function my_max($array)
    {
        $max = $array[0];
        for($i = 1; $i < count($array); $i++)
        {
            if($max < $array[$i])
            {
                $max = $array[$i];
            }
        }
        echo "최대값: " . $max;
    }
    my_min($arr);
    my_max($arr);
?>