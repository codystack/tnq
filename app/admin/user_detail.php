<?php
include ('./components/header.php');
include ('./config/auth_controller.php');
?>

    <!-- pageheader section -->
    <div class="bg-shape bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="pt-lg-9 pb-lg-15 pt-6 pb-10 mb-4 ">
                        <h1 class="h2 text-white">User Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include ('./components/navbar.php'); ?>

                <?php
                  $id  = $_GET['id'];
                  $query = "SELECT * FROM users WHERE id='$id'";
                  $results = mysqli_query($conn, $query);
                  while($row = mysqli_fetch_array($results)) {
                          $id           = $row['id'];
                          $fname        = $row['fname'];
                          $lname        = $row['lname'];
                          $email        = $row['email'];
                          $phone        = $row['phone'];
                          $state        = $row['state'];
                          $age          = $row['age'];
                          $ighandle     = $row['ighandle'];
                          $picture      = $row['picture'];
                          $proof        = $row['proof'];
                          $regno        = $row['regno'];
                          $city         = $row['city'];
                          $address      = $row['address'];
                          $date         = $row['date'];

                ?>
    
					<!-- dashboard nav -->
					<div class="col-lg-9 col-md-8 col-12">
						<div class="card rounded-lg mb-4 ">

							<!-- card body -->
							<div class="card-body p-4">
                <div class="row">
                <div class="form-group col-12 col-md-6 text-center">
                      <div class="align-items-center mb-4 mb-lg-0">
                        <img src="../<?php echo $picture;?>" 	id="img-uploaded" height="200" width="200" class="img-fluid mb-3 rounded-lg" alt="" />
                        <div class="ml-3">
                          <h4 class="mb-3">Photograph</h4>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-primary btn-sm">View</a>
                        <a href="#!" class="btn btn-info btn-sm ">Download</a>
                      </div>
                    </div>

                    <div class="form-group col-12 col-md-6 text-center">
                      <div class="align-items-center mb-4 mb-lg-0">
                        <img src="../<?php echo $proof;?>" 	id="img-uploaded" height="200" width="200" class="img-fluid mb-3 rounded-lg" alt="" />
                        <div class="ml-3">
                          <h4 class="mb-3">Proof of Payment</h4>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-primary btn-sm">View</a>
                        <a href="#!" class="btn btn-info btn-sm ">Download</a>
                      </div>
                    </div>
                </div>
            <hr class="my-5" />

            <div>
                <!-- form -->
                <form class="form-row">
                    <div class="col-12 col-md-12">
                        <h4 class="mb-3">General information</h4>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label class="font-14 text-dark" for="fname">First & Last Name<span class="text-danger">*</span></label>
											<input type="text"
												id="fname" class="form-control" placeholder="<?php echo $fname;?> <?php echo $lname;?>" disabled />
										</div>
										<div class="form-group col-12 col-md-6">
											<label class="font-14 text-dark" for="email">Email<span class="text-danger">*</span></label>
											<input type="text" id="email" class="form-control" placeholder="<?php echo $email;?>" disabled />
										</div>
										<div class="form-group col-12 col-md-6">
											<label class="font-14 text-dark" for="phone">Phone</label>
                        <input type="text" id="phone" class="form-control" placeholder="<?php echo $phone;?>" disabled />
                    </div>
                    <div class="form-group col-12 col-md-6">
											<label class="font-14 text-dark" for="state">State of Origin</label>
                        <input type="text" id="state" class="form-control" placeholder="<?php echo $state;?>" disabled />
                    </div>
                    <div class="form-group col-12 col-md-6">
											<label class="font-14 text-dark" for="phone">Age</label>
                        <input type="text" id="phone" class="form-control" placeholder="<?php echo $age;?>" disabled />
                    </div>
                    <div class="form-group col-12 col-md-6">
											<label class="font-14 text-dark" for="lname">Instagram Handle<span class="text-danger">*</span></label>
											<input type="text" id="lname"
												class="form-control" placeholder="@<?php echo $ighandle;?>" disabled />
                    </div>
                    <div class="form-group col-12 col-md-6">
											<label class="font-14 text-dark" for="lname">Address<span class="text-danger">*</span></label>
											<input type="text" id="lname"
												class="form-control" placeholder="<?php echo $address;?>" disabled />
                    </div>
                    <div class="form-group col-12 col-md-6">
											<label class="font-14 text-dark" for="lname">City of Audition<span class="text-danger">*</span></label>
											<input type="text" id="lname"
												class="form-control" placeholder="<?php echo $city;?>" disabled />
                    </div>
                    <div class="form-group col-12 col-md-6">
											<label class="font-14 text-dark" for="lname">Registration Number<span class="text-danger">*</span></label>
											<input type="text" id="lname"
												class="form-control" placeholder="<?php echo $regno;?>" disabled />
                    </div>
                    <div class="form-group col-12 col-md-6">
											<label class="font-14 text-dark" for="lname">Date of Registration<span class="text-danger">*</span></label>
											<input type="text" id="lname"
												class="form-control" placeholder="<?php echo date('d/m/Y', strtotime($date)); ?>" disabled />
										</div>
                    <div class="col-12 text-center mt-4">
                        <button class="btn btn-primary btn-lg">
												Save Changes
											</button>
                    </div>
                </form>
            </div>
        </div>

        <?php    }?>
    </div>
    <!-- card -->

    <!-- card  -->
    <div class="card rounded-lg ">
        <div class="card-body p-4">
            <p class="mb-0">
                <i class="fa fa-trash" aria-hidden="true"></i> If you no longer this user,
                <strong><a href="#!">Delete Account.</a></strong>
            </p>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

<?php
include ('./components/footer.php'); 
?>