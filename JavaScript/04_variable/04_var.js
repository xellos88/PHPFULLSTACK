// console.log("안녕하세요.js파일입니다.","두번째");

// --------------------
// 변 수
// --------------------
// var : 중복 선언 가능, 재할당 가능, 함수 레벨 스코프
// var u_name = "홍길동";
// var u_name = "갑순이";    //중복 선언 가능
// u_name = "갑돌이";      //재할당 가능
// console.log(u_name);

// let : 중복 선언 불가능, 재할당 가능, 블록 레벨 스코프
// let u_age = 20;
// let u_age =30;   //중복 선언 불가능(에러)
// u_age = 40;         //재할당 가능
// console.log(u_age);

// const : 중복 선언 불가능, 재할당 불가능, 블록 레벨 스코프
// const gender = "남자";
// const gender = "여자";
// gender = "여자";
// console.log(gender);

// --------------------
// 스코프
// --------------------

// 💡 소코프의구분
// 전역 스코프(Global scope) : 바깥 스코프 라고하며 어디에서든 참조 할수있다.
// 지역 스코프(Local scope) : 안쪽 스코프 라고하며 블록 안, 함수 내에서만 참조 할수있다.
// ￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣
// 전역 변수(Global variable) : 바깥쪽 전역에서 선언된 변수 어디든 참조 가능하다.
// 지역 변수(Local variable) : 안쪽 지역내에 선언된 변수 안에서만 참조 가능하다.

// 🔍 스코프의 특징
// 🔹 자바스크립트의 스코프는 변수에 접근할 수 있는 유효범위이다.
// 🔹 바깥쪽 스코프에서 선언한 변수는 안쪽에서 사용가능하다
// 🔹 안쪽 스코프에서 선언한 변수는 바깥쪽에서 사용불가다.
// 🔹 스코프는 중첩이 가능하다.
// 🔹 가장 바깥은 전역스코프라 하고 나머지는 지역스코프다
// 🔹 지역 변수가 전역변수보다 우선순위가 더 높다.

// 🔍 블록스코프와 함수 스코프 (block scope & function scope)
// 🔹 중괄호를 기준으로 범위가 구분된다
// 🔹 function 을 제외한 if나 for 등의 '{ }' 안에 있는 범위를 블록 스코프
// 🔹 function{ } <- 안에있는 범위를 함수 스코프
// 🔹 var은 블록스코프를 무시한다.

// 전역 스코프
let u_name = "홍길동";

// 함수 레벨 스코프
function test(){
    console.log( u_name );
    let u_age = 30;
    console.log( u_age );
}
// 블록 레벨 스코프
function test1(){
    let v_test1 = "함수 : 테스트1"; //블록 레벨 스코프
    if(true){
        var v_var1 = "var로 선언";  //함수 레벨 스코프
    }
    console.log(v_test1);
    console.log(v_var1);
}
console.log(test1());

// //---------------------
// 호이스팅( hoisting )
//---------------------
// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
// (인터프리터: 프로그래밍 언어의 소스 코드를 바로 실행 하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행하기 전 변수선언/함수선언이 해당 스코프의 최상단으로 끌어 올려진 것 같은 현상을 말한다.
// console.log( hTest() );
// console.log("51 line : "+ varTest );
// console.log("51 line : "+ letTest );
console.log("51 line : " + constTest );

function hTest(){
    return "함수 : hTest";
}

var vartest = "58 line : var변수";
// console.log("58 line : varTest");

let letTest = "let 변수";
const constTest = "const 상수";
