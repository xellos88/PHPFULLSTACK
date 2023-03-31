<?php

// function print_gugudan($filename) {
//     $gugudan = fopen($filename, "w");

//     for ($j = 2; $j <= 9; $j++) {
//         $line = $j."단\n";
//         for ($i = 1; $i <= 9; $i++) {
//             $line .= $j." * ".$i." = ".$j * $i."\n";
//         }
//         $line .= "\n";
//         fputs($gugudan, $line);
//     }

//     fclose($gugudan);
// }

// print_gugudan("../Example/sam/gugudan.txt");



// $gugudan = fopen("../Example/sam/gugudan.txt","w");
// function  g($n)
// {
//     $out="";
//     for($i=2; $i<$n; $i++)
//     {
//         $out .= "$i 단\n";
//         for($j=2; $j<$n; $j++)
//         {
//             $mul = $i * $j;
//             $out .= "$i * $j = $mul\n";
//         }
//     }
//     return $out;
// }
// fputs($gugudan,g(10));
// fclose($gugudan);

// $gugudan = fopen("../Example/sam/gugudan.txt","w");
// function g($n)
// {
//     $out="";
//     for($i=2; $i<$n; $i++)
//     {
//         $out = $out . "$i 단\n";
//         for($j=2; $j<$n; $j++)
//         {
//             $mul = $i * $j;
//             $out = $out . "$i * $j = $mul\n";
//         }
//     }
//     return $out;
// }
// fputs($gugudan, g(10));
// fclose($gugudan);

// 김밥
// 샌드위치
// 백반
// 국밥
// 크림우동
// 연어초밥
// 탕수육
// 돈까스
// 국밥과 크림우동 사이에 스테이크 추가
$f_food2= file("../Example/sam/food.txt");
$print_food = "";
foreach ($f_food2 as $val) 
{
    if (trim($val) === "국밥") 
    {
        $print_food .= "스테이크\n".$val;
    }
    else{
        $print_food .=$val;
    }
}
print $print_food;

$f_food2= fopen("../Example/sam/food.txt","w");
fputs($f_food2, $print_food);
fclose($f_food2);

?>
