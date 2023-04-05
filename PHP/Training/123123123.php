<?php 
function buildDeck() {
    
    $suits = ['Clubs', 'Hearts', 'Spades', 'Diamonds'];
    $cards = ['Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King'];

    foreach ($cards as $card) {
        foreach ($suits as $suit) {
            $deck[] = "$card of $suit";
        }
    }
    shuffle($deck);
    return $deck;
}
function echoHand($hand, $hidden = false) {

}
function valueHand($hand) {

    $value = 0;

    foreach ($hand as $card) {

        $cardArray = explode(' ', $card);

        switch ($cardArray[0]) {
            case 'Ace':
                
                if (valueHand($hand) <= 10) {
                    $value += 11;
                }

                else {
                    $value += 1;
                }

                echo "$aceValue" . PHP_EOL;

                break;

            case 'King':
                $value += 10;
                break;
            
            case 'Queen':
                $value += 10;
                break;

            case 'Jack':
                $value += 10;
                break;

            case 'King':
                $value += 10;
                break;

            default:
                $value += $card;
                break;
        }  // end switch
    } // end foreach

    return $value;
}

$choice = null;

$deck = buildDeck();


$dealerHand = [];
$playerHand = [];

for ($i=1; $i <=2 ; $i++) { 
    $playerHand[] = array_pop($deck);
    $dealerHand[] = array_pop($deck);
}

echo "Dealer showing: {$dealerHand[0]}" . PHP_EOL;

echo "You have: " . PHP_EOL;
foreach ($playerHand as $playerCard) {
    echo "$playerCard" . PHP_EOL;
}

echo "Value: " . valueHand($playerHand) . PHP_EOL;

while ($choice != 'S') {

    if (valueHand($playerHand) > 21) {
        echo "Busted!" . PHP_EOL;
        exit(0);
    }

    elseif (valueHand($playerHand) == 21) {
        echo "BlackJack! You Win!" . PHP_EOL;
        exit(0);
    }

    echo "(H)it or (S)tay? ";
    $choice = strtoupper(trim(fgets(STDIN)));

    switch ($choice) {
        case 'H':
            $playerHand[] = array_pop($deck);

            echo "You have: " . PHP_EOL;
            foreach ($playerHand as $playerCard) {
                echo "$playerCard" . PHP_EOL;
            }

            echo "Value: " . valueHand($playerHand) . PHP_EOL;

            break;
        
        case 'S':
            // do nothing
            break;

        default:
            // do nothing
            break;
    }
}

while (true) {

    if (valueHand($dealerHand) > 21) {
        echo "Dealer Busted!" . PHP_EOL;
        exit(0);
    }

    elseif (valueHand($dealerHand) == 21) {
        echo "Dealer has: " . valueHand($dealerHand) . " and you have: " . valueHand($playerHand) . ". ";
        echo "BlackJack! Dealer Wins!" . PHP_EOL;
        exit(0);
    }

    elseif (valueHand($dealerHand) < 17) {

        $dealerHand[] = array_pop($deck);

        echo "Dealer showing: " . PHP_EOL;
        foreach ($dealerHand as $dealerCard) {
            echo "$dealerCard" . PHP_EOL;
        }

        echo "Value: " . valueHand($dealerHand) . PHP_EOL;
    }

    else {
        if (valueHand($dealerHand) >= valueHand($playerHand)) {
            echo "Dealer has: " . valueHand($dealerHand) . " and you have: " . valueHand($playerHand) . ". ";
            echo "Dealer Wins!" . PHP_EOL;

            exit(0);
        }

        else {
            echo "You Win!" . PHP_EOL;
            exit(0);
        }
    }
    sleep(1);
}
?>