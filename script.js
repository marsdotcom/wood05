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

	var NS = "http://www.w3.org/2000/svg";	

	function createLine(x1,y1,x2,y2){

		var line  = document.createElementNS(NS, 'line');
		line.setAttribute("x1",x1);
		line.setAttribute("x2",x2);
		line.setAttribute("y1", y1);
		line.setAttribute("y2", y2);
		line.setAttribute("stroke", 'black');
		return line;
	}   

	function createRect(x0,y0,w,h){

		rect = document.createElementNS(NS, 'rect');
		rect.setAttribute("x",x0);
		rect.setAttribute("y",y0);
		rect.setAttribute("width", w);
		rect.setAttribute("height", h);
		rect.setAttribute("stroke", 'black');
		rect.setAttribute("fill", 'grey');
		return rect;
	}

	var height = document.getElementById('height');
	var width = document.getElementById('width');
	var count = document.getElementById('count');
	var batten = document.getElementById('batten');

	var h,w,l,b;

	h = parseInt(height.value)*10;   // window height
	w = parseInt(width.value)*10;		// window width
	l = parseInt(count.value);    
	if (l<1) l = 1;
	b = parseInt(batten.value)*10;

	var canva = document.getElementById("canva");

	var viewBoxValues = canva.getAttribute("viewBox").split(' ');

	var boxWidth = w;
	var boxHeight = h;

	viewBoxValues[2] = boxWidth;
	viewBoxValues[3] = boxHeight;	  

	canva.setAttribute("viewBox", viewBoxValues.join(' ')) ;

	var x,y1,y2,d,x0,y0;  

	x0 = (boxWidth - w)/2;
	y0 = (boxHeight - h)/2

	y1 = y0;
	y2 = y1 + h;
	x = x0;

	d = (w-(l+1)*b)/l;

	while (canva.lastChild) {
		canva.removeChild(canva.lastChild);
	}       

	canva.appendChild(createRect(x0,y0,w,h));

	canva.appendChild(createRect(x0+b,y0+b,w-2*b, h-2*b));

	for (var i = 1; i <= l; i++) {        

		canva.appendChild(createLine(x0+(b+d)*i,y1+b,x0+(b+d)*i,y2-b));
		canva.appendChild(createLine(x0+(b+d)*i+b,y1+b,x0+(b+d)*i+b,y2-b));

	}   
	
}

function createButtons(){

	var count = this.value;
	if (count < 1) return;
	var buttoncount = document.getElementById("buttoncount");
	var button = buttoncount.getElementsByTagName("button")[0].cloneNode(false);
	while (buttoncount.lastChild){
		buttoncount.removeChild(buttoncount.lastChild);
	}
	for (var i = 0; i < count; i++) {
		var newbutton = buttoncount.appendChild(button.cloneNode(false));
		newbutton.innerHTML = i+1;
		newbutton.onclick = click;
	}

}

function click(){

	this.classList.toggle("btn-primary");

}



var button = document.getElementById("button");
if (button !=null) button.onclick = doDraw;     
var input = document.getElementById("count");
if (input != null) input.onchange = createButtons;





