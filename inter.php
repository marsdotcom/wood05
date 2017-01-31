<?php  include "doctype.php"  ?>

<?php  if (isset($_POST['login'])) 
$name = $_POST['login'];
else $name = "unknown";  ?>

<div class="container">


  <div class="col-sm-6 col-sm-offset-3">

    <form method="post"  action="inter.php" role="form">
      <div class="form-group">
        <label for="exampleInputLogin">Логин</label>
        <input type="text" class="form-control" id="exampleInputLogin" placeholder="Enter Login" name="login" value=<? echo $name;  ?>>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Пароль</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
      </div>             
      <button type="submit" class="btn btn-default">Отправить</button>
    </form>

  </div> 



</div><!-- /.container -->



<?php include "foot.php" ?>

</body></html>