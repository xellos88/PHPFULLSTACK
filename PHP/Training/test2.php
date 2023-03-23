<?php
        $num = 1;
        $com= rand(0,2);
        if ($com == 0) {
            $com= "가위";
        } elseif ($comp== 1) {
            $com= "바위";
        } else {
            $com= "보";
        }
        echo "사용자: {$num}\n";
        echo "컴퓨터: {$com}\n";
        //컴퓨터 바위//
        if ($num == "가위" && $com == "바위" ||
        $num == "바위" && $com == "보" ||
        $num == "보" && $com == "가위") {
        echo "컴퓨터 승!\n";
        } elseif ($num == "바위" && $com == "가위" ||
            $num == "보" && $com == "바위" ||
            $num == "가위" && $com == "보") {
        echo "사용자 승!\n";
        } else {
        echo "무승부!\n";
    }
?>