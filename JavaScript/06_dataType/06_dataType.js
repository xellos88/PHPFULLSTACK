// --------------------
// 데이터 타입
// --------------------

// 숫자 ( Number )
let num = 1;
function test(){
    let num = 2;
    console.log("함수 : "+ num);
}

// 문자열 ( String )
let str = "안녕";

// 불리언 ( Boolean ) :true/false
let bool = true;

// Null : 고의로 비어있는 값
let test1 = null;

// Undefined : 할당하지 않은 값
let test2;

// 심볼 ( Symbol ) : 고유의 값
const S_CONST1 = Symbol("심볼입니다.");
const S_CONST2 = Symbol("심볼입니다.");

// --------------------
// 객체 타입 ( JSON )
// --------------------
let obj1 = {
    u_name: "홍길동"
    ,u_age: 30
    ,u_gender: "남자"
    ,test: function() {console.log("객체 함수 test")}
    ,addr:{
        addr1:"대구"
        ,addr2:"중구"
    }
}

// 배열 (Array)
// let arr = ["aaa","bbb","ccc",111];

// let arr = []; 
// arr[0] = 'zero';
// arr[1] = 'one';
// arr[2] = 'two';
// arr[3] = 'three';

// for (let i = 0; i < arr.length; i++) {
//     console.log(arr[i]);
// }