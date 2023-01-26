<?php
include_once './Database/inc_config.php';



        $UserID = $_POST['UserID'];
        $UserFirstName = $_POST['UserFirstName'];
        $UserLastName = $_POST['UserLastName'];
        $UserPassword = $_POST['UserPassword'];
        $UserAddress = $_POST['UserAddress'];
        $CityID = $_POST['CityID'];
        $StateID = $_POST['StateID'];
        $UserPhone= $_POST['UserPhone'];
        $UserEmail = $_POST['UserEmail'];

        $sql= "INSERT INTO user(UserID, UserFirstName, UserLastName, UserEmail, UserPassword, UserPhone, UserAddress, CityID, StateID) 
        VALUES ('$UserID', '$UserFirstName', '$UserLastName', '$UserEmail', '$UserPassword', '$UserPhone','$UserAddress', '$CityID', '$StateID' )";
        $result=mysqli_query($conn, $sql);
        header("location: viewaccount_.php");  

       






