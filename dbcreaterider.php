<?php
include_once './Database/inc_config.php';

$UserID = $_POST['UserID'];
$UserFirstName = $_POST['UserFirstName'];
$UserLastName = $_POST['UserLastName'];
$UserPassword = $_POST['UserPassword'];
$RiderVehicle = $_POST['RiderVehicle'];
$RiderLicensePlate = $_POST['RiderLicensePlate'];
$UserAddress = $_POST['UserAddress'];
$CityID = $_POST['CityID'];
$StateID = $_POST['StateID'];
$UserPhone= $_POST['UserPhone'];
$UserEmail = $_POST['UserEmail'];

$sql= "INSERT INTO user(UserID, UserFirstName, UserLastName, UserEmail, UserPassword, UserPhone, UserAddress, CityID, StateID) 
        VALUES ('$UserID', '$UserFirstName', '$UserLastName', '$UserEmail', '$UserPassword', '$UserPhone','$UserAddress', '$CityID', '$StateID' )";
$query=mysqli_query($conn, $sql);

if($query){
    $sql2= "INSERT INTO rider(UserID, RiderVehicle, RiderLicensePlate) 
            VALUES ('$UserID', '$RiderVehicle', '$RiderLicensePlate')";
    $result=mysqli_query($conn, $sql2);

}header("location: viewaccount_.php");
