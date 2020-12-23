<?php
include ('../components/email.php');
$conn = new mysqli('localhost', 'nigeabvg_tnq', 'Webify2020!!', 'nigeabvg_tnq');


    $fname          = $conn->real_escape_string($_POST['fname']);
    $lname          = $conn->real_escape_string($_POST['lname']);
    $email          = $conn->real_escape_string($_POST['email']);
    $phone          = $conn->real_escape_string($_POST['phone']);
    $state          = $conn->real_escape_string($_POST['state']);
    $age            = $conn->real_escape_string($_POST['age']);
    $city           = $conn->real_escape_string($_POST['city']);
    $address        = $conn->real_escape_string($_POST['address']);
    $ighandle       = $conn->real_escape_string($_POST['ighandle']);
    $regno          = 'TNQ'.rand(1000, 9999);
    $picture_path   = $conn->real_escape_string('upload/'.$_FILES['picture']['name']);

    if (file_exists($picture_path)) 
	{
    $picture_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['picture']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['picture']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }

            $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
            $result = mysqli_query($conn, $user_check_query);
            $user = mysqli_fetch_assoc($result);
            if ($user) { // if user exists
                if ($user['email'] === $email) {
                $_SESSION['message'] = "User already exist!";
                }
            }else { 
                //copy image to upload folder
                copy($_FILES['picture']['tmp_name'], $picture_path);

                $sql = "INSERT INTO users (fname, lname, email, phone, state, age, city, ighandle, address, picture, regno, status)"
                    . "VALUES ('$fname', '$lname', '$email', '$phone', '$state', '$age', '$city', '$ighandle', '$address', '$picture_path', '$regno', 'false')";
                    if($query){

                        //Send Verification Mail
                        $to = $email;
                        $subject = "Registration Successful";


                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                        // More headers
                        $headers .= 'From: Stream Online™ <donotreply@nigerianqueen.org>' . "\r\n";

                        mail($to,$subject,$message,$headers);
                    }
                    mysqli_query($conn, $sql);
                    $_SESSION['email'] = $email;
                    header("Location: ../regsuccess");
                    exit();   
            }