<?php
include('./controllers/dbconnect.php');
include('./components/header.php');

?>

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">ACCOUNT ACTIVATION</h1>
              <p class="text-lead text-white">Kindly use the activtion code sent to your email to activate account.</p>
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
          <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"><small>Contestant Account Activation</small></div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="already-registered">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email">
                  </div>
                  <small><span class="font-italic text-danger font-weight-700"><?php echo $emailErr;?></span></small>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                    </div>
                    <input class="form-control" placeholder="Activation Code" type="text" name="acode">
                  </div>
                  <small><span class="font-italic text-danger font-weight-700"><?php echo $acodeErr;?></span></small>
                </div>
                <div class="form-group">
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4" id="buttonToggle" name="register">Create account</button>
                  </div>
                </div>
              </form>
            </hr>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php include('./components/footer.php');?>