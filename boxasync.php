<?php session_start();  include "doctype.php"  ?>

<div class="container" id="async">


</div><!-- /.container -->


<div class="input-group hidden">
  <span class="input-group-addon myspan">Кубов в м   <sup>3</sup></span>
  <input id="cub" type="number" value="1" class="form-control" name="msg" placeholder="Кубов">
  <span class="input-group-btn">
    <button id="button2"class="btn btn-default" type="button"><i class="glyphicon glyphicon-refresh"></i></button>
</span>
</div>   



<?php include "foot.php" ?>

   <script>
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

function getUrlVar(){
    var urlVar = window.location.search; // получаем параметры из урла
    var arrayVar = []; // массив для хранения переменных
    var valueAndKey = []; // массив для временного хранения значения и имени переменной
    var resultArray = []; // массив для хранения переменных
    arrayVar = (urlVar.substr(1)).split('&'); // разбираем урл на параметры
    if(arrayVar[0]=="") return false; // если нет переменных в урле
    for (i = 0; i < arrayVar.length; i ++) { // перебираем все переменные из урла
        valueAndKey = arrayVar[i].split('='); // пишем в массив имя переменной и ее значение
        resultArray[valueAndKey[0]] = valueAndKey[1]; // пишем в итоговый массив имя переменной и ее значение
    }
    return resultArray; // возвращаем результат
}

var gets = getUrlVar();

var xmlhttp = getXmlHttp();

var div = document.getElementById("async");

function getcontent(url){

    xmlhttp.open('GET', url, true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4) {
           if(xmlhttp.status == 200) {
             div.innerHTML = xmlhttp.responseText;
             var buttons = document.getElementsByClassName("pagea");

             if (buttons != null) 
                 for (var i=0;i<buttons.length;i++){

                    buttons[i].onclick = click;
                }
            }
        }
    };
    xmlhttp.send(null);

}

function click(){

    var url = this.getAttribute("value");
    getcontent(url);

}

getcontent("get.php?id="+gets['id']);

var buttons = document.getElementsByClassName("pagea");

if (buttons != null) 
 for (var i=0;i<buttons.length;i++){

    buttons[i].onclick = click;

}




</script>


</body></html>