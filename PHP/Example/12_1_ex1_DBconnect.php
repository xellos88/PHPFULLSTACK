<?php
    //DB 연결
    $dbc = mysqli_connect("localhost","root","root506","employees",3306);

    // var_dump($dbc);
    //쿼리 요청
    // $result_query = mysqli_query($dbc, "SELECT emp_no, concat(first_name, last_name) as name, gender, birth_date FROM employees emp_no <= 10005 ");

    //Prepared Statement:
    $i1 = "F";
    $i2 = 10010;
    $i3 = 5;
    $result = null;
    $stmt = $dbc->stmt_init();//statement를 셋팅
    $stmt->prepare("SELECT emp_no, first_name FROM employees WHERE gender = ? AND emp_no <= ? LIMIT ?");//DB 질의 할 쿼리를 작성
    $stmt->bind_param("sii", $i1, $i2, $i3); //Prepare 셋팅
    $stmt->execute(); //DB에 쿼리 질의 실행
    
    // $stmt->bind_result($col1, $col2); //질의 결과를 각 아규먼트에 저장하기 위한 셋팅
    // $stmt->fetch(); // bind_result에서 셋팅한 아규먼트에 값을 저장(한번 실행 될때마다 한 레코드씩 저장)
    // var_dump($col1, $col2);

    //패치를 루프로 돌려서 모든 질의 결과를 가져오는 방법
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        var_dump($row);
    }

    //------------------이하 연상배열로 가져오는 방법
    // $result = $stmt->get_result();

    //DB 연결 종료
    mysqli_close($dbc);
    

    // $result_row = mysqli_fetch_row($result_query); 
    // var_dump ($result_row);
    // $result_row = mysqli_fetch_row($result_query); 
    // var_dump ($result_row);
    // while ($result_row = mysqli_fetch_row($result_query))
    // {
    //     var_dump($result_row);
    // }
    // while ($result_row = mysqli_fetch_assoc($result_query))
    // {
    //     var_dump($result_row["first_name"]);
    // }
    // mysqli_close($dbc);
//         //사번이 10005이하 사원의 사번, 이름(성 이름), 성별, 생일
//     $result_query = mysqli_query($dbc, "SELECT 
//                                             emp_no
//                                             ,concat(last_name,' ',first_name) as NAME
//                                             ,gender
//                                             , birth_date 
//                                         FROM 
//                                             employees 
//                                         WHERE 
//                                             emp_no <= 10005");
//     //mysqli_num_rows()를 이용해서 레코드 수를 체크 하는 방법
//     if (mysqli_num_rows($result_query) > 0)
//     {
//         while ($result_row = mysqli_fetch_assoc($result_query))
//         {
//             echo  "emp_no:".$result_row["emp_no"]
//                 ." NAME:".$result_row["NAME"]
//                 ." gender:".$result_row["gender"]
//                 ." birth_date:".$result_row['birth_date']."\n";
//         }
//     }
//     else{
//         echo "찾을 자료가 0건 입니다.";
//     }
// //     // mysqli_close($dbc);
// //     $result_query = mysqli_query($dbc, $sql);
// //     //플래그를 이용하는 방법
// //     $flg_cnt = false;
// //     while ($tmp_row = mysqli_fetch_assoc($result_query))
// //         {
// //             echo implode(" ", $tmp_row),"\n";
// //                 $flg_cnt = true;
// //         }
// //         if(!$flg_cnt)
// //         {
// //             echo"데이터가 0건 입니다.";
// //         }
// //     mysqli_close($dbc);

?>