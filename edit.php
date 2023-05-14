<?php include('db.php');
?>

<?php

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$nombre= '';
$date = '';
$finca= '';
$lote= '';
$block= '';
$ciclo= '';
$rangoM1= '';
$rango0= '';
$rango1= '';
$rango2= '';
$rango3= '';
$rango4= '';
$rango5= '';
$rango6= '';
$rango7= '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM pesosdbs WHERE id=$id";
 
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $date = $row['date'];
    $finca = $row['finca'];
    $lote = $row['lote'];
    $block = $row['block'];
    $ciclo = $row['ciclo'];
    $rangoM1 = $row['rangoM1'];
    $rango0 = $row['rango0'];
    $rango1 = $row['rango1'];
    $rango2 = $row['rango2'];
    $rango3 = $row['rango3'];
    $rango4 = $row['rango4'];
    $rango5 = $row['rango5'];
    $rango6 = $row['rango6'];
    $rango7 = $row['rango7'];
    $Tsuma = $row['Tsuma'];
    
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $date= $_POST['date'];
  $finca = $_POST['finca'];
  $lote = $_POST['lote'];
  $block = $_POST['block'];
  $ciclo = $_POST['ciclo'];
  $rangoM1 = $_POST['rangoM1'];
  $rango0 = $_POST['rango0'];
  $rango1 = $_POST['rango1'];
  $rango2 = $_POST['rango2'];
  $rango3 = $_POST['rango3'];
  $rango4 = $_POST['rango4'];
  $rango5 = $_POST['rango5'];
  $rango6 = $_POST['rango6'];
  $rango7 = $_POST['rango7'];
  $Tsuma = $rangoM1+ $rango0 + $rango1 + $rango2 + $rango3 + $rango4 + $rango5 + $rango6 + $rango7;


  $query = "UPDATE pesosdbs SET nombre='$nombre', date='$date', finca='$finca', lote='$lote', block='$block', ciclo='$ciclo', rangoM1='$rangoM1', rango0='$rango0', rango1='$rango1', rango2='$rango2', rango3='$rango3', rango4='$rango4', rango5='$rango5', rango6='$rango6', rango7='$rango7', Tsuma='$Tsuma' WHERE id=$id";
  
  if(mysqli_query($conn, $query)){
  // header("Location: index.php", TRUE, 301);
  // header("Location: /index.php");

  ?>
  <script>
    window.location.replace("myweb/index.php");
    
  </script>
  <?php
  
  die();
  }
  else{
    echo "Error updating record: " . mysqli_error($conn);
  }
}

?>
<?php include('includes/headerUDT.php'); ?>
<main class="">
  <div class="container">
    <div class="row">

      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="container">
      
          <div class="item">
          <label for="">Mostreador</label>
              <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update Nombre Mostreador">
            </div>
            <div class="item">
            <label for="">Fecha</label>
              <input name="date" type="text" class="form-control" value="<?php echo $date; ?>" placeholder="Update date">
          </div>


            <div class="item">
            <label for="">Finca</label>
                <select id="ng" name="finca" class="form-control" autofocus>
                  <option value="PTR">PTR</option>
                  <option value="PFR">PFR</option>
                  <option value="PCA">PCA</option>
                  <option value="PCR">PCR</option>
                  <?php echo $finca;?>
                </select>
            </div>

            <div class="item">
            <label for="">Lote</label>
              <input type="number" name="lote" class="form-control" id="" <?php echo $lote; ?> placeholder="Update Lote">
            </div>

            <div class="item">
            <label for="">Block</label>
              <input type="number" name="block" class="form-control" id="block" <?php echo $block; ?> placeholder="Update Block">
            </div>


            <div class="item">
              <label for="">Ciclo</label>
                <select id="ng" name="ciclo" class="form-control" autofocus>
                  <option value="PC">PC</option>
                  <option value="RC">RC</option>
                  <option value="TR">TR</option>
                  <?php echo $ciclo; ?> 
                </select>
              </div>

            <div class="item">
            <label for="">Rango -1</label>
              <input type="number" name="rangoM1" class="form-control" id="rangoM1" <?php echo $rangoM1; ?> placeholder="Update Rango-1">
            </div>



            <div class="item">
            <label for="">Rango 0</label>
              <input type="number" name="rango0" class="form-control" id="rango0" <?php echo $rango0; ?> placeholder="Update Rango0">
            </div>

            <div class="item">
            <label for="">Rango 1</label>
              <input type="number" name="rango1" class="form-control" id="rango1" <?php echo $rango1; ?> placeholder="Update Rango1">
            </div>

            <div class="item">
            <label for="">Rango 2</label>
              <input type="number" name="rango2" class="form-control" id="block" <?php echo $rango2; ?> placeholder="Update Rango2">
            </div>

            <div class="item">
            <label for="">Rango 3</label>
              <input type="number" name="rango3" class="form-control" id="block" <?php echo $rango3; ?> placeholder="Update Rango3">
            </div>

            <div class="item">
            <label for="">Rango 4</label>
              <input type="number" name="rango4" class="form-control" id="rango4" <?php echo $rango4; ?> placeholder="Update Rango4">
            </div>

            <div class="item">
            <label for="">Rango 5</label>
              <input type="number" name="rango5" class="form-control" id="rango5" <?php echo $rango5; ?> placeholder="Update Rango5">
            </div>

            <div class="item">
              <label for="">Rango 6</label>
              <input type="number" name="rango6" class="form-control" id="rango6" <?php echo $rango6; ?> placeholder="Update Rango6">
            </div>

            <div class="item">
              <label for="rango7">Rango 7</label>
              <input type="number" name="rango7" class="form-control" id="rango7" <?php echo $rango7; ?> placeholder="Update Rango7">
           
            <div style="padding: 1rem 0 1rem 1rem;" class="container">
            <input type="submit" class="btn btn-outline-success" name="update" value="Update">
            </div>
          </div>
          
      
        </div>  
      </form>
      </div>
    </div>
</main>
<?php include('includes/footer.php'); ?>
