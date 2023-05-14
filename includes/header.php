<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Pesos Grupo Acon</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
    <link rel="stylesheet" href="css/style.css">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <!--  -->



  <!--  Datatables  -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
  
  <!-- searchPanes -->
  <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.0.1/css/searchPanes.dataTables.min.css">
  <!-- select -->
  <link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">


  <!-- animated.css -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  
</head>

  <body>

  
 


    <nav class="navbar navbar-dark bg-dark">
      
        <div class="container">

          <a class="navbar-brand animate__animated animate__slideInLeft" href="index.php"><tit class="tit">Grupo Acon PTR</tit> <b class="titP">[Pesos]</b></a>

          <form action="" calss="form-inline mg-5 formSearch" method="POST">

            <div class="item form-group mb-2">
              
              <label class="searchLabel" for="Nombre">Mostreador || Ciclo</label> <br>
              <input type="text" id="ng" name="nombre" class="form-control-plaintext nombre" placeholder="Solo Fecha Hoy(date)" required><br>
            </div>
              <input type="submit" class="btn btn-primary mb-2 btnMostreador" id="btn" name="search" value="Search">

           
          </form>

         
        </div>


        <div class="container row" >
          <a class="login_admin btn-primary btn-sm" href="<?php 
          $_ADMIN['message'] = '
          <div class="container" style="width: margin: 20% auto;">
          <strong style="text-align: center; margin: auto;">Enter Password Admin Pleace.
          <form action="search.php" method="POST">
            <input name="admin" style="margin: auto;" type="text" class="form-control" data-bs-dismiss="alert" aria-label="Close" placeholder="Enter Password Admin"/>
            <input type="submit" style="margin: 1rem auto;" class="btn btn-outline-success container" value="Login" name="btnAdmin">
          </form>
          </div>
          ';
          
          $_ADMIN['message_type'] = 'success';
          ?>" >admin</a>

        </div>
  
    </nav>




    
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








