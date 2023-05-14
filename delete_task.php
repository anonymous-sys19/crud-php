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

// sql to delete a record
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM pesosdbs WHERE id=$id";

}

if (mysqli_query($conn, $sql)) {
  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: myweb/index.php');
} else {
    die("Conn Failed to delete." . mysql_error($conn) );
}

mysqli_close($conn);
?>