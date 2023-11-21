<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost:3307", "root", "", "entrepreneur"); 
      $query = "SELECT * FROM members WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($conn, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Member Name</label></td>  
                     <td width="70%">'.$row["mname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email Id</label></td>  
                     <td width="70%">'.$row["email"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">'.$row["gender"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Mobile No.</label></td>  
                     <td width="70%">'.$row["mobile"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Ticket Type</label></td>  
                     <td width="70%">'.$row["ticket"].' </td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["address"].'</td>  
                </tr>  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>