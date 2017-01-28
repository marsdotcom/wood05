<!DOCTYPE html>
<!-- saved from url=(0049)http://bootstrap-3.ru/examples/starter-template/# -->
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="marsdotcom">
<link rel="shortcut icon" href="./favicon.ico">

<title>WOOD05</title>

<!-- Bootstrap core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="styles.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script type="text/javascript">try {
        window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener('DOMContentLoaded', func); } };
        window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
        window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
        window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
        var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
        var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
        var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
        var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
        var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
        var AdFox_getCodeScript = function() {};
        AG_onLoad(function() { AG_each('iframe[id^="AdFox_iframe_"]', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
        try { Object.defineProperty(window, 'noAdsAtAll', { get: function() { return true; } }); } catch (ex) {}
      } catch (ex) { console.error('Error executing AG js: ' + ex); }</script><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
      .en-markup-crop-options {
        top: 18px !important;
        left: 50% !important;
        margin-left: -100px !important;
        width: 200px !important;
        border: 2px rgba(255,255,255,.38) solid !important;
        border-radius: 4px !important;
      }

      .en-markup-crop-options div div:first-of-type {
        margin-left: 0px !important;
      }
    </style></head>

    <body>


      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">WOOD05</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Калькулятор</a></li>
              <li><a href="boxes.php">Ящики</a></li>
              <li><a href="windows.php">Окна</a></li>
              <li><a href="#contact">Контакты</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Портфолио
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li > <a href="bower.php">Беседки</a></li>
                    <li><a href="stairs.php">Лестницы</a></li>
                    <li><a href="#">Другое</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="container">
              <h1 class="text-center" >Калькулятор расчета количества досок.</h1>  <br>      
              <div class="row">
                <div class="col-sm-6">    

                  <div class="input-group input-group-lg">
                    <span class="input-group-addon myspan">Толшина в мм.</span>
                    <input id="thickness" type="number" value="50" class="form-control" name="msg" placeholder="Толшина">
                  </div>                    

                  <div class="input-group input-group-lg">
                    <span class="input-group-addon myspan">Ширина в мм. </span>
                    <input id="width" type="number" value="150" class="form-control" name="msg" placeholder="Ширина">
                  </div>  

                  <div class="input-group input-group-lg">
                    <span class="input-group-addon myspan">  Длина в м  </span>
                    <input id="length" type="number" value="6" class="form-control" name="msg" placeholder="Длина">
                  </div>  

                  <div class="input-group input-group-lg">
                    <span class="input-group-addon myspan">Кубов в м   <sup>3</sup></span>
                    <input id="cub" type="number" value="1" class="form-control" name="msg" placeholder="Кубов">
                    <span class="input-group-btn">
                      <button id="button2"class="btn btn-default" type="button"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                  </div>   

                  <div class="input-group input-group-lg">
                    <span class="input-group-addon myspan">Количество</span>
                    <input id="count" type="number" class="form-control" name="msg" placeholder="Количество">
                    <span class="input-group-btn">
                      <button id="button1" class="btn btn-default" type="button"><i class="glyphicon glyphicon-refresh"></i></button>
                    </span>
                  </div>

                </div>

                <div class="col-sm-6">
                  <P class="lead pull-left">
                    Калькулятор рассчитывает количество досок определенного сечения и длины в кубе,
                    либо количество кубов по введенному количеству досок.
                  </P>
                  <p class="lead">
                    Чтобы вычислить количество досок нажмите кнопку напротив поля количества досок.
                    Чтобы вычислить кубатру досок нажмите кнопку напротив количетва кубов.
                  </P>


                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container">
          <!-- Button trigger modal -->
          <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
            Посмотреть демо
          </button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Название модали</h4>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                  <button type="button" class="btn btn-primary">Сохранить изменения</button>
                </div>
              </div>
            </div>
          </div>
        </div>




      </div><!-- /.container -->


      <div id="footer">
        <div class="container">
          <p class="pull-right"><a class="btn btn-default btn-sm"  href="#"><i  class="glyphicon glyphicon-arrow-up"> </i></a></p>
          <small>
            <p>&copy; 2017 WOOD05, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            
         </small>
       </div>
     </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="calculator.js"></script>

  </body></html>