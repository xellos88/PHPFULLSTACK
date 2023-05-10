
// function delay() {
//     const delayTime = Date.now() +200;
//     while(Date.now() < delayTime) {}
//     console.log('B');
// }
// console.log('A');
// delay();
// console.log('c');

// function delay2() {
//     return new Promise((resolve) => {
//         const delayTime = Date.now() +2000;
//         while(Date.now() < delayTime) {}
//         resolve('B');
//     });
// }
// console.log('A');
// delay2().then(b => console.log(b));
// console.log('C');


// async로 비동기 처리
// async function delay3() {
//     const delayTime = Date.now() +200;
//     while(Date.now() < delayTime) {}
//     return 'B';
// }
// console.log('A');
// delay3().then(b => console.log(b));
// console.log('C');

//3. await: async가 붙은 함수안에서만 사용 가능
function myDelay(ms){
    return new Promise( resolve => setTimeout(resolve,ms));
}

async function getA(){
    await myDelay(1000);
    return 'A';
}

async function getB(){
    await myDelay(2000);
    return 'B';
}


//promise 방식으로 출력
// getA().then(strA => { 
//     return getB(
//         ).then(strB => console.log(`${strA} : ${strB}`))
//     });

// //async를 이용할 경우
// async function getAll2() {
//     const strA = await getA();
//     const strB = await getB();

//     console.log(`${strA} : ${strB}`);
// }
// getAll2();

//병렬처리 방법
async function getAll3() {
    Promise.all([getA(), getB()])
    .then(all => console.log(all.join(' : ')));
}

getAll3()
.then(strAll => console.log(strAll))
.catch('error');