<?php

// 성적
// 범위:100점 A+
//     90~99점 A
//     80~89점 C
//     70~79점 D
//     60~69점 E
//     59미만  F

    // $num = 2;
    // $score = '당신의 점수는 ';

    // if($num>=100){
    //     echo $score ,$num, '점 입니다. <A+등급>';
    // }
    // else if($num>=90){
    //     echo $score, $num, '점 입니다. <A등급>';
    // }
    // else if($num>=80){
    //     echo $score ,$num, '점 입니다. <B등급>';
    // }
    // else if($num>=70){
    //     echo $score, $num, '점 입니다. <C등급>';
    // }
    // else if($num>=60){
    //     echo $score, $num, '점 입니다. <D등급>';
    // }
    // else{
    //     echo $score, $num, '점 입니다. <F등급>';
    // }

    // else if(($num>100 || $num<0)){$result='잘못된 값을 입력했습니다.';}
   
    // $num = 110;
    // $aaa = '당신의 점수는 ';
    // $bbb = '점 입니다.';
    
    // if($num=100){$result='<A+등급>';}
    // else if($num>=90){$result='<A등급>';}
    // else if($num>=80){$result='<B등급>';}
    // else if($num>=70){$result='<C등급>';}
    // else if($num>=60){$result='<D등급>';}

    // else{$result='<F등급>';}

    // echo $aaa, $num, $bbb, $result;

    $num = 100;
    $aaa = '당신의 점수는 ';
    $bbb = '점 입니다.';
    
    if(($num>100 || $num<0)){
        echo '잘못된 값을 입력했습니다.';
    }
    else{ 
        if($num==100){
            $result=' <A+등급>';
        }
        else if($num>=90){
            $result=' <A등급>';
        }
        else if($num>=80){
            $result=' <B등급>';
        }
        else if($num>=70){
            $result=' <C등급>';
        }
        else if($num>=60){
            $result=' <D등급>';
        }
        else{
            $result=' <F등급>';
        }
        echo $aaa, $num, $bbb, $result;
    }
?>