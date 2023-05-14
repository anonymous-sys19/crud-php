

<?php include('includes/Modo_Admin_search.php'); ?>



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
        if ($Admin == $row["passAD"]) { ?>
            <div class="">
            <div class="row">
                <div class="col">
                <table id="example" class="display nowrap" style="width:100%">
                <!-- cellspacing="0" -->
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
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
                            <th>T-suma</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    
            <?php 
            // Select data from table table_employee
            $result_tasks = mysqli_query($conn, "SELECT * FROM pesosdbs");
            
            if(!$result_tasks){
                die(mysqli_error($conn));
            }
            
            // Check is result set le grater then 0
            if (mysqli_num_rows($result_tasks) > 0) {
                while($row = mysqli_fetch_assoc($result_tasks)){ ?> 
    
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row["nombre"] ?></td>
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
            
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                <i class="fas fa-marker">
    
                                </i>
                            </a>
                        </td>
                        <td>
    
                            <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                
                                <i class="far fa-trash-alt"></i>
    
                            </a>
                        </td>
                            
                        </tr>
    
                        
    
                <?php }};?>
                    </tbody>                
                </table>           
                </div>
            </div>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                
        <!--   Datatables-->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    
        <!-- searchPanes   -->
        <script src="https://cdn.datatables.net/searchpanes/1.0.1/js/dataTables.searchPanes.min.js"></script>
        <!-- select -->
        <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>  
        
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function () {
        $('#example').DataTable({
            scrollX: true,
        });
    });
    
    // 2
        // $(document).ready(function () {
        //     $('#example').DataTable();
        // });
    
            //  Primera parte
        // $(document).ready(function(){
        //     $('#example').DataTable({
        //             searchPanes:{
        //                 cascadePanes:true,
        //                 dtOpts:{
        //                     dom:'tp',
        //                     paging:'true',
        //                     pagingType:'simple',
        //                     searching:false
        //                 }
        //             },
        //             dom:'Pfrtip',
        //             columnDefs:[{
        //                 searchPanes:{
        //                     show:false
        //                 },
        //                 targets:[5]
        //             }
        //             ]
        //     });
    
        // });
        </script>
    
    </body>
    </html>
    
    
<?php    

        }else {    
            $_ADMIN['message'] = 'Password is not found.. !';
            $_ADMIN['message_type'] = 'danger';
            header('Location: /index.php');
        }
    }
    } else {
    echo "0 results";
    
    }

    mysqli_close($conn);
}
?>


