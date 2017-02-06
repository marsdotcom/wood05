<?php  session_start();       

if (isset($_POST['login'])) {

  $login = $_POST['login'];
  $pass  = $_POST['pass'];
  $email = $_POST['email'];
  $exist = false;

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

  $sql = "SELECT * FROM users WHERE login=".$login;
  $result = $conn->query($sql);

  if ($result->num_rows > 0)  {

      $conn->close();
      $exist = true;

  }else{

      $sql = "INSERT INTO users VALUES (NULL,NULL,'$login','$pass')";
      $result = $conn->query($sql);
      if (!$result) {
        echo "ОЩиБКА"; 
        echo $conn->error; 
      }else{

        $_SESSION['name'] = $login;
        $_SESSION['pass'] = $pass;       

      }

      $conn->close();
      header('Location: inter.php'); 
      exit();    

  }

}

 include "doctype.php";

?>


<div class="col-sm-6 col-sm-offset-3">
  <form method="post"  action="auth.php" role="form">
    <div class="form-group">
      <label for="exampleInputLogin">Логин <span class="red"><?php if ($exist) echo " : ".$login." занять";?> </span></label>
      <input type="text" maxlength="32" class="form-control" id="exampleInputLogin" placeholder="Enter Login" name="login">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Пароль</label>
      <input type="password" maxlength="32"   class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail">Почта</label>
      <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter email" name="email">
    </div>             
    <button type="submit" class="btn btn-default">Регистрация</button>      
  </form>
</div> 








<?php  include  "foot.php"; ?>

</body></html>