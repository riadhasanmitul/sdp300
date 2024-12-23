<?php
session_start();
include 'connection.php';

if(isset($_REQUEST['login_btn'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    
    $select_query = mysqli_query($conn, "SELECT id, user_name FROM tbl_users WHERE emailid='$email' AND password='$pwd'");
    $rows = mysqli_num_rows($select_query);

    if($rows > 0) {
        $user = mysqli_fetch_assoc($select_query);
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['user_name'];
            header("Location: dashboard.php");
    } else {
        echo "<script>alert('You have entered wrong emailid or password.');</script>";
    }
}

// Check if the user is already logged in
if(isset($_SESSION['id'])) {
    // If logged in, redirect to the dashboard
    header("Location: dashboard.php");
    exit();
}

// Handle login form processing here...
?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>GAD-7 ADMIN LOGIN</title>
  <link href="style/login.css" rel="stylesheet">
</head>
<body style="background-image: url('https://img.freepik.com/free-photo/top-view-sad-face-with-paper-blue-monday_23-2148756165.jpg?t=st=1733636144~exp=1733639744~hmac=c9933d3c03e8d4e7137b2a6b0e81ec82e37926beceef6349422f45ccab52102c&w=740') !important; background-size: cover;
    background-position: center; " class=" main-bg">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
    <div class="container">
    <div style="margin-top: 200px !important;" class="card card-login mx-auto mt-5">
      <div class="card-header">
       <h2><center>GAD-7 ADMIN LOGIN</center></h2>
      </div>
      <div class="card-body">
        <form name="login"  method="post" action="">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pwd" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <input type="submit" class="btn btn-success btn-block" name="login_btn" value="Login">
        </form>
      <a href="index.php">Back to Home</a>
      </div>
    </div>
  </div>
    </div>
</body>
</html>
