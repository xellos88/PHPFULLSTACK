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
    function clock() {
        const div = document.getElementById('result');
        //시간 시 분 초 나눔
        const now = new Date();
        let hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        
        if (hours > 12) {//오전 오후
            hours = hours - 12;
            div.innerText = `현재 시각 오후 ${hours}:${minutes}:${seconds}`;
        } else {
            div.innerText = `현재 시각 오전 ${hours}:${minutes}:${seconds}`;
        }
    }
    clock();
    timer = setInterval(clock, 1000);
}

function stopClock() {
    clearInterval(timer);
}
