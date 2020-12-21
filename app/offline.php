<?php
session_start();
include('./components/header.php');
$_SESSION['message'] = '';
$conn = new mysqli('localhost', 'nigeabvg_tnq', 'Webify2020!!', 'nigeabvg_tnq');

if (isset($_POST['register_btn'])) {

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
    $proof_path     = $conn->real_escape_string('upload/'.$_FILES['proof']['name']);

    if (file_exists($picture_path)) 
	{
    $picture_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['picture']['name']);
    }
    
    if (file_exists($proof_path)) 
	{
    $proof_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['proof']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['picture']['type'])) {
        $checker ++;
    }
    if (preg_match("!image!", $_FILES['proof']['type'])) {
        $checker ++;
    }
    if ($checker < 2){
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
                copy($_FILES['proof']['tmp_name'], $proof_path);

                $sql = "INSERT INTO users (fname, lname, email, phone, state, age, city, ighandle, address, picture, proof, regno)"
                    . "VALUES ('$fname', '$lname', '$email', '$phone', '$state', '$age', '$city', '$ighandle', '$address', '$picture_path', '$proof_path', '$regno')";
                    if($query){

                        //Send Verification Mail
                        $to = $email;
                        $subject = "Registration Successful";

                        $message = "
                        <?php include ('./components/email.php'); ?>
                        ";

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
}
?>

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-5 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <a class="navbar-brand pb-5" href="\">
              <img src="https://i.imgur.com/XSGaWUp.png" style="width: 300px;">
            </a>
              <h1 class="text-white">REGISTRATION</h1>
              <p class="text-lead text-white pb-5">Please kindly fill in your details correctly in the form below.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" autocomplete="on">
              <div class="text-muted text-right mt-2 mb-2"><small><strong>REGISTRATION FEE ₦10,000</strong></small></div>
              <div class="alert-danger text-center mb-3" role="alert" id="message"><?= $_SESSION['message'] ?></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control" placeholder="First Name" pattern="[a-zA-Z]+" required type="text" name="fname">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Last Name" pattern="[a-zA-Z]+" required type="text" name="lname">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required type="email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                    <input class="form-control" pattern="[0-9]+" minlength="11" required placeholder="Phone Number" type="tel" name="phone">
                  </div>
                </div>
                <div class="text-muted text-left"><small class="">Upload proof of payment</small></div>
                <div class="custom-file mb-4">
                    <input type="file" class="custom-file-input" name="proof" required lang="en">
                    <label class="custom-file-label" for="customFileLang">Select file</label>
                </div>
                <!--<div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id="txtPassword" placeholder="Password"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required type="password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id="txtConfirmPassword" required placeholder="Confirm Password" type="password" name="confirm_password">
                  </div>
                </div>
                <hr>-->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Instagram Handle" aria-label="ighandle" aria-describedby="basic-addon1" name="ighandle">
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                    </div>
                    <input class="form-control" placeholder="Residential Address" required type="text" name="address">
                  </div>
                </div>
                <div class="form-group">
                  <select class="form-control" name="age" required="">
                    <option selected>Age</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" required name="state">
                    <option data-display="State Of Origin">State Of Origin</option>
                    <option value="Abia">Abia</option>
                    <option value="Adamawa">Adamawa</option>
                    <option value="Akwa Ibom">Akwa Ibom</option>
                    <option value="Anambra">Anambra</option>
                    <option value="Bauchi">Bauchi</option>
                    <option value="Bayelsa">Bayelsa</option>
                    <option value="Benue">Benue</option>
                    <option value="Borno">Borno</option>
                    <option value="Cross River">Cross River</option>
                    <option value="Delta">Delta</option>
                    <option value="Ebonyi">Ebonyi</option>
                    <option value="Edo">Edo</option>
                    <option value="Ekiti">Ekiti</option>
                    <option value="Enugu">Enugu</option>
                    <option value="Abuja">FCT - Abuja</option>
                    <option value="Gombe">Gombe</option>
                    <option value="Imo">Imo</option>
                    <option value="Jigawa">Jigawa</option>
                    <option value="Kaduna">Kaduna</option>
                    <option value="Kano">Kano</option>
                    <option value="Katsina">Katsina</option>
                    <option value="Kebbi">Kebbi</option>
                    <option value="Kogi">Kogi</option>
                    <option value="Kwara">Kwara</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Nasarawa">Nasarawa</option>
                    <option value="Niger">Niger</option>
                    <option value="Ogun">Ogun</option>
                    <option value="Ondo">Ondo</option>
                    <option value="Osun">Osun</option>
                    <option value="Oyo">Oyo</option>
                    <option value="Plateau">Plateau</option>
                    <option value="Rivers">Rivers</option>
                    <option value="Sokoto">Sokoto</option>
                    <option value="Taraba">Taraba</option>
                    <option value="Yobe">Yobe</option>
                    <option value="Zamfara">Zamfara</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" required name="city">
                    <option data-display="Preferred Audition City">Preferred Audition City</option>
                    <option value="Abuja">Abuja</option>
                    <option value="Adamawa">Adamawa</option>
                    <option value="Anambra">Akwa Ibom</option>
                    <option value="Anambra">Anambra</option>
                    <option value="Benin">Benin</option>
                    <option value="Calabar">Calabar</option>
                    <option value="Enugu">Enugu</option>
                    <option value="Ibadan">Ibadan</option>
                    <option value="Ilorin">Ilorin</option>
                    <option value="Jos">Jos</option>
                    <option value="Kaduna">Kaduna</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Owerri">Owerri</option>
                  </select>                  
                </div>
                <div class="text-muted text-left"><small class="">Upload photograph</small></div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="picture" required lang="en">
                    <label class="custom-file-label" for="customFileLang">Select file</label>
                </div>
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" required id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">I agree with the <a href="../terms" style="color: #259dab;">Terms & Conditions</a></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button class="btn btn-primary mt-4" type="submit" name="register_btn">Submit Application</button>
                </div>
              </form>
            </hr>
          </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
              <a href="..\" class="text-default-color"><strong>GO BACK TO HOME</strong></a>
            </div>
        </div>
      </div>
    </div>
  </div>

<?php include('./components/footer.php');?>