<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 드로우
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
//8. 한 번 사용한 카드는 다시 쓸 수 없다.

// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";

function buildDeck() {
    $suits = ['♣', '♥', '♠', '♦'];
    $cards = ['Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King'];
    foreach ($cards as $card) {
        foreach ($suits as $suit) {
            $deck[] = "$card of $suit";
        }
    }
    shuffle($deck);
    return $deck;
}

function valueHand($hand) {
    $value = 0;
    $num_aces = 0;
    foreach ($hand as $card) {
        $cardArray = explode(' ', $card);
        switch ($cardArray[0]) {
            case 'Ace':
                $num_aces++;
                break;
            case 'King':
            case 'Queen':
            case 'Jack':
                $value += 10;
                break;
            default:
                $value += $cardArray[0];
                break;
        }
    }
    for ($i = 0; $i < $num_aces; $i++) {
        if ($value + 11 <= 21) {
            $value += 11;
        } else {
            $value += 1;
        }
    }
    return $value;
}

$deck = buildDeck();
$dealerHand = [];
$playerHand = [];

// Initial deal
for ($i = 1; $i <= 2; $i++) {
    $playerHand[] = array_pop($deck);
    $dealerHand[] = array_pop($deck);
}
echo "********************************************\n";
echo "딜러: {$dealerHand[0]}" . "\n";
echo "플레이어: " . implode(", ", $playerHand) . " ( 합계: " . valueHand($playerHand) . ")" . "\n";
echo "********************************************\n";

// Player turn
while (valueHand($playerHand) < 21) {
    echo "카드를 더 받으시겠습니까? (예 >> 1 / 아니오 >> 0) ";
    $choice = readline();
    if ($choice === '1') {
        $playerHand[] = array_pop($deck);
        echo "플레이어: " . implode(", ", $playerHand) . " ( 합계: " . valueHand($playerHand) . ")" . "\n";
    } else {
        break;
    }
}

// Dealer turn
if (valueHand($playerHand) > 21) {
    echo "플레이어가 버스트되었습니다." . "\n";
} else {
    echo "딜러: " . implode(", ", $dealerHand) . " ( 합계: " . valueHand($dealerHand) . ")" . "\n";
    while (valueHand($dealerHand) < 17) {
        $dealerHand[] = array_pop($deck);
        echo "딜러: " . implode(", ", $dealerHand) . " ( 합계: " . valueHand($dealerHand) . ")" . "\n";
    }
    if (valueHand($dealerHand) > 21) {
        echo "딜러가 버스트되었습니다." . "\n";
    } else {
        if (valueHand($playerHand) > valueHand($dealerHand)) {
            echo "플레이어 승리!" . "\n";
        } elseif (valueHand($playerHand) < valueHand($dealerHand)) {
            echo "딜러 승리!" . "\n";
        } else {
            echo "무승부!" . "\n";
        }
    }
}
?>