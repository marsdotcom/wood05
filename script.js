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

	function createRect(x0,y0,w,h,color='grey'){

		rect = document.createElementNS(NS, 'rect');
		rect.setAttribute("x",x0);
		rect.setAttribute("y",y0);
		rect.setAttribute("width", w);
		rect.setAttribute("height", h);
		rect.setAttribute("stroke", 'black');
		rect.setAttribute("fill", color);
		return rect;
	}

	

	var height = document.getElementById('height');
	var width = document.getElementById('width');
	var count = document.getElementById('countsub');
	var batten = document.getElementById('batten');
	var lapping = document.getElementById('lapping');

	var h,w,l,b,la;

	h = parseInt(height.value)*10;   // window height
	w = parseInt(width.value)*10;		// window width
	l = parseInt(count.value);    
	if (l<1) l = 1;
	b = parseInt(batten.value)*10;
	la = parseInt(lapping.value)*10;

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

	canva.appendChild(createRect(x0+b,y0+b,w-2*b, h-2*b,'blue'));

	for (var i = 1; i < l; i++) {        

		//canva.appendChild(createLine(x0+(b+d)*i,y1+b,x0+(b+d)*i,y2-b));
		//canva.appendChild(createLine(x0+(b+d)*i+b,y1+b,x0+(b+d)*i+b,y2-b));

		canva.appendChild(createRect(x0+(b+d)*i, y1+b, b, h-2*b ));
	}   

	var buttoncount = document.getElementById("buttoncount");
	var buttons = buttoncount.getElementsByClassName("btn-primary");

	for (var i = 0; i < buttons.length; i++) {
		var n = parseInt(buttons[i].innerHTML)-1;
		canva.appendChild(createRect(x0+(b+d)*n+b-la, 
									 y1+b-la,
									 d+2*la,
									 h-2*la
									 ));

		canva.appendChild(createRect(x0+(b+d)*n+2*b-la,
									 y1+2*b-la,
									 d-2*la,
									 h-2*b-2*la,y
									 'blue'
									 ));
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
	doDraw();

}



var button = document.getElementById("button");
if (button !=null) button.onclick = doDraw;     
var input = document.getElementById("countsub");
if (input != null) input.onchange = createButtons;





