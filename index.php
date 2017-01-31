<?php  include "doctype.php"  ?>

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
                      <button id="button2" class="btn btn-default" type="button"><i class="glyphicon glyphicon-refresh"></i></button>
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
                    либо кубатуру досок по введенному количеству досок.
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
        
  
      </div><!-- /.container -->


      <?php include "foot.php" ?>

    <script src="calculator.js"></script>

  </body></html>