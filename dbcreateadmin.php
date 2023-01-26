<?php
include_once './Database/inc_config.php';

$UserID = $_POST['UserID'];
$UserFirstName = $_POST['UserFirstName'];
$UserLastName = $_POST['UserLastName'];
$UserPassword = $_POST['UserPassword'];
$AdminPosition = $_POST['AdminPosition'];
$UserAddress = $_POST['UserAddress'];
$CityID = $_POST['CityID'];
$StateID = $_POST['StateID'];
$UserPhone= $_POST['UserPhone'];
$UserEmail = $_POST['UserEmail'];

$sql= "INSERT INTO user(UserID, UserFirstName, UserLastName, UserEmail, UserPassword, UserPhone, UserAddress, CityID, StateID) 
        VALUES ('$UserID', '$UserFirstName', '$UserLastName', '$UserEmail', '$UserPassword', '$UserPhone','$UserAddress', '$CityID', '$StateID' )";
$query=mysqli_query($conn, $sql);

if($query){
    $sql2= "INSERT INTO administrator(UserID, AdminPosition) 
            VALUES ('$UserID', '$AdminPosition')";
    $result=mysqli_query($conn, $sql2);
}header("location: viewaccount_.php");  

