<?php

if (isset($_POST['login'])) {

  $name  = $_POST['name'];
  $login = $_POST['login'];
  $pass  = $_POST['pass'];
  $email = $_POST['email'];

  $error = false;

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

  $sql = "UPDATE users SET name='$name', email='$email' WHERE login = '$login' ";
  $result = $conn->query($sql);

  if (!$result) {
    echo "Ощибка<br>";
    echo $conn->error;
  }else {
    echo "OK";
  }

}else{

  echo "?";
}




?>