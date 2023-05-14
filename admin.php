
<form action="" method="POST">
    <input name="admin" style="margin: auto;" type="text" class="form-control" data-bs-dismiss="alert" aria-label="Close" placeholder="Enter Password Admin"/>
    <input type="submit" style="margin: 1rem auto;" class="btn btn-outline-success container" value="Login" name="btnAdmin">
</form>




<?php
$servername = "localhost";
$username = "id19285642_grupoacon3";
$password = "(1RGEstudi0s)";
$dbname = "id19285642_anonimo"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['btnAdmin'])) {
    $Admin = $_POST["admin"];


    $sql = "SELECT passAD FROM PasswordAdmin";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if ($Admin == $row["passAD"]) {
            # code...
            echo $row["passAD"], "<br>";
        }else {
            $_SESSION['message'] = 'Password is not found.. !';
            $_SESSION['message_type'] = 'danger';
            header('Location: index.php');
        }
    }
    } else {
    echo "0 results";
    }

    mysqli_close($conn);
}





?>



<!-- ?>
  <script>
    window.location.replace("index.php");
    
  </script>
-->