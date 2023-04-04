<?php
include_once("../Example/12_2_ex2_fnc_db_conn.php");

//아래 쿼리를 이용해서 DB접속>데이터 획득 후 출력해주세요.
//try-catch로 에러 처리를 해 주세요.
//에러가 날 경우의 해당 Exception의 에러 메시지를 출력해 주세요.
//정상 종료일 경우 "정상종료"라고 출력해 주세요.

$sql1="SELECT * FROM department ";
$sql2="SELECT * FROM dept_manager";

try 
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $stmt = $obj_conn->query( $sql1 );
    $stmt2 = $obj_conn->query( $sql2 );
    $result = $stmt->fetchAll();
    $result2 = $stmt->fetchAll();

    if( count ( $result ) === 0)
    {
        throw new Exception("쿼리 결과 없음");
    }
    var_dump( $result );
    echo "Try\n";
}
catch( Exception $e)
{
    echo "-----에러 발생-----\n";
    if( $e->getMessage()==="E99")
    {
        echo "데이터 0건";
    }
    else 
    {
        echo $e->getMessage();
    }
    echo "\n-----에러 발생-----\n";
}
finally
{
    $obj_conn = null;
}
echo "\n정상종료";
?>