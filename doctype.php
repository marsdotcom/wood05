<!DOCTYPE html>
<!-- saved from url=(0049)http://bootstrap-3.ru/examples/starter-template/# -->
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="marsdotcom">
<link rel="shortcut icon" href="favicon.ico">

<title>
  <?php  
  $title = "";
  switch (substr($_SERVER['PHP_SELF'],1)) {

    case "index.php": $title = "Калькулятор расчета кубатуры досок"; break;
    case "windows.php": $title = "Калькулятор расчета окон"; break;
    case "inter.php": $title = "Вход на сайт"; break;      
    default: $title = "WOOD05"; break;

  } ;   
  echo $title;


  ?>
</title>

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
      <script type="text/javascript">try{window.b=function(d){window.addEventListener&&window.addEventListener("DOMContentLoaded",d)};window.c=function(d){(d=document.getElementById(d))&&d.parentNode&&d.parentNode.removeChild(d)};window.f=function(d){if(document.querySelectorAll&&(d=document.querySelectorAll(d)))for(var e=0;e<d.length;e++)d[e]&&d[e].parentNode&&d[e].parentNode.removeChild(d[e])};window.a=function(d,e){if(document.querySelectorAll)for(var g=document.querySelectorAll(d),h=0;h<g.length;h++)e(g[h])};var k=function(d){if(document.querySelectorAll)for(var e=
        document.querySelectorAll('iframe[id^="AdFox_iframe_"]'),g=0;g<e.length;g++)d(e[g])},l=function(){k(function(d){d&&d.parentNode&&d.parentNode.removeChild(d)})};"complete"===document.readyState||"interactive"===document.readyState?l():document.addEventListener?document.addEventListener("DOMContentLoaded",l):document.attachEvent&&document.attachEvent("DOMContentLoaded",l);try{Object.defineProperty(window,"noAdsAtAll",{get:function(){return!0}})}catch(d){}}catch(d){console.error("Error executing AG js: "+
        d)};</script><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
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
                <li ><a href="boxes.php">Ящики</a></li>
                <li ><a href="windows.php">Окна</a></li>
                <!--    <li><a href="#contact">Контакты</a></li> -->
                <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">Портфолио
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li > <a href="bower.php">Беседки</a></li>
                    <li><a href="stairs.php">Лестницы</a></li>
                    <li><a href="#">Другое</a></li>
                  </ul>
                </li>
                <li><a href="inter.php">
                  <?php if(isset($_SESSION['login'])) 
                    echo $_SESSION['login'];
                    else echo "Вход";  ?></a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>