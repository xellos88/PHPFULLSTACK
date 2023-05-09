// 1. 버튼 클릭->경고창(안녕하세요.숨어있는div를 찾아보세요)
// 2. 특정 영역 진입시 ->경고창("두근두근")
// 3. 2의 영역 클릭시 -> 배경색 베이지로 변경
// 4. 3의 상태에서 클릭시 ->배경색 흰색으로 변경, 경고창("다시 숨는다")

//1
const btn = document.querySelector('#btn');
btn.addEventListener('click', () => alert('안녕하세요.'+'\n'+'숨어있는div를 찾아보세요'));

//2
const div1= document.querySelector('.div1');
// div1.addEventListener('mouseenter',()=> alert('두근두근'));

div1.addEventListener('mouseenter', () => {
    const backgroundColor = window.getComputedStyle(div1).getPropertyValue('background-color');
    if (backgroundColor === 'rgb(255, 255, 255)' || backgroundColor === 'white')
    {
    alert('두근두근');
    }
});

// //3
// div1.onclick = function(){
//     alert('들켰다!')
//     div1.style.backgroundColor  = 'beige';
// }
// //4
// // const div1= document.querySelector('div1');
// div1.addEventListener('click', () => {
//     alert('다시 숨는다!')
//     div1.style.backgroundColor  = 'white';
// });
function change() {
    const div1 = document.querySelector('#div1');

    if (div1.style.backgroundColor === 'beige') {
        alert('다시 숨는다!');
        div1.style.backgroundColor = 'white';
    } else {
        alert('들켰다!');
        div1.style.backgroundColor = 'beige';
    }
}

div1.addEventListener('onclick', change);