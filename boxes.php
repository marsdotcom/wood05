<!DOCTYPE html>
<!-- saved from url=(0049)http://bootstrap-3.ru/examples/starter-template/# -->
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="marsdotcom">
<link rel="shortcut icon" href="favicon.ico">

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
              <li ><a href="index.php">Калькулятор</a></li>
              <li class="active"><a href="#about">Ящики</a></li>
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


          <h1 class="cover-heading">Ящики:</h1>
          <?php
          $servername = "localhost";
          $username = "marsdotco0_base1";
          $password = "defolt";
          $dbname = "marsdotco0_base1";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          } 

          $sql = "SELECT * FROM products";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            echo "<table class=\"table table-bordered table-condensed\"><thead ><tr><th>ID</th><th>Name</th><th>@</th></tr></thead><tbody>";
        // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>".$row["_id"]."</td><td><a href=\"box.php?id=".$row["_id"]."\"/>".$row["name"]."</td><td><button name=".$row["_id"]." id=\"button\" class=\"btn btn-default btn-sm\" type=\"button\"><i class=\"glyphicon glyphicon-list\"></i></button>    </td></tr>";
            }
            echo "</tbody></table>";
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>




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


  </body></html>