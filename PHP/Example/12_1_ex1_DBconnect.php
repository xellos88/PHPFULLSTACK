<?php
    //DB 연결
    $dbc = mysqli_connect("localhost","root","root506","employees",3306);

    // var_dump($dbc);
    //쿼리 요청
    // $result_query = mysqli_query($dbc, "SELECT emp_no, concat(first_name, last_name) as name, gender, birth_date FROM employees emp_no <= 10005 ");

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
        //사번이 10005이하 사원의 사번, 이름(성 이름), 성별, 생일
    $result_query = mysqli_query($dbc, "SELECT 
                                            emp_no
                                            ,concat(last_name,' ',first_name) as NAME
                                            ,gender
                                            , birth_date 
                                        FROM 
                                            employees 
                                        WHERE 
                                            emp_no <= 10005");
    //mysqli_num_rows()를 이용해서 레코드 수를 체크 하는 방법
    if (mysqli_num_rows($result_query) > 0)
    {
        while ($result_row = mysqli_fetch_assoc($result_query))
        {
            echo  "emp_no:".$result_row["emp_no"]
                ." NAME:".$result_row["NAME"]
                ." gender:".$result_row["gender"]
                ." birth_date:".$result_row['birth_date']."\n";
        }
    }
    else{
        echo "찾을 자료가 0건 입니다.";
    }
//     // mysqli_close($dbc);
//     $result_query = mysqli_query($dbc, $sql);
//     //플래그를 이용하는 방법
//     $flg_cnt = false;
//     while ($tmp_row = mysqli_fetch_assoc($result_query))
//         {
//             echo implode(" ", $tmp_row),"\n";
//                 $flg_cnt = true;
//         }
//         if(!$flg_cnt)
//         {
//             echo"데이터가 0건 입니다.";
//         }
//     mysqli_close($dbc);
?>