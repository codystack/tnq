<?php
include ('./config/auth_controller.php');
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Login :: Nigerian Queen™</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/libs/tiny-slider/dist/tiny-slider.css">
    <link rel="stylesheet" href="assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <meta property="og:url" content="https://voteonline.com.ng/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nigerian Queen™ :: Beauty for Purpose">
    <meta property="og:description" content="The Nigerian Queen beauty pageant mission is to find and promote exceptional young ladies with value and virtues that can positively affect her generation, environment and also having strong interest in humanitarian services">
    <meta name="keywords" content="ThankGodOkoro.codes,ThankGod Okoro,Vote Online,Nigerian Queen,TNQ,beauty pageant,software,voting,election,online contest,contest,award shows,award,shows,pageantry,digital voting,event ticket management,event voting,fashion award,headies awards,amvca,Africa Magic Viewers' Choice Awards,branding">
    <meta property="og:image" content="https://i.imgur.com/XSGaWUp.png">
    <meta name="author" content="ThankGod Okoro is a Software developer/programmer, Web + App Developer, UI/UX Designer, Brand Strategist &amp; Product/Graphic Designer.">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.imgur.com/TNznbKa.png" />
</head>

<body class="bg-light">
    <!-- content section -->

    <div class="d-flex align-items-center position-relative vh-100">


        <div class="col-lg-5 col-xl-4 d-none d-lg-flex border-top border-primary border-top-4 align-items-center vh-100 px-0" style="background-image: url(https://i.imgur.com/qOKS3uy.jpg); background-position:13% 50%;">
        </div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
                    <!-- Form -->
                    <a href="\" class="mb-4 d-flex justify-content-center">
                        <img src="https://i.imgur.com/OHRyC4K.png" alt="" width="270px"></a>
                    <div class="bg-white p-4 p-xl-6 p-xxl-8 p-lg-4 rounded-lg border">
                        <form role="form-row" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <h1 class="mb-1 text-center">Welcome</h1>
                            <p class="mb-4 text-center">Login using your credentials.</p>
                            <div class="alert-danger1 text-center" role="alert" id="message"><?= $_SESSION['error_message'] ?></div>
                            <div class="form-group">
                                <label for="username" class="text-dark font-14">Username<span class="text-danger">*</span> </label>
                                <input type="text" name="username" class="form-control " placeholder="Enter username" required="">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="text-dark font-14">Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Enter password" required="">
                            </div>

                            <button class="btn btn-primary btn-block" type="submit" name="login_btn">
                                Login
                            </button>
                        </form>
                    </div>
                    <!-- End Form -->
                </div>
            </div>
        </div>

    </div>

    <!-- Libs JS -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="../assets/libs/prismjs/prism.js"></script>
    <script src="../assets/libs/leaflet/dist/leaflet.js"></script>
    <script src="../assets/libs/moment/min/moment.min.js"></script>
    <script src="../assets/libs/lightpick/lightpick.js"></script>
    <script src="../assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="../assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
    <script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>

    <!-- clipboard -->
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>
</body>

</html>