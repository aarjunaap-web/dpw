var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

// kotak
ctx.fillStyle = "red";
ctx.fillRect(50, 50, 100, 100);

// garis
ctx.beginPath();
ctx.moveTo(0, 0);
ctx.lineTo(200, 200);
ctx.stroke();

// lingkaran
ctx.beginPath();
ctx.arc(200, 200, 50, 0, 2 * Math.PI);
ctx.stroke();