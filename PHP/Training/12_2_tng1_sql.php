<?php

///우리가 작성한 my_db_conn 함수를 이용해서 아래 데이터를 출력해주세요.
//1. 전체 월급의 평균
//2. 새로운 사원 정보를 employees 테이블에 등록
//3. 2에서 등록한 사원의 이름을 "길동", 성은 "홍" 으로 변경해 주세요.
//4. 2에서 등록한 사원을 삭제해 주세요.


include_once("../Example/12_2_ex2_fnc_db_conn.php");

$obj_conn = null; // PDO Class
//DB Connect
my_db_conn( $obj_conn );


//1111111111111111111111111111
$sql = "SELECT AVG(salary) FROM salaries WHERE to_date >=now()";
$result = my_db_conn($sql);
var_dump($result);

//222222222222222222222222222
$sql2 ="INSERT INTO employees("
    ." emp_no "
    ." ,birth_date  "
    ." ,first_name "
    ." ,last_name "
    ." ,gender "
    ." ,hire_date "
    ." ) "
    ." VALUES( "
    ." :emp_no "
    ." ,:birth_date  "
    ." ,:first_name "
    ." ,:last_name "
    ." ,:gender "
    ." ,:hire_date "
    ." ) ";

$params = array(
    ':emp_no' => '555555',
    ':birth_date' => '9999-01-01',
    ':first_name' => 'aaa',
    ':last_name' => 'bbb',
    ':gender' => 'M',
    ':hire_date' => '9999-01-01'
);
$stmt = $obj_conn->prepare($sql2);
$stmt->execute($params);


//3333333333333333333333333333333333333
$sql3 = "UPDATE employees"



?>