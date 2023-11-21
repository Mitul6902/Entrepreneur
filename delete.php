<?php
include 'dbconnection.php';
$id = $_GET['id'];

$deletequery = "delete from members where id=$id";
$query = mysqli_query($conn,$deletequery);

if($query){
    ?>
    <script>
        alert("Deleted Successfully");
    </script>
    <?php
    header('location:dashboard.php');
}
else{
?>
<script>
      alert("Not Deleted");
</script>
<?php

}
?>