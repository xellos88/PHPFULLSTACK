<?php
    //DB 연결
    $dbc = mysqli_connect("localhost","root","root506","employees",3306);

    // var_dump($dbc);
    //쿼리 요청
    $result_query = mysqli_query($dbc, "SELECT emp_no FROM employees");

    var_dump($result_query);
    mysqli_close($dbc);

?>