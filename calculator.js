function calculate(){

	var thickness = document.getElementById('thickness');
	var width = document.getElementById('width');
	var length = document.getElementById('length');
	var cub = document.getElementById('cub');
	var count = document.getElementById('count');

	var th,w,l,c,co,m;

	th = parseInt(thickness.value);		
	w = parseInt(width.value);
	l = parseInt(length.value);
	c = parseFloat(cub.value);
	co = parseFloat(count.value);

	if (isNaN(th)) thickness.parentElement.classList.add("has-error"); else thickness.parentElement.classList.remove("has-error");
	if (isNaN(w)) width.parentElement.classList.add("has-error"); else width.parentElement.classList.remove("has-error");
	if (isNaN(l)) length.parentElement.classList.add("has-error"); else length.parentElement.classList.remove("has-error");

	var id = this.getAttribute("id"); 

	if (id=="button1") {

		if (isNaN(c)) cub.parentElement.classList.add("has-error"); else cub.parentElement.classList.remove("has-error");

		m = th*w*l;

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

		c = th*w*l*co/1000000;

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
