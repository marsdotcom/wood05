// For index =========================================================== //



function calculate(){

	var hickness = document.getElementById('thickness');
	var width = document.getElementById('width');
	var length = document.getElementById('length');
	var cub = document.getElementById('cub');
	var count = document.getElementById('count');

	var h,w,l,c,co,m;

	th = parseInt(thickness.value);		
	w = parseInt(width.value);
	l = parseInt(length.value);
	c = parseFloat(cub.value);
	co = parseFloat(count.value);

	if (isNaN(th)) hickness.parentElement.classList.add("has-error"); else hickness.parentElement.classList.remove("has-error");
	if (isNaN(w)) width.parentElement.classList.add("has-error"); else width.parentElement.classList.remove("has-error");
	if (isNaN(l)) length.parentElement.classList.add("has-error"); else length.parentElement.classList.remove("has-error");

	var id = his.getAttribute("id"); 

	if (id=="button1") {

		if (isNaN(c)) cub.parentElement.classList.add("has-error"); else cub.parentElement.classList.remove("has-error");

		m = h*w*l;

		if (m==0) co = 0;
		else{
			co = c/m*1000000;
		}

		if(isNaN(co)) {
			count.value=""; 
			//count.parentElement.classList.add("has-error");
		}else	{
			count.value = co.toFixed(2);
			count.parentElement.classList.remove("has-error");
		}


	}else{

		if (isNaN(co)) count.parentElement.classList.add("has-error"); else count.parentElement.classList.remove("has-error");

		c = h*w*l*co/1000000;

		if(isNaN(c)) {
			cub.value="";
			//cub.parentElement.classList.add("has-error");
		}else	{
			cub.value = c.toFixed(2);
			cub.parentElement.classList.remove("has-error");
		}

	}
	
}

var button1 = document.getElementById('button1');
if (button1 !=null) button1.onclick = calculate;
var button2 = document.getElementById('button2');
if (button2 !=null) button2.onclick = calculate;




// For windows ================================================================================ //





function doDraw(){     


	

	function createLine(x1,y1,x2,y2){

		var line  = document.createElementNS("http://www.w3.org/2000/svg", 'line');
		line.setAttribute("x1",x1);
		line.setAttribute("x2",x2);
		line.setAttribute("y1", y1);
		line.setAttribute("y2", y2);
		line.setAttribute("stroke", 'black');
		line.setAttribute("stroke-width", '2');
		return line;
	}   

	var hickness = document.getElementById('thickness');
	var width = document.getElementById('width');
	var length = document.getElementById('length');

	var h,w,l;

	h = parseInt(thickness.value);   // window height
	w = parseInt(width.value);		// window width
	l = parseInt(length.value);     // count of subwindow


	var canva = document.getElementById("canva");

	var viewBoxValues = canva.getAttribute("viewBox").split(' ');

	var boxWidth = w+10;
	var boxHeight = h+10;

	viewBoxValues[2] = boxWidth;
	viewBoxValues[3] = boxHeight;	    

	var x,y1,y2,d,x0,y0;  

	x0 = (boxWidth - w)/2;
	y0 = (boxHeight - h)/2

	y1 = y0;
	y2 = y1 + h;
	x = x0;

	d = w/l;


	while (canva.lastChild) {
		canva.removeChild(canva.lastChild);
	}       


	var rect = document.createElementNS("http://www.w3.org/2000/svg", 'rect');
	rect.setAttribute("x",x0);
	rect.setAttribute("y",y0);
	rect.setAttribute("width", w);
	rect.setAttribute("height", h);
	rect.setAttribute("stroke", 'black');
	rect.setAttribute("stroke-width", '2');
	rect.setAttribute("fill", 'grey');
	canva.appendChild(rect);


	for (var i = 0; i < l; i++) {        

		canva.appendChild(createLine(x,y1,x,y2));
		x=x+d;
	}   


	
}


var button = document.getElementById("button");
if (button !=null) button.onclick = doDraw;     






