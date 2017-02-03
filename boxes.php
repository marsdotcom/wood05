<?php session_start(); include "doctype.php"  ?>

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
            echo "<tr><td>".$row["_id"]."</td><td><a href=\"boxasync.php?id=".$row["_id"]."\"/>".$row["name"]."</td><td><button value=\"".$row["_id"]."\" class=\"btn btn-default btn-sm tdbutton\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-list\"></i></button>    </td></tr>";
          }
          echo "</tbody></table>";
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>




      </div><!-- /.container -->


      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" >                
            <div class="modal-body" id="content">
              ...
            </div>
            
          </div>
        </div>
      </div>
    </div>



   <?php include "foot.php" ?>

   
    <script>
      var tds = document.getElementsByClassName("tdbutton");
      var newtr = document.getElementById("content");

      for (var i=0;i<tds.length;i++)
      {
        tds[i].onclick = clicktd;
      }


      function clicktd()
      {

       getcontent("get.php?id="+this.getAttribute("value"));

     }   

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



    function getcontent(url){

      xmlhttp.open('GET', url, true);
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4) {
         if(xmlhttp.status == 200) {
           newtr.innerHTML = "<button class=\"btn btn-default btn-sm pull-right\" data-dismiss=\"modal\">X</button> " + xmlhttp.responseText;
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



  </script>


</body></html>