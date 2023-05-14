<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>




<main class="">
  <div class="container">
    <div class="row">
      <!-- MESSAGES -->


      <?php

        if (isset($_ADMIN['message'])) { ?>

          <div class="alert alert-<?= $_ADMIN['message_type']?> alert-dismissible fade show login_admin_message" role="alert">
            <?= $_ADMIN['message']?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span class="close" aria-hidden="true">&times;</span>
              </button>
          </div>
      <?php session_unset(); } ?>

      <?php
        if (isset($_SESSION['message'])) { ?>

          <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <form action="save_task.php" method="POST">
      <div class="container">

          <div class="item">
            <label for="nombre">Nombre Mostreador</label>
            <input type="text" name="nombre" id="ng" class="form-control nombreMostreador" placeholder="Nombre Mostreador" required>
          
          </div>

          <div class="item">
            <label for="date">Fecha</label>
            <input type="date" id="ng" name="date" class="form-control" placeholder="Lote" required>
            <!-- <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea> -->
          </div>

          <div class="item">
            <label for="finca">Finca</label>
            <select id="ng" name="finca" class="form-control" required>
              <option value="PTR">PTR</option>
              <option value="PFR">PFR</option>
              <option value="PCA">PCA</option>
              <option value="PCR">PCR</option>

            </select>
            <!-- <input type="text" name="title" class="form-control" placeholder="Task title" > -->
          </div>

          
          <div class="item">
            <label for="lote">Lote</label>
            <input id="ng" type="number" name="lote" class="form-control" placeholder="Lote" required>
          </div>

          <div class="item">
            <label for="block">Block</label>
          <input id="ng" type="number" name="block" class="form-control" placeholder="Block"  required>
          </div>

          
          <div class="item">
            <label for="ciclo">Ciclo</label>
            <select id="ng" name="ciclo" class="form-control"  required>
              <option value="PC">PC</option>
              <option value="RC">RC</option>
              <option value="TR">TR</option>
            </select>
          </div>

          <div class="item">
            <label for="rangoM1">Rango-1</label>
          <input id="ng" type="number" name="rangoM1" class="form-control" placeholder="Rango-1"  required>
          </div>

          <div class="item">
            <label for="rango0">Rango 0</label>
          <input id="ng" type="number" name="rango0" class="form-control" placeholder="Rango0"  required>
          </div>

          <div class="item">
            <label for="rango1">Rango 1</label>
          <input id="ng" type="number" name="rango1" class="form-control" placeholder="Rango1"  required>
          </div>

          <div class="item">
          <label for="rango2">Rango 2</label>
          <input id="ng" type="number" name="rango2" class="form-control" placeholder="Rango2"  required>
          </div>
          <!--  -->
          <div class="item">
          <label for="rango3">Rango 3</label>
          <input id="ng" type="number" name="rango3" class="form-control" placeholder="Rango3" required>
          </div>

          <div class="item">
          <label for="rango4">Rango 4</label>
          <input id="ng" type="number" name="rango4" class="form-control" placeholder="Rango4" required>
          </div>

          <div class="item">
          <label for="rango5">Rango 5</label>
          <input id="ng" type="number" name="rango5" class="form-control" placeholder="Rango5"  required>
          </div>

          <div class="item">
          <label for="rango6">Rango 6</label>
          <input id="ng" type="number" name="rango6" class="form-control" placeholder="Rango6"  required>
          </div>

          <div class="item">
          <label for="rango7">Rango 7</label>
          <input id="ng" type="number" name="rango7" class="form-control" placeholder="Rango7"  required>
          <!-- </div>


         
        <div> -->
          <input id="save_Task" type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
          
          <input id="btnExportar" type="button" class="btn btn-success btn-block" value="Convert to Exel FIle to.xlsx">
      </div>
        </div>
        </form>
      
    </div>
    </div>


    </main>

      

<!-- INcluyo o traigo  la tabla name and searhc -->
<?php include("name.php")?>
<?php include('includes/footer.php');?>





