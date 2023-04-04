<?php
$year = $_GET['year']; // 이전/다음달로 넘어온 년도 데이터
$month = $_GET['month'];  // 이전/다음달로 넘어온 월 데이터

  if (!$year && !$month) {  // 처음에 넘어온 데이터가 없으면 현재 년/월
    $year = date('Y');
    $month = date('m');
  }

// 보정
if ($month<1) {
    $month=12;
    $year--;
  }

if ($month>12) {
    $month=1;
    $year++;
  }



$time = strtotime($year.'-'.$month.'-01');
list($tday, $sweek) = explode('-', date('t-w', $time));  // 총 일수, 시작요일
$tweek = ceil(($tday + $sweek) / 7);  // 총 주차
$lweek = date('w', strtotime($year.'-'.$month.'-'.$tday));  // 마지막요일

echo "<a href='./diary_control.php?year=$year&month=".($month-1)."'>이전달</a> $year 년 $month 월 <a href='./diary_control.php?year=$year&month=".($month+1)."'>다음달</a><br>";

?>
<table width='100%' cellpadding='0' cellspacing='1'>
<tr>
 <th><font color="#FF0000">일</font></th>
 <th>월</th>
 <th>화</th>
 <th>수</th>
 <th>목</th>
 <th>금</th>
 <th><font color="#0100FF">토</font></th>
</tr>
<? for ($n=1,$i=0; $i<$tweek; $i++): ?>
<tr>
<? for ($k=0; $k<7; $k++): ?>
 <td><? if (($i == 0 && $k < $sweek) || ($i == $tweek-1 && $k > $lweek)) {echo "</td>\n";continue;}?><?=$n++?></td>
<? endfor; ?>
</tr>
<? endfor; ?>
</table>
?>