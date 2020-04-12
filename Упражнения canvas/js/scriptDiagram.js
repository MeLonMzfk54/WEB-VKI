var cx = document.querySelector("canvas").getContext("2d");

var results = [
{name: "удовлетворён", count: 1043, color: "lightblue"},
{name: "нейтральное", count: 563, color: "lightgreen"},
{name: "не удвовлетворён", count: 510, color: "pink"},
{name: "без комментариев", count: 175, color: "silver"}
];
var total = results.reduce(function(sum, choice) {
return sum + choice.count;
}, 0);


var currentAngle = -0.5 * Math.PI;
var centerX = 300, centerY = 150;

  let centerRad = Math.min(centerX, centerY);

// Добавьте код для вывода меток
results.forEach(function(result) {
    var sliceAngle = (result.count / total) * 2 * Math.PI;
let textX = centerX + (centerRad / 1.5) * Math.cos(currentAngle + sliceAngle/3);
let textY = centerY + (centerRad / 1.5) * Math.sin(currentAngle + sliceAngle/2.5);
cx.beginPath();
cx.arc(centerX, centerY, 100, currentAngle, currentAngle + sliceAngle);
currentAngle += sliceAngle;
cx.lineTo(centerX, centerY);
cx.fillStyle = result.color; 
cx.fill();
    cx.fillStyle = "white";
cx.fillText(result.name,textX,textY);
});
