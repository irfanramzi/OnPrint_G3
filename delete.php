<?php
include_once './Database/inc_config.php';

$run=mysqli_query($conn,"DELETE FROM user WHERE UserID = '".$_GET['del_comm']."'"); 

if($run){
    mysqli_query($conn,"DELETE FROM administrator WHERE UserID = '".$_GET['del_comm']."'");
    header("location: viewaccount_.php");  
}
if($run){
    mysqli_query($conn,"DELETE FROM rider WHERE UserID = '".$_GET['del_comm']."'");
    header("location: viewaccount_.php");  
}header("location: viewaccount_.php"); 



