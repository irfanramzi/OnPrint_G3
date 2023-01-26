<?php
// Start session
session_start();

// Connection information for the database
include './Database/inc_config.php';

// Include header and footer files
include 'logo_.php';

// Check if form has been submitted

if (isset($_POST['login'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $userType = mysqli_real_escape_string($conn, $_POST['userType']);

    if ($userType === 'user') {
        $query = "SELECT * FROM User WHERE UserID='$id' AND UserPassword='$password'";
    } elseif ($userType === 'administrator') {
        $query = "SELECT user.*, administrator.* FROM user
        JOIN administrator ON administrator.UserID = user.UserID
        WHERE user.UserID='$id' AND user.UserPassword='$password' ";
    } elseif ($userType === 'rider') {
        $query = "SELECT user.*, rider.* FROM user
        JOIN rider ON rider.UserID = user.UserID
        WHERE user.UserID='$id' AND user.UserPassword='$password' ";
    }

    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if ($count === 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['UserID'];
        $_SESSION['type'] = $userType;

        if ($userType === 'user') {
            header('Location: mainuser.php');
        } elseif ($userType === 'administrator') {
            header('Location: mainadmin.php');
        } elseif ($userType === 'rider') {
            header('Location: mainrider.php');
        }
    } else {
        echo 'Invalid ID or password';
    }
}
?>

<center>
<br><br>

<input onclick="document.getElementById('userType').value='user';" class="btn btn-success" type="button" value="User">
<input onclick="document.getElementById('userType').value='administrator';" class="btn btn-success" type="button" value="Administrator">
<input onclick="document.getElementById('userType').value='rider';" class="btn btn-success" type="button" value="Rider">

<br><br>

<!-- Login form -->
<form id="loginForm" method="post">
  <div class="col-sm-5">
      <input type="text" class="form-control" name="id" id="id" placeholder= "Enter ID">
  </div>

  <br>

  <div class="col-sm-5">
      <input type="password" class="form-control" name="password" id="password" placeholder= "Enter Password">
  </div>

  <input type="hidden" id="userType" name="userType" value="">

  <br>

  <input type="submit" name="login" class="btn btn-success" value="Login">
</form>

<br><br>
</center>

<!-- Footer -->
<?php include 'footer.php';?>