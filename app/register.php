<?php
include('./components/header.php');
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
            <div class="text-muted text-right mt-2 mb-2"><small><strong>REGISTRATION FEE ₦10,000</strong></small></div>
              <form role="form" id="register-form" onSubmit="return false;" enctype="multipart/form-data">

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
                    <input class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required type="email" id="email" name="email">
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
                    <option value="Port Harcourt">Port Harcourt</option>
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
                  <button class="btn btn-primary mt-4" onClick="payWithPaystack()">Submit Application</button>
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