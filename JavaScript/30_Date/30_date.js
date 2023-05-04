// DATE
const NOW = new Date('2023-04-30 15:20:30.123');

// getFullyear() : 연도만 가져오는 메소드
console.log("연도 : " + NOW.getFullYear());

// getMonth() : 월을 가져오는 메소드 (+1을 해야 현재 월과 같아짐)
console.log("월 : " + (NOW.getMonth() + 1));

// getDate() : 날짜를 가져오는 메소드
console.log("일 : " + NOW.getDate());

// getDay() : 요일을 가져오는 메소드(일요일=0 토요일=6)
console.log("요일 : " + NOW.getDay());

// getTime() : 1970/01/01 기준으로 몇 초가 지났는지 초를 가져온다.
console.log("시간(Linux) : " + NOW.getTime());

// getHours() : 시간을 가져오는 메소드
console.log("시 : " + NOW.getHours());

// getMinutes() : 분을 가져오는 메소드
console.log("분 : " + NOW.getMinutes());

// getSeconds() : 초를 가져오는 메소드
console.log("초 : " + NOW.getSeconds());

// getMilliseconds() : 밀리초를 가져오는 메소드
console.log("밀리초 : " + NOW.getMilliseconds());

//기준일 : 2022/09/30 19:20:10
//오늘부터 몇일 전인지 출력

const DDAY= new Date('2022-09-30 19:20:10');
const TDAY= new Date();

let gap= TDAY.getTime() - DDAY.getTime();
let result = Math.ceil(gap / (1000 * 60 * 60 * 24));
document.write(result + "일");

let gapM = (TDAY.getFullYear() - DDAY.getFullYear()) * 12 + (TDAY.getMonth() - DDAY.getMonth());
if (TDAY.getDate() < DDAY.getDate()) {
    gapM--;
}
document.write("<br>" + gapM + "개월");