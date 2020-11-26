<?php
include('./controllers/dbconnect.php');

// LOGIN USER
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_fetch_assoc($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = header("Location: dashboard");
      exit();
  	}else {
  		$errors = header("Location: ?error=loginnotsuccess");
      exit();
  	}
  }
}


// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $pnumber = mysqli_real_escape_string($db, $_POST['pnumber']);
  $ighandle = mysqli_real_escape_string($db, $_POST['ighandle']);
  $haddress = mysqli_real_escape_string($db, $_POST['haddress']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $sorigin = mysqli_real_escape_string($db, $_POST['sorigin']);
  $acity = mysqli_real_escape_string($db, $_POST['acity']);
  $regpic = mysqli_real_escape_string($db, $_POST['regpic']);


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['email'] === $email) {
      $errors = header("Location: ?error=regnotsuccess");
      exit();
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (email, password, first_name, last_name, phone_number, instagram_handle, address, date_of_birth, state_of_origin, audition_city, picture) 
  			  VALUES('$email', '$password', '$fname', '$lname', '$pnumber', '$ighandle', '$haddress', '$dob', '$sorigin', '$acity', '$regpic')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = header("Location: ?success=regsuccess");
    exit();
  }
}


//RETRIEVE FILES FROM DATABASE
if(isset($_SESSION['email'])) {

// receive all input values from the form
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$fname = mysqli_real_escape_string($db, $_POST['fname']);
$lname = mysqli_real_escape_string($db, $_POST['lname']);
$pnumber = mysqli_real_escape_string($db, $_POST['pnumber']);
$ighandle = mysqli_real_escape_string($db, $_POST['ighandle']);
$haddress = mysqli_real_escape_string($db, $_POST['haddress']);
$dob = mysqli_real_escape_string($db, $_POST['dob']);
$sorigin = mysqli_real_escape_string($db, $_POST['sorigin']);
$acity = mysqli_real_escape_string($db, $_POST['acity']);
$regpic = mysqli_real_escape_string($db, $_POST['regpic']);


// first check the database to make sure 
// a user does not already exist with the same username and/or email
$user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

}


?>