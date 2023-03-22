<?php
    print"안녕하세요.\n";
    print("안녕하세요.괄호입니다.\n");
    
    echo "안녕하세요 에코입니다.";

    var_dump(print"안녕하세요.");
    // print("*\n");
    // print("**\n");
    // print("***\n");
    // print("****\n");
    // print("*****\n");
    // print("******\n");
    // print("*******\n");

    $test_num = "변수\n변수";
    
    //네이밍 기법
        // 1.카멜 기법: 낙타의 등을 연상하고, 단어의 첫 글자는 대문자 , 나머지는 소 자로 작성
        // ex)$TestNum
        // 2.스네이크 기법: 뱀을 연상하고, 단어와 단어 사이를 "_"로 이어주고 전부 소문자로 작성
        // ex)$test_num

    echo $test_num;


?>
<?php
    echo"점심메뉴\n";
	echo"탕수육 8,000\n";
	echo"짜장면 6,000\n";
	echo"짬뽕 6,000\n";
?>

<?php
    print"점심메뉴\n";
	print"탕수육 8,000\n";
	print"짜장면 6,000\n";
	print"짬뽕 6,000\n";
?>

<?php
    print"점심메뉴\n탕수육 8,000\n짜장면 6,000\n짬뽕 6,000\n";
?>

<?php 
    echo"점심메뉴\n탕수육 8,000\n짜장면 6,000\n짬뽕 6,000\n";

	$test_ta ="탕수육";
	$test_ja ="짜장면";
	$test_jj ="짬뽕";
	$blank = "";
	$line = "\n";
	$price_8000="8,000";
	$price_6000="6,000";

	echo "점심메뉴\n";
	echo $test_ta.$blank.$price_8000.$line;
	echo $test_ja.$blank.$price_6000.$line;
	echo $test_jj.$blank.$price_8000.$line;
?>


