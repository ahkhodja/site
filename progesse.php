<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<canvas id="my_canvas" width="70" height="70" ></canvas>
<script>
var ctx = document.getElementById('my_canvas').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 10;
	ctx.fillStyle = '#09F';
	ctx.strokeStyle = "#09F";
	ctx.textAlign = 'center';
	
	ctx.fillText(al+'%', cw*.5, ch*.5+2, cw);
	ctx.beginPath();
	ctx.arc(35,35, 17, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 100){
		clearTimeout(sim);
	    // Add scripting here that will run when progress completes
	}
	al++;
}
var sim = setInterval(progressSim,50);
</script>
</body>  
</html>