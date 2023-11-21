<?php  
 //fetch.php  
$conn = mysqli_connect("localhost:3307", "root", "", "entrepreneur"); 
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM members WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>