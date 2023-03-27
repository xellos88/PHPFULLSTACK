<?php
    // $food= array("피자","치킨","탕수육","떡볶이","돈가스");
    // print $food[0]."\n";
    // print $food[1]."\n";
    // print $food[2]."\n";
    // print $food[3]."\n";
    // print $food[4]."\n"."\n";

    // print $food[rand(0,4)]."\n";
    // print $food[mt_rand(0,4)]."\n"."\n";

    // for ($i=0; $i<5; $i++){
    //     print "mt_rand() : ".mt_rand()."\n";
    // }
    
    //키는 요리명, 값은 주재료 하나로 이루어진 배열
    // $food = array("치킨" => "닭고기"
    //                 ,"탕수육" => "돼지고기"
    //                 ,"피자" => "치즈"
    //                 ,"떡볶이" => "떡");
    // print $food["떡볶이"];


    $food= array("된장찌개"=> "파"
                ,"볶음밥" =>"양파"
                ,"김치" => "마늘"
                ,"비빔밥" => "참기름");
    unset($food["김치"]);

    print_r($food);
    var_dump($food);
?>
