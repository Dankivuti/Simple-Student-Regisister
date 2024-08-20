<?php
        // include('session.php');
        // include('config.php');
        // require_once('include/database/config.php');
        session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>InvenTra</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
</ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                        <h2 class="mt-6">Students</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Students</li>
                        </ol>

                        <div class="card mb-4">
                        
                        </div>
                        <?php
                                            if(isset($_SESSION['error'])){
                                                ?>
                                                <div class="alert alert-danger text-center" style="margin-top:20px;">
                                                    <?php echo $_SESSION['error']; ?>
                                                </div>
                                                <?php

                                                unset($_SESSION['error']);
                                            }
                                            if(isset($_SESSION['success'])){
                                                ?>
                                                <div class="alert alert-success text-center" style="margin-top:20px;">
                                                    <?php echo $_SESSION['success']; ?>
                                                </div>
                                                <?php

                                                unset($_SESSION['success']);
                                            }
                                        ?> 
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                               All Students
                                            <a href="index.php" class="btn btn-primary a-btn-slide-text" onClick="goToUrl()" style="background-color: #25d366">
                                                <span class="fa fas fa-folder-plus" aria-hidden="true"></span>
                                                 <span>Register New</span>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-light a-btn-slide-text" onclick="exportData(); "style="width:20%; padding:0px; margin-left:5px;">
                                                 <span class="fa fas fa-file-download" aria-hidden="true"></span>
                                                 <span class="mr-2 d-none d-lg-inline text-white-600 small">Export(CSV)</span>
                                            </a>
                                       
                            <script type="text/javascript">
                                        function exportData(){
                                        /* Get the HTML data using Element by Id */
                                        var table = document.getElementById("dataTable");
                                    
                                        /* Declaring array variable */
                                        var rows =[];
                                    
                                        //iterate through rows of table
                                        for(var i=0,row; row = table.rows[i];i++){
                                            //rows would be accessed using the "row" variable assigned in the for loop
                                            //Get each cell value/column from the row
                                            column1 = row.cells[0].innerText;
                                            column2 = row.cells[1].innerText;
                                            column3 = row.cells[2].innerText;
                                            column4 = row.cells[3].innerText;
                                            column4 = row.cells[4].innerText;
                                    
                                        /* add a new records in the array */
                                            rows.push(
                                                [
                                                    column1,
                                                    column2,
                                                    column3,
                                                    column4,
                                                    column5
                                                ]
                                            );
                                    
                                            }
                                            csvContent = "data:text/csv;charset=utf-8,";
                                            /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
                                            rows.forEach(function(rowArray){
                                                row = rowArray.join(",");
                                                csvContent += row + "\r\n";
                                            });
                                    
                                            /* create a hidden <a> DOM node and set its download attribute */
                                            var encodedUri = encodeURI(csvContent);
                                            var link = document.createElement("a");
                                            link.setAttribute("href", encodedUri);
                                            link.setAttribute("download", "All Assets Surmary.csv");
                                            document.body.appendChild(link);
                                            /* download the data file named "All Assets Surmary.csv" */
                                            link.click();
                                    }
                                    </script>
                            </div>
                            <div class="card-body">
                            

                                <div class="table-responsive" style="font-size: 2px;"  >
                                <form action="" method="post">
                                <div class="breadcrumb mb-4">

                               
                                  <input type="text" name="valueToSearch" class="form-control" style="width:30%; float:right;" placeholder="Value To Search">
                                  <button type="submit" name="search"  class="btn btn-primary a-btn-slide-text" style=" margin-left:5px; float:right;" ><i class="fa fa-search"></i></button>
                                
                                     
                                </div>
                               

                    
                                    <?php  
                                                $conn = mysqli_connect("localhost:3306", "root", "","students");
                                                
                                                if(! $conn ) {
                                                    die('Could not connect: ' . mysql_error());
                                                }   
                                            //     if(isset($_POST['search']))
                                            //     {
                                            //     $valueToSearch = $_POST['valueToSearch'];
                                            //    // search in all table columns
                                            //   // using concat mysql function
                                            //    $query = "SELECT * FROM allitems WHERE CONCAT(ItemId, Serial, ItemName)      LIKE '%".$valueToSearch."%'";
                                            //     $search_result = filterTable($query);
                                            
                                            //     }
                                            //      else {
                                            //        $query = "SELECT * FROM allitems";
                                            //       $search_result = filterTable($query);
                                            //     }
                                            
                                                // function to connect and execute the query
                                                // function filterTable($query)
                                                // {
                                                //     $connect = mysqli_connect("localhost", "root", "Keny@Mpy@254", "invent");
                                                //     $filter_Result = mysqli_query($connect, $query);
                                                //     return $filter_Result;
                                                // }
                                                    $sql = mysqli_query($conn,"SELECT Fullname,IdNumber,Class,ParentName,RegisrationDate FROM students ORDER BY RegisrationDate ASC ");

                                                    echo "<table class='table'  style='font-size:14px;' id='dataTable' width='100%' cellspacing='0' data-page-length='20'> 
                                                 
                                                        <th>FullName</th>
                                                        <th>IdNumber</th>  
                                                        <th>Class</th>
                                                        <th>Parent Name</th>
                                                        <th>Registration Date</th>
                                                        </tr> ";
                                                    
                                                    
                                                    
                                                    while($row = mysqli_fetch_array($sql)) 
                                                    {
                                                        echo  "<tr class='clickable-row' data-href='500.html/'>";
                                                        
                                                        echo "<td>" . $row['Fullname']."</td>";
                                                        echo "<td>" . $row['IdNumber']."</td>";
                                                        echo "<td>" . $row['Class']."</td>";
                                                        echo "<td>" . $row['ParentName']."</td>"; 
                                                        echo "<td>" . $row['RegisrationDate']."</td>";                                                    
                                                        ?>
                                                        <td>
                                                                <!-- <a href="viewitem.php?id=<?php echo $row['ItemId']?>" class="btn btn-primary a-btn-slide-text" onClick="goToUrl()">
                                                                    <span class="fas fa-fw fa-external-link-alt" aria-hidden="true"></span>
                                                                    <span>view</span>
                                                                </a> -->
                                                        </td>
                                                        <?php

                                                        echo "</tr>";

                                                    }
                                                    
                                                    echo "</table>";

                                                    // jQuery(document).ready(function($) {
                                                    //     $(".clickable-row").click(function() {
                                                    //         window.location = $(this).data("href");
                                                    //     });
                                                    // });
                                                    
                                                    mysqli_close($conn);
                                    ?>
                        
                                </div>
                            </div>
                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
              <?php include('footer.php'); ?>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>