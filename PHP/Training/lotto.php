<?php
$arr = array();

    for($i=0; $i<6; $i++)
    {
    $arr[$i] = rand(1, 45);
    for($j=0; $j<$i; $j++)
    {
        if($arr[$i] == $arr[$j])
        {
        $i--;
        break;
        }
    }  
    }

    $tmp = 0;
    for($i=0; $i<count($arr); $i++)
    {
    for($j=0; $j<$i; $j++)
    {
        if($arr[$i] < $arr[$j])
        {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
        }
    }
    }

    print_r($arr);
?> 