<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost:3306", "root", "", "students");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
// Escape user inputs for security
$fullname = $mysqli->real_escape_string($_REQUEST['fullname']);
$idnumber= $mysqli->real_escape_string($_REQUEST['idnumber']);
$class = $mysqli->real_escape_string($_REQUEST['class']);
$parentname = $mysqli->real_escape_string($_REQUEST['parentname']);
$regdate= date("y.m.d");


// Attempt insert query execution
$sql = "INSERT INTO students (Fullname,IdNumber,Class,ParentName,RegisrationDate) 
VALUES ('$fullname','$idnumber','$class','$parentname','$regdate')";
if($mysqli->query($sql) === true){
    
   $_SESSION['success'] = 'Records inserted successfully';
} else{
    $_SESSION['error'] = "ERROR: Could not  execute $sql. " . $mysqli->error;
}
 header("location:index.php");
// Close connection
$mysqli->close();

?>