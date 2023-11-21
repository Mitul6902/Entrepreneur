<?php
  include 'dbconnection.php';
  $mid = $_GET['mid'];
  if(isset($_POST['submit'])){
    
    $mname =  $_POST["mname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $mobile =$_POST["mobile"];
    $ticket =$_POST["ticket"];
    $address =$_POST["address"];

    $query = "update members set mname='$mname', email='$email', gender='$gender', mobile=' $mobile' , ticket='$ticket', address='$address' where mid='$mid' ";
    $result = mysqli_query($conn,$query);

    header("location: dashboard.php");
  }
  ?>



