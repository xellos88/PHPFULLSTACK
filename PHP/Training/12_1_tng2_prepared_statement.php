<?php
//아래 쿼리로 결과를 출력하느 프로그램을 만들어 주세요.

//---쿼리---
//SELECT emp_no, salary FROM salaries WHERE to_date =? AND salary >=? ORDER BY salary DESC LIMIT ?

//---prepare 셋팅값---
//to_date : "9999-01-01"
//salary : 50000
//LIMIT : 5

$dbc = mysqli_connect("localhost","root","root506","employees",3306);


$i1 = "9999-01-01";
$i2 = 50000;
$i3 = 5;
$result = null;
$stmt = $dbc->stmt_init();//statement를 셋팅
$stmt->prepare("SELECT emp_no, salary FROM salaries WHERE to_date =? AND salary >=? ORDER BY salary DESC LIMIT ?");
$stmt->bind_param("sii", $i1, $i2, $i3);
$stmt->execute();
$stmt->bind_result($emp_no, $emp_salary);

// $result = $stmt->get_result();
while ($stmt -> fetch()) {
    echo "$emp_no $emp_salary\n";
}

mysqli_close($dbc);
?>