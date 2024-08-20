<?php
        // include('session.php');
        // include('config.php');
        // require_once('include/database/config.php');
        session_start();

            //redirect ot login page if not logged in
            // if(!isset($_SESSION['user'])){
            //     header('location:index.php');
            //     exit();
            // }

            //connection
        // $mysqli = new mysqli("localhost:3306", "root", "Keny@Mpy@254", "invent");
        // if($mysqli === false){
        //     die("ERROR: Could not connect. " . $mysqli->connect_error);
        //                             }
        //                             //get user details
        //         $sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
        //         $query = $mysqli->query($sql);
        //         $row = $query->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Studerts | Register</title>

    <!-- Custom fonts for this template-->
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
        <!-- End of Sidebar -->

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
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        
                </nav>
                <!-- End of Topbar -->
                <div class="card-header">                                      
                                            <!-- <a href="javascript:void(0);" style="width:45%; margin:0px 0px 0px 0px;" class="btn btn-success a-btn-slide-text" onclick="openSingle(); ">
                                                 <span class="fa fas fa-th-list" aria-hidden="true"></span>
                                                 <span>Register Student</span>
                                            </a> -->
                                            <a href="allstudents.php" style="width:100%; margin:0px 0px 0px 0px;" class="btn btn-success a-btn-slide-text" onclick="openMulti() ">
                                                 <span class="fa fas fa-th" aria-hidden="true"></span>
                                                 <span>View Students</span>
                                            </a>
             </div>
             <script>
                    function openSingle() { 
                        document.getElementById("singleItem").style.display="block"; 
                        document.getElementById("multiItem").style.display="none"; 
                    }

                    function openMulti() { 
                        document.getElementById("multiItem").style.display ="block"; 
                        document.getElementById("singleItem").style.display="none"; 
                        
                    }
                    </script>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="container" id="singleItem" style="display:block;">
                   

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

                   <div class="row justify-content-center">
                          <div class="col-lg-7">

                              <div class="card shadow-lg border-0 rounded-lg mt-5">
                                  <div class="card-header"><h3 class="text-center font-weight-light my-4"  style="color: #25d366">
                            
                                 Register Student</h3></div>
                                 
                              <div class="card-body">


                                  <form  action="studentconfig.php" method="post">
                                      <div class="form-group">
                                              <label class="small mb-1" for="inputFirstName">Full Name</label>
                                              <input class="form-control py-4" name="fullname" required="required" type="text" placeholder="Student Full Name" />
                                       </div>

                                       <div class="form-group">
                                              <label class="small mb-1" for="inputEmailAddress">ID Number</label>
                                              <input class="form-control py-4" name="idnumber" type="text"required="required" aria-describedby="" placeholder="ID No." />
                                          </div>

                                          <div class="form-group">
                                              <label class="small mb-1" for="inputEmailAddress">Class</label>
                                              <input class="form-control py-4" name="class" type="text"required="required" aria-describedby="" placeholder="Form 1." />
                                          </div>
                                           <div class="form-group">
                                              <label class="small mb-1" for="inputFirstName">Parent Name</label>
                                              <input class="form-control py-4" name="parentname" required="required" type="text" placeholder="Parent Name" />
                                       </div>


                                          <!-- <div class="form-row"> -->
                                          
                                          <!-- <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="small mb-1" for="role">Teacher:</label>
                                              <select type="text" name="ItemType" class="form-control">
                                                              <option value="" selected disabled hidden>Choose Type</option>
                                                                <?php
                                                                    // $sql2= mysqli_query($mysqli,"SELECT name FROM item_type");
                                                                    // while ($row= mysqli_fetch_array($sql2)){
                                                                    //     echo "<option value='". $row['name'] ."'>" .$row['name']. "</option>";
                                                                    // }
                                                                ?>
                                                </select>                                             
                                           </div>
                                          </div> -->
                                         

                                          <div class="form-group mt-4 mb-0"><input onclick="input_confirm()" type="submit" name="itemregister" class="btn btn-primary btn-block" value="Register"></div>
                                                 
                                          <script type="text/javascript">

                                                  function input_confirm(){

                                                  confirm("Do you want to add Item?");
                                                  }
                                            </script>
                                      </form>                                          
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>

                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <?php include('footer.php'); ?>
                </div>
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
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>