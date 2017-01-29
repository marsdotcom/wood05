

<?php        


$servername = "localhost";
$username = "marsdotco0_base1";
$password = "defolt";
$dbname = "marsdotco0_base1";
$id =$_GET['id'];
$name="...";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}


$sql = "select name from products where _id =".$id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
      $name = $row["name"];
   }
}else $name = "no";


?>


<h2 >Ящик  <?php   echo $name; ?> </h1>

   <ul class="nav nav-tabs ">
      <li class="active"><a data-toggle="tab" href="#home">Рейки</a></li>
      <li><a data-toggle="tab" href="#menu1">Фанера</a></li>
      <li><a data-toggle="tab" href="#menu2">Крепеж</a></li>
   </ul>



   <div class="tab-content">
      <div id="home" class="tab-pane fade in active"> <!-- Table for battens -->

         <?php    

         $sql = "select * from battens  where n_id =".$id;
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {

            echo "<table class=\"table table-bordered table-condensed\"><thead><tr><th>Size</th><th>Length</th><th>Count</th><th>@</th></tr></thead><tbody>";

            while($row = $result->fetch_assoc()) {
               echo "<tr><td>".$row["size"]."</td><td>".$row["length"]."</td><td>".$row["count"]."</td><td><button name=".$row["_id"]." class=\"btn btn-default btn-sm tdbutton\" ><i class=\"glyphicon glyphicon-list \"></i></button></td></tr>";
            }
            echo "</tbody></table>";
         } else {
            echo "0 results";
         }


         ?>


      </div>
      <div id="menu1" class="tab-pane fade">  <!-- Table for plywoods -->

         <?php    

         $sql = "select * from plywoods where n_id =".$id;
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {

            echo "<table class=\"table table-bordered table-condensed\"><thead><tr><th>Width</th><th>Length</th><th>Count</th><th>@</th></tr></thead><tbody>";

            while($row = $result->fetch_assoc()) {
               echo "<tr><td>".$row["width"]."</td><td>".$row["length"]."</td><td>".$row["count"]."</td><td><button name=".$row["_id"]." class=\"btn btn-default btn-sm\" type=\"button\"><i class=\"glyphicon glyphicon-list\"></i></button>    </td></tr>";
            }
            echo "</tbody></table>";
         } else {
            echo "Фанера не используется";
         }      

         ?>



      </div>
      <div id="menu2" class="tab-pane fade">     
         <p>Some content in menu 2.</p>
      </div>



   </div>  <!--/.tab-content -->

   <?php  



   $sql = "select _id from products";
   $result = $conn->query($sql);

   $arr = array();
   $i = 0;
   $c = 0;

   if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){       
         $arr[$i] = $row["_id"];        
         if ($row["_id"] == $id) $c = $i;
         $i = $i+1;        
      }
      $p = $c-1;
      $n = $c +1;

   }         

   echo "<ul class=\"pager\">";
   if ($p > -1) echo  "<li ><button class=\"pagea\" value=\"get.php?id=".$arr[$p]."\">Предыдущий ящик</button></li>";
   if ($n < $i)echo  "<li ><button class=\"pagea\" value=\"get.php?id=".$arr[$n]."\">Следующий ящик</button></li>";
   echo " </ul>";          


   $conn->close();


   ?>  

   