
var lastTime = null;
function frame(time) {
if (lastTime != null)
updateAnimation(Math.min(100, time - lastTime) / 1000);
lastTime = time;
requestAnimationFrame(frame);
}
requestAnimationFrame(frame);
var cx = document.querySelector("canvas").getContext("2d");

//cx.beginPath();
//        cx.moveTo(10,10);
//        cx.lineTo(200,10);
//        cx.lineTo(10,200);
//        cx.lineTo(200,100);
//        cx.closePath();
//        cx.stroke();

let x = 200;
let c = 1;
function updateAnimation(step) { 
        cx.beginPath();
        cx.strokeStyle = "white";
        
        cx.strokeRect(50,500,300,300);
        cx.clearRect(50,500,300,300);
        cx.arc(x,650,40,0,7);
        cx.stroke();
        cx.closePath();
    
    if(x+40 == 350) c = 0;
    if(x-40 == 50) c = 1;
    if(x+40 <350 && c==1) x+=5;else if(x-40>50 && c==0) x-=5;
//        step +=5;
//        ball.style.right = step + "px";
}



//let ball = document.querySelector(".content__circle");
//let rec = document.querySelector(".content__rectangle");
//let step = 0;

//function moveBall(){
//    let pos = 0;
//    step+=5; 
//    ball.style.right = step +"px";
//    requestAnimationFrame(moveBall);
//}
//
//requestAnimationFrame(moveBall);

//var ball = document.querySelector(".content__circle");
//var rec = document.querySelector(".content__rectangle");
//
//var step = 0;
//function moveBall(){
//    
//    ball.style.left = step;
//    step++;
//    window.requestAnimationFrame(moveBall);
//}
//
//window.requestAnimationFrame(moveBall);