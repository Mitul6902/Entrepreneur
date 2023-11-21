<!-- <?php
// Create connection
$con=mysqli_connect("localhost:3307","root","","entrepreneur") or die("connection failed")
?> -->

 <?php 

$server = "localhost:3307";
$use = "root";
$pass = "";
$database = "entrepreneur";

$conn = mysqli_connect($server, $use, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?> 
