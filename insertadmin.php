
  <?php  
if(!empty($_POST))  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost:3307", "root", "", "entrepreneur"); 
      $message = '';  
      $mname = mysqli_real_escape_string($conn, $_POST["mname"]);  
      $email = mysqli_real_escape_string($conn, $_POST["email"]);  
      $gender = mysqli_real_escape_string($conn, $_POST["gender"]);  
      $mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);  
      $ticket = mysqli_real_escape_string($conn, $_POST["ticket"]);  
      $address = mysqli_real_escape_string($conn, $_POST["address"]);  
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE members   
           SET mname='$mname',   
            email='$email',   
           gender='$gender',   
            mobile='$mobile',   
            ticket='$ticket',   
            address='$address'   
           WHERE id='".$_POST["employee_id"]."'";  
           $message = 'Data Updated';  
           
      }  
      else  
      {  
           $query = "  
           INSERT INTO members(mname, email, gender, mobile, ticket,address)  
           VALUES('$mname', '$email', '$gender', '$mobile', '$ticket','$address');  
           ";  
           $message = 'Data Inserted';  

      }  
     //  else  if
     //  {  
     //       $query = "  
     //       delete from members where id=$id";

     //       $message = 'Data Deleted';  
     //  }  
      if(mysqli_query($conn, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM members ORDER BY id DESC";  
           $result = mysqli_query($conn, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Members Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                          <th width="15%">Delete</th>  
                     </tr>  
           ';  
          
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["mname"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-primary btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-success btn-xs view_data" /></td>  
                          <td><input type="button" name="delete" value="Delete" id="' . $row["id"] . '" class="btn btn-danger btn-xs delete_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  

 }  
 ?>
 