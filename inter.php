<?php  session_start(); 

$view = "";
$error = "";

if (isset($_GET['exit'])){   // Выполнен выход...
  session_unset();
  session_destroy();

  setcookie("name","", time() - 3600);
  setcookie("email","", time() - 3600);
  setcookie("pass","", time() - 3600);

  $view = "inter";

};


if(isset($_POST['login'])) {   // Проверка логина и пароля...  

  $login = $_POST['login'];
  $pass = $_POST['pass'] ;

  

  $sql = "SELECT * FROM users WHERE login='$login'  AND  password='$pass'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0)  {       //  Логин и пароль введены правильно...

    $row = $result->fetch_assoc();   

     $_SESSION['login'] = $login;
     setcookie("name",$row['name']);
     setcookie("email",$row['email']);

     $view = "out";
  }else {
     $view = "inter";
     $error = "Неверный логин или пароль";   
  }

}
elseif (isset($_SESSION['login'])){   //  Вход уже выполнен...
  $login = $_SESSION['login'];

  $view = "out";  

}
else{                   // Вход не был выполнен, первое отображение страницы или после выхода...

  $view = "inter"; 

}

include "doctype.php";

switch ($view) {
  case 'inter':
   echo ' <div class="container">'.$error;

   echo '
  <div class="col-sm-6 col-sm-offset-3">
    <form method="post"  action="inter.php" role="form">
      <div class="form-group">
        <label for="exampleInputLogin">Логин</label>
        <input type="text" class="form-control" id="exampleInputLogin" placeholder="Enter Login" name="login">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Пароль</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
      </div>             
      <button type="submit" class="btn btn-default">Отправить</button>
      <a class="pull-right"  href="auth.php">Новый пользователь</a>
    </form>
  </div> 

</div>';

    # code...
    break;

  case 'out': include "user.php";

  break;
  
  default:
    # code...
    break;
}

 include "foot.php" ?>

</body></html>