<?php

session_name("kim");
session_start();

// 세션 파기
// session_destroy();

//세션 정보 삭제 (세션이 파기되는 것은 아님)
session_unset(); //세션 전체 정보 삭제
unset($_SESSION["del"]); //세션 특정 요소를 삭제


?>
