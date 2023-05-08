//타이머 함수

//1.setTimeout()/ clearTimeout()
const timeout = setTimeout(() => console.log("A"),2000); //타이머 셋팅
clearTimeout(timeout);//타이머 제거

//setInterval() /clearInterval()
const myInterval = setInterval(() => console.log("A"),1000); //인터벌 셋팅
clearInterval(myInterval);// 인터벌제거

//1~5를 1초마다 콘솔에 출력

// let num = 5;
// let count = 0;
// const itv = setInterval(() => {
//     console.log(++count);
//     if (count === num) {
//         clearInterval(itv);
//     }
// }, 1000);


let timer;

function startClock() {
  // 1초마다 실행될 함수 (현재 시간을 출력한다)
    function clock() {
    const div = document.getElementById('result');
    div.innerText = new Date();
    }
  // 1초마다 clock() 함수를 실행시킨다.
    timer = setInterval(clock, 1000);
}

// '종료' 버튼을 누르면 실행된다.
function stopClock() {
  // timer의 반복실행을 종료한다.
    clearInterval(timer);
}