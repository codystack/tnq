<?php
session_start();
$_SESSION['error_message'] = '';

include ('./app/config/db.php');


//Verify user Start
if (isset($_POST['verifyme_btn'])) {

  $error = array();

  $fname       = $conn->real_escape_string($_POST['fname']);
  $email       = $conn->real_escape_string($_POST['email']);

      $query = "SELECT * FROM users WHERE email='$email' AND fname='$fname'";
      $results = mysqli_query($conn, $query);
      while($row = mysqli_fetch_array($results)) {
          $fname    = $row['fname'];
          $lname    = $row['lname'];
          $email    = $row['email'];
          $regno    = $row['regno'];
          $city    = $row['city'];
      }
      if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['lname'] = $lname;
      $_SESSION['regno'] = $regno;
      $_SESSION['city'] = $city;
      $_SESSION['fname'] = $fname;
      header('location: con-details');
      }else {
          $_SESSION['error_message'] = "Incorrect contestant details!";
      }
}

//User Verify End
?>
<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <meta charset="utf-8">
    <title>Verify :: Nigerian Queen™</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="https://voteonline.com.ng/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nigerian Queen™ :: Beauty for Purpose">
    <meta property="og:description" content="The Nigerian Queen beauty pageant mission is to find and promote exceptional young ladies with value and virtues that can positively affect her generation, environment and also having strong interest in humanitarian services">
    <meta name="keywords" content="ThankGodOkoro.codes,ThankGod Okoro,Vote Online,Nigerian Queen,TNQ,beauty pageant,software,voting,election,online contest,contest,award shows,award,shows,pageantry,digital voting,event ticket management,event voting,fashion award,headies awards,amvca,Africa Magic Viewers' Choice Awards,branding">
    <meta property="og:image" content="https://i.imgur.com/XSGaWUp.png">
    <meta name="author" content="ThankGod Okoro is a Software developer/programmer, Web + App Developer, UI/UX Designer, Brand Strategist &amp; Product/Graphic Designer.">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.imgur.com/TNznbKa.png" />
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link href="assets/css/theme-event.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="font" href="assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/2113ffa3185856e2343592157/3e465356717a7cc083cfb2e03.js");</script>
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>

    <section class="row no-gutters min-vh-100 p-0">
      <div class="col-lg-4 bg-primary-3 d-flex justify-content-end">
        <img src="https://i.imgur.com/q1NRN7s.jpg" alt="Image" class="bg-image" >
        <div class="divider divider-vertical d-none d-lg-block" style="height: 100%;">
          <img src="assets/img/dividers/divider-vertical-1.svg" alt="graphical divider" data-inject-svg />
        </div>
      </div>
      <div class="col px-5 position-relative d-flex align-items-center">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="text-center mb-4">
              <h1 class="mb-1">Verify Registration</h1>
              <span>Enter your correct detials below to verify registration.</span>
              <div class="alert-danger text-center" role="alert" id="message"><?= $_SESSION['error_message'] ?></div>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
              <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name="fname" placeholder="First Name" class="form-control">
                </small>
              </div>
              <div class="form-group">
                <button class="btn-block btn btn-primary" type="submit" name="verifyme_btn">Verify my registration</button>
              </div>
            </form>
            <div class="text-center">
              <span>Go to main site <a href="\" class="hover-arrow">Go Back</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <script type="text/javascript" src="assets/js/clipboard.js"></script>
    <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <script type="text/javascript" src="assets/js/plyr.polyfilled.min.js"></script>
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
    <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
    <script type="text/javascript" src="assets/js/svg-injector.umd.production.js"></script>
    <script type="text/javascript" src="assets/js/twitterFetcher_min.js"></script>
    <script type="text/javascript" src="assets/js/typed.min.js"></script>
    <script type="text/javascript" src="assets/js/theme.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script type="text/javascript" src="assets/js/pay.js"></script>

    <script type="text/javascript">
      jQuery("form:not([action])").on('submit', function(){return true;});
    </script>
    <script>
    function goBack() {
    window.history.back();
    }
    </script>


  </body>



</html>