<?php  include "doctype.php"; ?>

<div class="container">

<div class="col-sm-6 col-sm-offset-3">

  <h2>Сообщение администратору сайта:</h2>
  <p>  </p>

    <form role="form">
      <div class="form-group">
        <label for="email">Почта</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="username">Имя</label>
        <input type="text" class="form-control" id="username" placeholder="name">
    </div>
    <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea rows=5 col=50 class="form-control" id="message">   </textarea> 
        <p class="help-block" id="res">.</p>
    </div>    
  <button type="button" class="btn btn-default" id="button">Отправить</button>
</form>
</div>

</div>

<?php  include "foot.php";?>

<script type="text/javascript">


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


document.getElementById("button").onclick = function(){
    
    var message = document.getElementById('message'),
        username = document.getElementById('username');
        email = document.getElementById('email'),
        res = document.getElementById('res');



        if (message.value == "") {
            message.parentElement.classList.add("has-error");
        }else{
            message.parentElement.classList.remove("has-error");
        }

        if (username.value == "") {
            username.parentElement.classList.add("has-error");
        }else{
            username.parentElement.classList.remove("has-error");
        }

        if (email.value == "") {
            email.parentElement.classList.add("has-error");
        }else{
            email.parentElement.classList.remove("has-error");
        }



        xmlhttp.open('POST', "sendmail.php", true);
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4) {
                if(xmlhttp.status == 200) {

                   message.value = "";
                   username.value = "";
                   email.value = "";

                   res.innerHTML = xmlhttp.responseText;

                }
            }
        }
        xmlhttp.send("username="+username.value+"&email="+email.value+"&message="+message.value);


}


</script>

</body></html>