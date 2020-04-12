let canvas = document.querySelector("canvas");
let cx = canvas.getContext("2d");
//cx.fillStyle = "red";
//cx.fillRect(10,10,100,100);
cx.lineWidth = "5";
//cx.strokeRect(10,10,100,100);

//cx.beginPath();
//cx.moveTo(10,10);
//cx.lineTo(110,110);
//cx.strokeStyle = "green";
//for (var y = 10; y < 120; y += 10) {
//cx.moveTo(10, y);
//cx.lineTo(110, y);
//}
//cx.stroke();
//
//cx.moveTo(50,10);
//cx.lineTo(500,70);
//cx.lineTo(130,70);
//cx.lineTo(50,10);
//cx.fillStyle = "blue";
//cx.fill();
//cx.stroke();
//

//**************************КРИВЫЕ**************************************
////cx.moveTo(200,90);
////cx.quadraticCurveTo(600,900,900,90);
////cx.lineTo(600,90);
////cx.closePath();
////cx.stroke();
//
//cx.beginPath();
//cx.moveTo(100,90);
//cx.bezierCurveTo(100,100,900,100,500,900);
//cx.lineTo(900,100);
//cx.lineTo(500,100);
//cx.closePath();
//cx.stroke();

//**************************ДУГИ**************************************
//cx.beginPath();
//cx.moveTo(10,10);
//cx.arcTo(90,10,90,90,20);
//cx.moveTo(10,10);
//cx.arcTo(90,10,90,90,80);
//cx.stroke();

//cx.beginPath();
//// center=(50,50) radius=40 angle=0 to 7
//cx.arc(50, 50, 40, 0, 7);
//// center=(150,50) radius=40 angle=0 to ½π
//cx.arc(150, 50, 40, 0, 0.5 * Math.PI);
//cx.stroke();


//******************************ДИАГРАММА********************
//Массив результатов опроса
//var results = [
//{name: "удовлетворён", count: 1043, color: "lightblue"},
//{name: "нейтральное", count: 563, color: "lightgreen"},
//{name: "не удвовлетворён", count: 510, color: "pink"},
//{name: "без комментариев", count: 175, color: "silver"}
//];
//
//var total = results.reduce(function(sum, choice) {
//return sum + choice.count;
//}, 0);
//// Start at the top
//var currentAngle = -0.5 * Math.PI;
//results.forEach(function(result) {
//var sliceAngle = (result.count / total) * 2 * Math.PI;
//cx.beginPath();
//// center=100,100, radius=100
//// from current angle, clockwise by slice&#39;s angle
//cx.arc(200, 200, 200,
//currentAngle, currentAngle + sliceAngle);
//currentAngle += sliceAngle;
//cx.lineTo(200, 200);
//cx.fillStyle = result.color;
//cx.fill();
//});

//*********************РАБОТА С ТЕКСТОМ*****************************
//cx.font = "20px Georgia";
//cx.fillStyle = "fuchsia";
//cx.fillText("Здесь нарисован текст!",10,50);
////cx.strokeText("Здесь нарисован текст!",10,50);


//*********************РАБОТА С ИЗОБРАЖЕНИЯМИ*****************************
                //ОТРИСОВКА ИЗОБРАЖЕНИЯ
//let img = document.createElement("img");
//img.src = "../img/player-1.png";
//img.addEventListener("load",function(){
//   for(var x = 10;x<200;x+=30)
//       cx.drawImage(img,x,10);
//});

                  //простая анимация картинки
//let img = document.createElement("img");
//img.src = "../img/player.png";
//let spriteH = 150, spriteW = 98;
//img.addEventListener("load",function(){
//   let cycle = 0;
//    setInterval(function(){
//       cx.clearRect(0,0,spriteW,spriteH);
//        cx.drawImage(img,cycle*spriteW,0,spriteW,spriteH,0,0,spriteW,spriteH);
//        cycle=(cycle+1)%7;
//    },100);
//});

//*********************ЕСТЬ МЕТОДЫ TRANSFORM*****************************
//cx.scale(3,1);
//cx.beginPath();
//cx.arc(150, 150, 40, 0, 7);
//cx.lineWidth = 3;
//cx.stroke();


//         //ОТЗЕРКАЛИВАЕМ КАРТИНКУ
//function flipHorizontally(context, around) {
//context.translate(around, 0);
//context.scale(-1, 1);
//context.translate(-around, 0);
//}
//
//    //АНИМАЦИЯ ТЕПЕРЬ НАПРАВЛЕНА В ДРУГУЮ СТОРОНУ
//var img = document.createElement("img");
//img.src = "../img/player.png";
//var spriteW = 98, spriteH = 150;
//img.addEventListener("load", function() {
//flipHorizontally(cx, 100 + spriteW / 2);
//let cycle = 0;
//    setInterval(function(){
//       cx.clearRect(0,0,spriteW,spriteH);
//        cx.drawImage(img,cycle*spriteW,0,spriteW,spriteH,0,0,spriteW,spriteH);
//        cycle=(cycle+1)%7;
//    },100);
//});


//*********************SAVE и RESTORE*****************************
function branch(length, angle, scale) {
    cx.fillRect(0, 0, 1, length);
    if (length < 8) return;
    cx.save();
    cx.translate(0, length);
    cx.rotate(-angle);
    branch(length * scale, angle, scale);
    cx.rotate(2 * angle);
    branch(length * scale, angle, scale);
    cx.restore();
}
cx.translate(300, 0);
branch(60, 0.5, 0.8);



