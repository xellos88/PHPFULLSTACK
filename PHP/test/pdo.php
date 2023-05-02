<?php
//5월 2일 보강 PDO CLASS

// PDO(PHP Data Objects)는 여러 종류의 데이터베이스를 같은 방식으로 사용할 수 있게 해줌

$db_option = array(
    PDO::ATTR_EMULATE_PREPARES      => false // DB의 Prepared Statement 기능을 사용하도록 설정
    ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws하도록 설정
    ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC // 연상배열로 fetch 하도록 설정
);

// 1.DB 접속
// $conn = new PDO( dns정보, 유저, 비밀번호, [옵션] );
// $conn = new PDO( "mysql:host=localhost;dbname=board;charset=utf8mb4", "root", "root506", $db_option);

// // 쿼리 작성
// $sql = " SELECT * FROM board_info ";

// //해당 쿼리를 사용하여 DB요청하고, Statement객체를 받아옴
// $stmt= $conn->query( $sql );
// // Statement객체의 정보를 fetch해서 연상배열로 가져옴
// $result = $stmt->fetchAll();

// var_dump( $result );


// // DB 파기
// $conn = null;

// $conn = new PDO( "mysql:host=localhost;dbname=board;charset=utf8mb4", "root", "root506", $db_option);

// $sql = " SELECT * FROM board_info where board_no = :board_no";

// $arr_prepare= array(
//     ":board_no" => 1
// );
// $stmt = $conn->prepare( $sql );     // 해당 쿼리를 셋팅해서 Statement 객체를 반환
// $stmt -> execute( $arr_prepare );   // 해당  prepared Statement 데이터를 이용해서 DB에 요청
// $result = $stmt->fetchAll();        // DB가 응답한 정보를 fetch해서 연상배열로 반환
// var_dump($result);

// $conn=null; //DB연결 파기
// $title = "PDO CLASS";
// $no = 1;
// $conn = new PDO( "mysql:host=localhost;dbname=board;charset=utf8mb4", "root", "root506", $db_option);

// $sql= "UPDATE board_info set board_title = :board_title where board_no= :board_no";

// $conn -> beginTransaction(); //Transaction 시작
// $stmt = $conn->prepare( $sql );
// $stmt -> bindParam(":board_title", $title, PDO::PARAM_STR );   // prepared statement를 셋팅
// $stmt -> bindParam(":board_no", $no, PDO::PARAM_INT );         // prepared statement를 셋팅
// $stmt -> execute();
// $conn -> commit(); // commit :Transaction 종료

// $conn = null; //DB연결 파기

$conn = new PDO( "mysql:host=localhost;dbname=board;charset=utf8mb4", "root", "root506", $db_option);

$sql= "INSERT INTO board_info("
        ." board_no "
        ." ,board_title "
        ." ,board_contents "
        ." ,board_write_date "
        ." ) VALUES( "
        ." :board_no "
        ." ,:board_title "
        ." ,:board_contents "
        ." , now() "
        .")";
$arr_prepare = 
        array(
            ":board_no" => 999,
            ":board_title" => "insert",
            ":board_contents" => "insert"
        );

$conn->beginTransaction();
$stmt = $conn->prepare($sql);
$stmt->execute($arr_prepare);
$conn->commit();
$conn = null;
?>