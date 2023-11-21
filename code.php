<?php

require 'dbconnection.php';

if(isset($_POST['submit']) )
{
    $mname =  $_POST["mname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $mobile =$_POST["mobile"];
    $ticket =$_POST["ticket"];
    $address =$_POST["address"];

    $query = "INSERT INTO members (mname,email,gender,mobile,ticket,address) VALUES
    ('$mname','$email','$gender','$mobile','$ticket','$address')";

    $result = mysqli_query($conn,$query);
	header("Location: index.php");
   
}

?>