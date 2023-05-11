<?php

//쿠키 작성
//setcookie (쿠키명, 쿠키값, 만료시간, 경로, 도메인, 보안, httponly);

setcookie("name","Kim Mihyeon",time()+30);
setcookie("age", "26", time()+300);


//쿠키 삭제 방법
setcookie("age","",0);