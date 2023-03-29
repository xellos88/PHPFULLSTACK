<?php

    //배열의 길이를 반환하는 my_len() 함수를 작성하시오.
    
    // $arr_base = array(1,2,3,4,5,6);

    // function my_len($arr_base)
    // {
    //     $count = 0;
    //     foreach ($arr_base as $value) 
    //     {
    //         $count++;
    //     }
    //     return $count;
    // }
    // echo my_len($arr_base);

    function print_star($sss)
    {
        for($i = 0; $i<$sss; $i++)
        {
            echo "*";
        }
        echo "\n";
    }
    function print_star_rect($sss)
    {
        for($i = 0; $i<$sss; $i++)      
        {
            print_star($sss);
        }
    }
    function print_star_tri($sss)
    {
        for($i=1; $i<=$sss; $i++)
        {
            print_star($i);
        }
    }
    print_star(5);
    echo"\n";
    print_star_rect(5);
    echo"\n";
    print_star_tri(5);
    echo"\n";
?>