<?php
$servername = "localhost";
$username = "id19285642_grupoacon3";
$password = "(1RGEstudi0s)";
$dbname = "id19285642_anonimo"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['save_task'])) {
  $nombre = $_POST['nombre'];
  $date = $_POST['date'];
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
  
  $query = "INSERT INTO pesosdbs(nombre, date, finca, lote, block, ciclo, rangoM1, rango0, rango1, rango2, rango3, rango4, rango5, rango6, rango7, Tsuma) VALUES ('$nombre', '$date', '$finca', '$lote', '$block', '$ciclo', '$rangoM1', '$rango0', '$rango1', '$rango2', '$rango3', '$rango4', '$rango5', '$rango6', '$rango7', '$Tsuma')";
  $result = mysqli_query($conn, $query);
  
  if($result) {
    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
    
  }else{
    die("Query Failed.");
  }

};
?>
