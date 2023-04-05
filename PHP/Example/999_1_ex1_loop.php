<?php
//1. while+if 조합

// $a=0;
// while ($a <= 4) 
// {
//     if($a===1)
//     {
//         echo "1입니다.";
//     }    
//     else if($a===4)
//     {
//         echo "4입니다.";
//     }
//     ++$a;
// }
//foreach + if조합
// $arr_ass= array("a"=>1, "b"=>2, "c"=>3);
// foreach ($arr_ass as $key => $val)
// {
//     if($key ==="c"|| $val ===2)
//     {
//         echo "if";
//     }
// }

//이중 루프
// for ($i = 2; $i <=9 ; $i++) 
// { 
//     echo "$i 단\n";
//     for ($j=1; $j<=9; $j++) 
//     { 
//         echo "$i X $j = ",$i*$j,"\n";     
//     }
//     echo "\n";
// }

// $sum = 0;
// $max = 100;
// for ($i=1; $i<=$max; $i++)
// {
//     if($i % 2 === 0)
//     {
//         $sum += $i;
//     }
// };
// echo $sum;

// $arr_test=
//     array(
//         1
//         ,2
//         ,array(
//                 "info_a"=>3
//                 ,"info_b"=>4
//                 ,"info_arr"=>
//                     array(
//                         "f_1" =>5
//                         ,"f_2"=>7
//                     )
//             )
//         );
// echo $arr_test["info"]["info_a"];
// echo "\n";
// echo $arr_test["info"]["info_arr"]["f_2"];
// echo $arr_test[2]["info_arr"]["f_1"];

//함수명    :fnc_sum
//기능      :파라미터를 더한 값을 리턴
//파라미터  :INT $param_a
//          :INT $param_b
//리턴값    :INT $sum;

// function fnc_sum($param_a,$param_b)
//     {
//         $sum = $param_a + $param_b;
//         return $sum;
//     }
// echo fnc_sum(1,2);

// function fnc_sum2(...$param_numbers)
// {
//     $sum =0;
//     foreach ($param_numbers as $val) {
//         $sum += $val;
//     }
//     return $sum;
// }
// echo fnc_sum2(3,4,5,6);

// function fnc_sum2(...$param_numbers)
// {
//     return array_sum($param_numbers);
// }
// echo fnc_sum2(3,4,5,6);

// function fnc_global(){
//     global $global_i;
//     $global_i = 0;

// }
// $global_i = 5;
// fnc_global();
// echo $global_i;

// function fnc_static()
// {
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }
// fnc_static();
// fnc_static();

// function fnc_reference(&$param_str)
// {
//     $param_str= "fnc_reference";
// }
// $str = "aaa";
// fnc_reference( $str );
// echo $str;



// for ($i = 2; $i <=9 ; $i++) 
// { 
//     echo "$i 단\n";
//     for ($j=1; $j<=9; $j++) 
//     { 
//         echo "$i X $j = ",$i*$j,"\n";     
//     }
//     echo "\n";
// }

// *
// **
// ***
// ****
// *****
// function star($st)
// {
//     for($i=1; $i<=$st; $i++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }
// star(5);
// star(4);
/*******************************
 * 파일명:
 * 시스템명:
 * 이력
 *      v001:new-d1111
 *      v002:fnc_print_str 수정
 * 
 * ****************************/



// function fun_print_str($str_num,$aaa="@")
// {
//     for($i=1; $i<=$str_num; $i++)
//     {
//         echo $aaa;
//     }
//     echo "\n";
// }
// fun_print_str(7);

// function fnc_reference2( &$param_str )
// {
//     echo "2번: $param_str\n";
//     $param_str = "fnc_reference2에서 값 변경";
//     echo "3번: $param_str\n";
// }
// $str = "aaa";
// echo "1번: $str \n";
// fnc_reference2( $str );
// echo "4번: $str \n";
// //aaa aaa fnc~ fnc~

//-----------------class-----------------------
// class Food
// {
//     // 접근 제어 지시자
//     // public    : 어디서든(class밖에서도) 접근이 가능
//     // private   : 해당 class내에서만 접귽 가능
//     // protected : class 자기 자신과 상속 class 내에서만 접근 가능

//     // 멤버 변수
//     private $str_name;
//     private $int_price;

//     // 메소드
//     public function __construct($param_name, $param_price)
//     {
//         $this->str_name = $param_name;
//         $this->int_price = $param_price;
//     }
//     public function fnc_print_food()
//     {
//         $str = $this->str_name . " : " . $this->int_price . "원\n";
//         echo $str;
//     }
//     public function fnc_aaa($param_price)
//     {
//         $this->int_price = $param_price;
//     }
// }

// $obj_food = new Food("탕수육", 10000);
// $obj_food->fnc_aaa(12000);
// $obj_food->fnc_print_food();
// // food class 멤버 변수 $int_price의 값을 12000 바꾸어 주세요.

// // 상속 : 부모 클래스의 객체들을 자식 클래스가 상속 받아 사용 할 수 있다.
// class KoreanFood extends Food
// {
//     protected $side_dish;

//     public function __construct($param_name, $param_price, $param_side_dish)
//     {
//         parent::__construct($param_name, $param_price);
//         $this->side_dish = $param_side_dish;
//     }
//     // 오버라이딩 : 부모클래스에서 정의된 메소드를 자식클래스에서 재정의
//     public function fnc_print_food()
//     {
//         parent::fnc_print_food();
//         $str = "반찬 : " . $this->side_dish . "\n";
//         echo $str;
//     }
// }

// $obj_korean_food = new KoreanFood("치킨", 20000, "치킨무");
// $obj_korean_food->fnc_print_food();


class People
{
    protected $name;

    public function __construct($set_name)
    {
        $this->name = $set_name;
    }
    public function people_print()
    {
        echo $this->name;
    }
}

// $people = new People("aaa");
// $people->people_print();

class Student extends People
{
    private $id;

    function __construct($set_id, $set_name)
    {
        $this->id = $set_id;
        $this->name = $set_name;
    }

    public function student_print()
    {
        print "-student-\n";
        parent::people_print();
        print " ID: " . $this->id . "\n";
    }
}
$student = new student(1111,"김덕배");

$student ->student_print();

?>