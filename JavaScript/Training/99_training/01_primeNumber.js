//1. 1 ~ 입력값의 요소를 가지는 배열을 만들어주세요.
//2. 그 배열에서 소수(prime number)만 찾아서 새로운 배열을 만들어 주세요.
//3. 그 배열을 alert로 출력해주세요. 
//4. filter() 사용


let num = 100;
let arr = [];
for (let i = 1; i <= num; i++) {
    arr.push(i);    
}

let isPrime = num => {
    if (num === 1) return false; //1은 소수가 아님
    if (num === 2) return true;  //2는 소수
    if (num % 2 === 0) return false; //짝수는 소수가 아님

    for (let i = 3; i * i <= num; i+=2) { 
        if (num % i === 0) { 
            return false;
        }
    }
    return true; 
};

let primes = arr.filter(isPrime);
alert(primes);
