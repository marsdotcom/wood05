
<div class="container">	

	<div class="col-sm-6 col-sm-offset-3">

		<p> Тут можно изменить свои данные, имя, почту или вообще удалить регистрацию </p>

		<div>		

			<div class="form-group">
				<label for="name">Имя</label>
				<input type="text" class="form-control" id="name"  name="name" value= <?php echo $_COOKIE['name']; ?> >
			</div>

			<div class="form-group hidden">
				<label for="name">Логин</label>
				<input type="text" class="form-control" id="login"  name="login" value= <?php echo $login; ?> >
			</div>

			<div class="form-group hidden">
				<label for="password">Пароль</label>
				<input type="password" maxlength="32"   class="form-control" id="password" placeholder="Password" name="pass">
			</div>

			<div class="form-group">
				<label for="email">Почта</label>
				<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value= <?php echo $_COOKIE['email'] ?> >
			</div>  

			<label id="callback"> </label>

			<button id="update"  class="btn btn-default" name="update"  value="update">Изменить</button>

		</div>


		<form method="get"  action="inter.php" role="form" class="pull-right">  

			<button type="submit" class="btn btn-default" name="exit"  value="exit" >Выход</button>

		</form>

	</div> 

</div>

<script> 

	function setCookie(cname, cvalue) {
		
		document.cookie = cname + "=" + cvalue;
	}

	function getXmlHttp(){
		var xmlhttp;
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (E) {
				xmlhttp = false;
			}
		}
		if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
			xmlhttp = new XMLHttpRequest();
		}
		return xmlhttp;
	}



	var xmlhttp = getXmlHttp();

	

	document.getElementById("update").onclick = function (){

		var name = document.getElementById("name").value,
		email = document.getElementById("email").value,
		pass = document.getElementById("password").value;
		login = document.getElementById("login").value;


		var body = "name="+ encodeURIComponent(name) + 
		"&email=" + email +     					
		"&login=" + login;

		sendData("updateuser.php",body);
	}

	function updateCookie(){

		var name = document.getElementById("name").value,
		email = document.getElementById("email").value,
		pass = document.getElementById("password").value;
		login = document.getElementById("login").value;

			setCookie("name",name);
			setCookie("email",email);

	}


	function sendData(url,body){    	

		xmlhttp.open('POST', url, true);
		xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4) {
				if(xmlhttp.status == 200) {

					var callback = document.getElementById("callback");

					callback.innerHTML = xmlhttp.responseText;
					if (callback.innerHTML="OK"){
							updateCookie();
					}
				}

			}

		};
		xmlhttp.send(body);

	}


</script>