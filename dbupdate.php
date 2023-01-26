<?php
include './Database/inc_config.php';

$UserID = $_POST['UserID'];
$UserFirstName = $_POST['UserFirstName'];
$UserLastName = $_POST['UserLastName'];
$UserPassword = $_POST['UserPassword'];
$UserAddress = $_POST['UserAddress'];
$CityID = $_POST['CityID'];
$StateID = $_POST['StateID'];
$UserPhone= $_POST['UserPhone'];
$UserEmail = $_POST['UserEmail'];

$sql="UPDATE user SET UserFirstName='$_POST[UserFirstName]',UserLastName='$_POST[UserLastName]',UserEmail='$_POST[UserEmail]',
UserPassword='$_POST[UserPassword]',UserPhone='$_POST[UserPhone]',UserAddress='$_POST[UserAddress]',CityID='$_POST[CityID]',StateID='$_POST[StateID]'
WHERE UserID='$_POST[UserID]'";

$run = mysqli_query($conn, $sql) or die(mysqli_error());


if ($run)
	{
		
		echo 	'<div class="alert alert-success alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Congrats!</strong> Update Data Successfully.
				</div>';
		
	}
	
	else
	{
		
		echo "Data Not Updated!";
		
	}


    header("location: viewaccount_.php");  
	exit;


?>


