let cx = document.querySelector("canvas").getContext("2d");
cx.lineWidth = "3";
cx.font = "15px Arial";
cx.fillStyle = "gold";
cx.strokeStyle = "LightCoral";

function trapeze(x1,y1,x2,y2,h){
    cx.fillText("Трапеция",45,90);
    cx.beginPath();
    cx.moveTo(x1,y1);
    cx.lineTo(x1+x2,y1);
    cx.lineTo(x2+x1+(y2-y1)/2,y1+h);
    cx.lineTo(x1-y1-5,y1+h);
    cx.closePath();
    cx.stroke();
}

trapeze(50,10,50,50,60);

function rhombus (x1,y1,x2,y2,x3,y3,x4,y4,color){
    cx.fillText("Ромб",163,110);
    cx.beginPath();
    cx.moveTo(x1,y1);
    cx.lineTo(x2,y2);
    cx.lineTo(x3,y3);
    cx.lineTo(x4,y4);
    cx.closePath();
    cx.stroke();
    cx.fillStyle = color;
    cx.fill();
}

rhombus(150,50,180,10,210,50,180,90,"red");

//let n = 0;
//function zigzag(startX,startY,x1,y1,x2,y2){
//    n++;
//    cx.beginPath();
//    if(n == 1){
//        cx.moveTo(startX,startY);
//    }
//    if(n%2 != 0){
//     cx.lineTo(x2,y2);
//        cx.stroke();
//    }else if(n%2 == 0){
//        cx.lineTo(x1,y1);
//        cx.stroke();
//    }
//    if(n<7){
//        if(y2<y1){
//         zigzag(startX,startY,x1,y1,x2,y2+(y1-y2)+20);   
//        }else if(y1<y2){
//            zigzag(startX,startY,x1,y1+(y2-y1)+20,x2,y2);
//        }
//    }
//   cx.closePath();
//    
//}
//zigzag(250,10,250,10,300,30);

function zigzag(x1,y1,x2,y2,count){
    cx.fillStyle = "gold";
    if(count>11){
       cx.fillText("ЗигЗаг",190,150); 
    }else{
        cx.fillText("ЗигЗаг",255,150);
    }
    cx.beginPath();
    cx.moveTo(x1,y1);
    
    for(let i = 0;i<=count;i++){
        if(i==0){
            cx.lineTo(x2,y2);
        }else{
            if(i%2!=0){
                y1+=(y2-y1)+10;
                cx.lineTo(x1,y1);
            }else if(i%2 == 0){
                y2+=(y1-y2)+10;
                cx.lineTo(x2,y2);
            }
        }
    }
    cx.stroke();
}      
 zigzag(250,10,300,20,11);

function spiral (step,count){
    let centerX;
    let centerY;
   if(count<=35){
     centerX = 450;
     centerY = 110;
    cx.fillText("Спираль",430,240); 
   }else if(count<=50){
       centerX = 500;
       centerY = 160;
       cx.fillText("Спираль",480,340); 
   }else{
       centerX = 700;
       centerY = 230;
       cx.fillText("Спираль",930,340); 
   }
    cx.moveTo(centerX, centerY);

    let increment = 2 * Math.PI / step;
    let th = increment;

    while (th < count * Math.PI) {
        let x = centerX + th * Math.cos(th);
        let y = centerY + th * Math.sin(th);
        cx.lineTo(x, y);
        th = th + increment;
    }
    cx.stroke();
}

spiral(70,30);

function Star (x1,y1) {
 cx.fillText("Звезда",x1+20,y1+55);    
cx.beginPath();
cx.moveTo(x1,y1);
cx.fillStyle = "yellow";
var controlX = x1+40;
var controlY = y1;
var x = x1+10;
var y = y1-30;
cx.quadraticCurveTo(controlX, controlY, x, y);
x+=30;
y-=10;
cx.quadraticCurveTo(controlX, controlY, x, y);
x+=30;
y+=10;
cx.quadraticCurveTo(controlX, controlY, x, y);
x+=10;
y+=30;
cx.quadraticCurveTo(controlX, controlY, x, y);
x-=10;
y+=30;
cx.quadraticCurveTo(controlX, controlY, x, y);
x-=30;
y+=10;
cx.quadraticCurveTo(controlX, controlY, x, y);
x-=30;
y-=10;
cx.quadraticCurveTo(controlX, controlY, x, y);
x=x1;
y=y1;
cx.quadraticCurveTo(controlX, controlY, x, y);
cx.fill();
cx.stroke();
cx.closePath();
}

Star (10,200);