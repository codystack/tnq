<?php
$_SESSION['message'] = '';
$_SESSION['error_message'] = '';

include ('db.php');


//Login Admin Start
if (isset($_POST['login_btn'])) {

  $error = array();

  $username       = $conn->real_escape_string($_POST['username']);
  $password       = $conn->real_escape_string($_POST['password']);
  $email          = $conn->real_escape_string($_POST['email']);

  if (count($error) == 0) {
      $password = sha1($password);
      $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
      $results = mysqli_query($conn, $query);
      while($row = mysqli_fetch_array($results)) {
          $fullname = $row['fullname'];
          $email    = $row['email'];
      }
      if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['fullname'] = $fullname;
      header('location: dashboard');
      }else {
          $_SESSION['error_message'] = "Incorrect login details!";
      }
  }
}
//Login Admin End