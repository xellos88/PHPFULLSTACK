
// console.log('a');
// console.log('b');
// console.log('c');
// console.log('d');

//비동기 처리 방식

// console.log('A');
// setTimeout(()=>{
//     console.log('B');
// },1000);
// console.log('C');

// const a = 2;
// const b = 3;
// const sum = function(){
// setTimeout(() => {
//     return a+b;
// }, 1000);
// }
// console.log(sum());

//비동기 처리에서의 콜백 지옥
// setTimeout(() => {
//     console.log('a');
//     setTimeout(() => {
//         console.log('b');
//         setTimeout(() => {
//             console.log('c');
//         }, 3000);
//     }, 2000);
// }, 1000);

//로그인 콜백
// const login = {
//     chkInput(id, pw, success, error){
//         setTimeout(() => {
//             if(id !== ''&& pw !== ''){
//                 success({chkId:id, chkPw: pw});
//             } else{
//                 error(new Error('잘못 입력 하셨습니다.'));
//             }
//         }, 500);
//     }
//     ,loginUser(id, pw, success, error){
//         setTimeout(() => {
//             if(id == 'php506' && pw == '506'){
//                 success(id);
//             } else{
//                 error(new Error('없는 유저입니다.'));
//             }
//         }, 500);
//     }
//     ,chkAuth(id, success, error){
//         setTimeout(() => {
//             if(id == 'php506' ){
//                 success({authId: id, auth: 'admin'});
//             } else{
//                 error(new Error('권한이 없습니다.'));
//             }
//         }, 500);
//     }
// }
// const id='php506';
// const pw='506';

// login.chkInput(
//     id,
//     pw,
//     chkData => {
//         login.loginUser(
//             chkData.chkId,
//             chkData.chkPw,
//             loginId => {
//                 login.chkAuth(
//                     loginId,
//                     authData => {console.log(`${authData.authId} 유저님, 권한은 ${authData.auth}입니다.`);},
//                     authError => {console.log(authError.message);}
//                 );
//             },
//             loginError => {console.log(loginError.message);}
//         );
//     },
//     chkError => {console.log(chkError.message);
//     }
// );


// chkInput();


// 주어진 숫자에 1을 더하는 콜백 함수
function mycallBack(i){
    return i + 1;
}
// 숫자를 출력하는 함수
function printNum(fn){
    console.log(fn(2));
}
// printNum 함수를 호출하면서 mycallBack 함수를 인자로 전달
printNum(mycallBack); //처음 실행