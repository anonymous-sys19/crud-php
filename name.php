<?php include("db.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <!--  Datatables  -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>   -->
    
    <!-- searchPanes -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.0.1/css/searchPanes.dataTables.min.css"> -->
    <!-- select -->
    <!-- <link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css"> -->



    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">


</head>
<body>


<?php $dateHoy = date("Y-m-d"); 
    
    if (isset($_POST["search"])) {
        $name_Mostreador = $_POST['nombre'];

    
    
    };
    
    

?>


<div class="cont">
        <div class="row">
            <div class="col">
            <table id="example" class="display table table-bordered  display nowrap" style="width:100%">
            <!-- class="table table-bordered  display nowrap" cellspacing="0" width="100%" -->
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Finca</th>
                        <th>Lote</th>
                        <th>BLock</th>
                        <th>Ciclo</th>
                        <th>Rango-1</th>
                        <th>Rango0</th>
                        <th>Rango1</th>
                        <th>Rango2</th>
                        <th>Rango3</th>
                        <th>Rango4</th>
                        <th>Rango5</th>
                        <th>Rango6</th>
                        <th>Rango7</th>
                        <th>T-Suma</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
          

      <?php
        

        $result_tasks = @mysqli_query($conn, "SELECT * FROM pesosdbs WHERE nombre = '$name_Mostreador' AND date = '$dateHoy' AND finca = finca AND lote = lote AND block = block  AND ciclo = ciclo AND rangoM1 = rangoM1 AND rango0 = rango0 AND rango1 = rango1 AND rango2 = rango2 AND rango3 = rango3 AND rango4 = rango4 AND rango5 = rango5 AND rango6 = rango6 AND rango7 = rango7 AND Tsuma = Tsuma");
        
        if(!$result_tasks){
            die(mysqli_error($conn));
        }
        
        // Check is result set le grater then 0
        if (mysqli_num_rows($result_tasks) > 0) {


            while($row = mysqli_fetch_assoc($result_tasks)){ 
        
                //if ($dateHoy == $row["date"]) {
                    
               ?>
                    

                        <tr>
                                <td><?php echo $row["date"] ?></td>
                                <td><?php echo $row["finca"] ?></td>
                                <td><?php echo $row["lote"] ?></td>
                                <td><?php echo $row["block"] ?></td>
                                <td><?php echo $row["ciclo"] ?></td>
                                <td><?php echo $row["rangoM1"] ?></td>
                            
                                <td><?php echo $row["rango0"] ?></td>
                                <td><?php echo $row["rango1"] ?></td>
                                <td><?php echo $row["rango2"] ?></td>
                                <td><?php echo $row["rango3"] ?></td>
                                <td><?php echo $row["rango4"] ?></td>
                                <td><?php echo $row["rango5"] ?></td>
                                <td><?php echo $row["rango6"] ?></td>
                                <td><?php echo $row["rango7"] ?></td>
                                <td><?php echo $row["Tsuma"] ?></td>
                                <td>
                
                                <a href="edit.php?id=<?php echo $row["id"];?>;" class="btn btn-secondary">
                                    <i class="fas fa-marker">

                                    </i>
                                </a>
                            </td>
                            <td>

                                <a href="delete_task.php?id=<?php echo $row['id'];?>" class="btn btn-danger">
                                    
                                    <i class="far fa-trash-alt"></i>

                                </a>
                            </td>
                                
                            </tr>

                    

            <?php }} ?>
                </tbody>
             
            </table>           
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


    <script>

      // $(document).ready(function () {
      //     $('#example').DataTable();
      // });
      $(document).ready(function () {
        $('#example').DataTable({
            scrollX: true,
    });
    });


    </script>