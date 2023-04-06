<?php 
function buildDeck() {
    
    $suits = ['♣', '♥', '♠', '◆'];

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
                echo "$aceValue" . "\n";
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

            default:
                $value += $card;
                break;
        }
    }
    return $value;
}

/* ----------------------------- */
// Initialize Variables
$choice = null;

// build the deck of cards
$deck = buildDeck();

// initialize a dealer and player hand
$dealerHand = [];
$playerHand = [];

/* ----------------------------- */
// Begin Main Logic

// Deal the first two cards.
for ($i=1; $i <=2 ; $i++) { 
    $playerHand[] = array_pop($deck);
    $dealerHand[] = array_pop($deck);
}

// Echo the dealer hand, only showing the first card
echo "Dealer showing: {$dealerHand[0]}" . "\n";
//echo "Value: " . valueHand($dealerHand) . PHP_EOL;


// Echo player hand
echo "You have: \n";
foreach ($playerHand as $playerCard) {
    echo "$playerCard" ."\n";
}

echo "Value: " . valueHand($playerHand) . "\n";

// Allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
while ($choice != 'S') {

    if (valueHand($playerHand) > 21) {
        echo "Busted!\n";
        exit(0);
    }

    elseif (valueHand($playerHand) == 21) {
        echo "BlackJack! You Win!\n";
        exit(0);
    }

    echo "(H)it or (S)tay? ";
    $choice = strtoupper(trim(fgets(STDIN)));

    switch ($choice) {
        case 'H':
            // Add card to player deck
            $playerHand[] = array_pop($deck);

            // Echo player hand
            echo "You have: \n";
            foreach ($playerHand as $playerCard) {
                echo "$playerCard" . "\n";
            }

            echo "Value: " . valueHand($playerHand) . "\n";

            break;
        
        case 'S':
            // do nothing
            break;

        default:
            // do nothing
            break;
    }
}

// show the dealer's hand (all cards)
while (true) {

    if (valueHand($dealerHand) > 21) {
        echo "Dealer Busted!\n";
        exit(0);
    }

    elseif (valueHand($dealerHand) == 21) {
        echo "Dealer has: " . valueHand($dealerHand) . " and you have: " . valueHand($playerHand) . ". ";
        echo "BlackJack! Dealer Wins!\n";
        exit(0);
    }

    elseif (valueHand($dealerHand) < 17) {

        $dealerHand[] = array_pop($deck);

        echo "Dealer showing: \n";
        foreach ($dealerHand as $dealerCard) {
            echo "$dealerCard" . "\n";
        }

        echo "Value: " . valueHand($dealerHand) . "\n";
    }

    else {
        // Dealer stays; evaluate against value of player hand
        if (valueHand($dealerHand) >= valueHand($playerHand)) {
            echo "Dealer has: " . valueHand($dealerHand) . " and you have: " . valueHand($playerHand) . ". ";
            echo "Dealer Wins!\n";

            exit(0);
        }

        else {
            echo "You Win!\n";
            exit(0);
        }
    }
    sleep(1);
}
while(true) {
	echo '시작';
	print "\n";
	fscanf(STDIN, "%d\n", $input);        
	if($input === 0) {
		break;
	}
	echo $input;
	print "\n";
}
echo "끝!\n";
?>