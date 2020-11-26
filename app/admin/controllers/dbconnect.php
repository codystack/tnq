<?php
session_start();

//NEW REGISTRATION
if (isset($_POST['register'])) {
 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $acode = $_POST['acode'];
    $password = $_POST['password'];
    $ighandle = $_POST['ighandle'];
    $haddress = $_POST['haddress'];
    $dob = $_POST['dob'];
    $sorigin = $_POST['sorigin'];
    $acity = $_POST['acity'];
    $regpic = $_POST['regpic'];
    $pnumber = $_POST['pnumber'];
    $errors = [];
 

    // Create connection
    $servername = "localhost";
    $username = "webify";
    $password = "Webify2020!!";
    $dbname = "pageantry_app";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE EmailAddress='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0 ) {
        echo $errors['email'] = "This email already exist";
    }else {
        //User Registration
    $query = "INSERT INTO `users`(`FirstName`, `LastName`, `PhoneNumber`, `InstagramHandle`, `Address`, `DateOfBirth`, `StateOfOrigin`, `AuditionCity`, `Image`, `Password`, `EmailAddress`)
    VALUES ('$fname', '$lname', '$pnumber', '$ighandle', '$haddress', '$dob', '$sorigin', '$acity', '$regpic', '$password', '$email')";

    $result = mysqli_query ($conn, $query);
    echo "<script></script>";
    exit();

    }  
    // Check connection
    if (!$result) {
        die("Connection failed: " . mysqli_connect_error());
        }

}
 
?>