<?php
// 사용자의 선택을 입력 받음
$user_choice = readline("가위, 바위, 보 중 하나를 선택하세요 (가위/바위/보): ");

// 컴퓨터의 선택을 랜덤하게 결정
$computer_choice = rand(0, 2);

// 컴퓨터의 선택을 가위, 바위, 보로 변환
if ($computer_choice == 0) {
    $computer_choice = "가위";
} elseif ($computer_choice == 1) {
    $computer_choice = "바위";
} else {
    $computer_choice = "보";
}

// 사용자와 컴퓨터의 선택을 출력
echo "사용자: {$user_choice}\n";
echo "컴퓨터: {$computer_choice}\n";

// 승패 결정
if ($user_choice == "가위" && $computer_choice == "바위" ||
    $user_choice == "바위" && $computer_choice == "보" ||
    $user_choice == "보" && $computer_choice == "가위") {
    echo "컴퓨터 승!\n";
} elseif ($user_choice == "바위" && $computer_choice == "가위" ||
        $user_choice == "보" && $computer_choice == "바위" ||
        $user_choice == "가위" && $computer_choice == "보") {
    echo "사용자 승!\n";
} else {
    echo "무승부!\n";
}
?>