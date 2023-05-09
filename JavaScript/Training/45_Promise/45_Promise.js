
// setTimeout(function() {
//     console.log('A');
// }, 3000);

// setTimeout(function() {
//     console.log('B');
// }, 2000);

// setTimeout(function() {
//     console.log('C');
// }, 1000);

//1. 콜백함수를 이용해서 ABC 순서로 콘솔에 출력

// setTimeout(function() {
//     console.log('A');
//     setTimeout(function() {
//         console.log('B');
//         setTimeout(function() {
//             console.log('C');
//         }, 1000);
//     }, 2000);
// }, 3000);

// //2.promise를 이용해서 ABC순서로 콘솔에 출력(promise를 함수로 등록해서 사용)

function delay(timeout) {
    return new Promise((resolve) => {
    setTimeout(resolve, timeout);
    });
}

function printA() {
    return delay(3000).then(() => {
    console.log('A');
    });
}

function printB() {
    return delay(2000).then(() => {
    console.log('B');
    });
}

function printC() {
    return delay(1000).then(() => {
    console.log('C');
    });
}

printA()
.then(printB)
.then(printC)
.catch((error) => {
console.error(error);
});

// function printLetter(letter, delay) {
//     return new Promise((resolve) => {
//         setTimeout(() => {
//         console.log(letter);
//         resolve();
//         }, delay);
//     });
//     }
    
//     const promiseA = new Promise((resolve) => {
//     setTimeout(() => {
//         resolve(printLetter('A', 3000));
//     }, 0);
//     });
    
//     const promiseB = promiseA.then(() => printLetter('B', 2000));
//     const promiseC = promiseB.then(() => printLetter('C', 1000));
    
//     promiseC.catch((error) => console.error(error));
    
// const delay = (timeout) => new Promise((resolve) => setTimeout(resolve, timeout));

// const printA = () => delay(3000).then(() => console.log('A'));
// const printB = () => delay(2000).then(() => console.log('B'));
// const printC = () => delay(1000).then(() => console.log('C'));

// printA()
// .then(printB)
// .then(printC)
// .catch((error) => console.error(error));