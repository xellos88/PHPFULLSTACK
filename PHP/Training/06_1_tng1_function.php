<?php
    // //뺄셈
    // function fnc_sub($a, $b){
    //     $sub = $a - $b;
    //     return $sub;
    // }
    // $result_sub = fnc_sub(10,10);
    // echo $result_sub."\n";
    
    // //나눗셈
    // function fnc_div($a, $b){
    //     $div = $a / $b;
    //     return $div;
    // }
    // $result_div = fnc_div(10,10);
    // echo $result_div."\n";

    // //곱셈
    // function fnc_mul($a, $b){
    //     $mul = $a * $b;
    //     return $mul;
    // }
    // $result_mul = fnc_mul(10,10);
    // echo $result_mul."\n"; 

    // function fnc_args_sub()
    // {
    //     $args = func_get_args();
    //     $sub = null;
    //     foreach ($args as $val)
    //     {           
    //         if($args[0]===$val)
    //         {
    //             $sub = $val;
    //         }
    //         else
    //         {
    //             $sub -= $val;
    //         }
    //     }
    //     return $sub;
    // }
    // echo fnc_args_sub(10,2,5)."\n";

    function fnc_args_sub()
    {
        $args = func_get_args();
        $sub = null;
        foreach ($args as $val)
        {           
            if(is_null($sub))
            {
                $sub = $val;
            }
            else
            {
                $sub -= $val;
            }
        }
        return $sub;
    }
    echo fnc_args_sub(10,2,5)."\n";

    // function fnc_args_mul()
    // {
    //     $args = func_get_args();
    //     $mul = 0;
    //     foreach ($args as $val)
    //     {
    //         if($args[0]===$val)
    //         {
    //             $mul = $val;
    //         }
    //         else 
    //         {
    //             $mul *= $val;
    //         }
    //     }
    //     return $mul;
    // }
    // echo fnc_args_mul(10,2,5)."\n";


    // function fnc_args_div()
    // {
    //     $args = func_get_args();
    //     $div = 0;
    //     foreach ($args as $val)
    //     {
    //         if($args[0]===$val)
    //         {
    //             $div = $val;
    //         }
    //         else 
    //         {
    //             $div /= $val;
    //         }
    //     }
    //     return $div;
    // }
    // echo fnc_args_div(10,2,5)."\n";
?>

