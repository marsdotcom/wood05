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

	
	

	var 

	h = parseInt(height.value)*10,  // window height
	w = parseInt(width.value)*10,		// window width
	l = parseInt(count.value), 	
	b = parseInt(batten.value)*10,
	la = parseInt(lapping.value)*10;

	if (l<1) l = 1;

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

		var R = createRect(x0+(b+d)*i, y1+b, b, h-2*b);
		R.onmousemove = mouseover;
		R.onmouseout  = mouseout;
		R.onmousedown = mousedown;
		canva.appendChild(R);
	}   

	var buttoncount = document.getElementById("buttoncount");
	var buttons = buttoncount.getElementsByClassName("btn-primary");

	for (var i = 0; i < buttons.length; i++) {
		var n = parseInt(buttons[i].innerHTML)-1;
		canva.appendChild(createRect(x0+(b+d)*n+b-la, 
			y1+b-la,
			d+2*la,
			h+2*la-2*b
			));

		canva.appendChild(createRect(x0+(b+d)*n+2*b-la,
			y1+2*b-la,
			d+2*la-2*b,
			h+2*la-4*b,
			'blue'
			));
	}

	SaveCookie();


	function mouseover(event)
	{
		event.target.setAttribute("fill", "#72A27E");
	}

	function mouseout(event)
	{
		event.target.setAttribute("fill", "grey");
	}

	function mousedown(event){

		var e = event.target.getAttribute("x");
		var log = document.getElementById("log");
		log.innerHTML = e;

	}

}





function createButtons(count){
	
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

function change()
{
	createButtons(this.value);
}



function click(){

	this.classList.toggle("btn-primary");
	doDraw();

}




//==================================COOKIE ===================================//
function getCookie(cname) {
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for(var i = 0; i <ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}

function setCookie(cname, cvalue, exdays=7) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
//============================================================================//


var height = document.getElementById('height');
var width = document.getElementById('width');
var count = document.getElementById('countsub');
var batten = document.getElementById('batten');
var lapping = document.getElementById('lapping');

(function LoadCookie(){

	var ch = getCookie('height'),
	cw = getCookie('width'),
	cc = getCookie('count'),
	cb = getCookie('batten'),
	cla = getCookie('lapping');

	if (ch!="") height.value = ch;
	if (cw!="") width.value = cw;
	if (cc!="") count.value = cc;
	if (cb!="") batten.value = cb;
	if (cla!="") lapping.value = cla;
})();


function SaveCookie(){

	setCookie('height',height.value);
	setCookie('width',width.value);
	setCookie('count',count.value);
	setCookie('batten',batten.value);
	setCookie('lapping',lapping.value);
}

var button = document.getElementById("button");
if (button !=null) button.onclick = doDraw;     
var input = document.getElementById("countsub");
if (input != null) input.onchange = change;

createButtons(input.value);
doDraw();










