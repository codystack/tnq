<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $acodeErr = $passwordErr = $pnumberErr = $ighandleErr = $addressErr = $dobErr = $soriginErr = $acityErr = $regpicErr = "";
$fname = $lname = $email = $acode = $password = $pnumber = $ighandle = $address = $dob = $sorigin = $acity = $regpic = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Like seriously! you don't have a name?";
  } else {
    $fname = test_input($_POST["fname"]);
    $fname = test_input($_POST["fname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["lname"])) {
    $lnameErr = "Please what's your fathers name?";
  } else {
    $lname = test_input($_POST["lname"]);
    $lname = test_input($_POST["lname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "You have an email don't you?";
  } else {
    $email = test_input($_POST["email"]);
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["acode"])) {
    $acodeErr = "Please input activation code!";
  } else {
    $acode = test_input($_POST["acode"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Input a password to get your account secured!";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["pnumber"])) {
    $pnumberErr = "Give us your phone number please.";
  } else {
    $pnumber = test_input($_POST["pnumber"]);
  }

  if (empty($_POST["ighandle"])) {
    $ighandleErr = "Don't tell me you're anti-social";
  } else {
    $ighandle = test_input($_POST["ighandle"]);
  }

  if (empty($_POST["haddress"])) {
    $haddressErr = "Are you from MARS?";
  } else {
    $haddress = test_input($_POST["haddress"]);
  }

  if (empty($_POST["dob"])) {
    $dobErr = "You look sweet.. How old are you?";
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if (empty($_POST["sorigin"])) {
    $soriginErr = "What's your state of origin?";
  } else {
    $sorigin = test_input($_POST["sorigin"]);
  }

  if (empty($_POST["acity"])) {
    $acityErr = "Which city do you preffer for your audition?";
  } else {
    $acity = test_input($_POST["acity"]);
  }

  if (empty($_POST["regpic"])) {
    $regpicErr = "Upload a picture of you.";
  } else {
    $regpic = test_input($_POST["regpic"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>