<?php
        $num=1;
        //컴퓨터 바위//
        if($num==0 && rand(0,2)==0){
            echo'당신은 [바위] ', '컴퓨터는 [바위] 비겼습니다.';
        }
        else if($num==1 && rand(0,2)==0){
            echo'당신은 [가위] ', '컴퓨터는 [바위] 졌습니다.';
        }
        else if($num==2 && rand(0,2)==0){
            echo'당신은 [보] ', '컴퓨터는 [바위] 이겼습니다.';
        }
        //컴퓨터 가위//
        else if($num==0 && rand(0,2)==1){
            echo'당신은 [바위] ', '컴퓨터는 [가위] 이겼습니다.';
        }
        else if($num==1 && rand(0,2)==1){
            echo'당신은 [가위] ', '컴퓨터는 [가위] 비겼습니다.';
        }
        else if($num==2 && rand(0,2)==1){
            echo'당신은 [보] ', '컴퓨터는 [가위] 졌습니다.';
        }
        //컴퓨터 보//
        else if($num==0 && rand(0,2)==2){
            echo '당신은 [바위] ', '컴퓨터는 [보] 졌습니다.';
        }
        else if($num==1 && rand(0,2)==2){
            echo '당신은 [가위] ', ' 컴퓨터는 [보] 이겼습니다.';
        }
        else{
            echo '당신은 [보] ', ' 컴퓨터는 [보] 비겼습니다';
        }
?>
