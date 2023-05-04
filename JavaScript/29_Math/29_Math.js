
document.writeln(Math.ceil(3.33),'<br>');
document.writeln(Math.round(3.5),'<br>');
document.writeln(Math.floor(3.8),'<br>');

//0~1 사이의 수를 랜덤으로 가져옴
document.writeln(Math.random(),'<br>');

//random()메소드를 이용해서 1~10까지 랜덤으로 출력
let rand = Math.floor((Math.random() * 10) + 1);
document.writeln(rand);

console.log(rand);
for(let i=0; i<1000000; i++){
    rand = i;
}
console.log(rand);