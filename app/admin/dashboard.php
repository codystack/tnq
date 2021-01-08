<?php
$page = 'Dashboard'; 
include ('./components/header.php');
include ('./config/auth_controller.php');
?>

    <!-- pageheader section -->
    <div class="bg-shape bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="pt-lg-9 pb-lg-15 pt-6 pb-10 mb-4 ">
                        <h1 class="h2 text-white"><?php echo $page;?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include ('./components/navbar.php'); ?>

					<!-- dashboard subscriptions -->
					<div class="col-lg-9 col-md-12 col-12">
						<div class="card rounded-lg mb-4 ">
							<!-- card header -->
							<div class="card-header bg-white p-4">
								<h3 class="mb-0 h4"><?php echo $page; ?></h3>
							</div>
							<!-- card body -->
						<div class="row">
							<div class="col-sm-12">
								<div class="card-body">
									<div class="bg-light-primary p-4 rounded-lg">
										<div class="d-flex justify-content-between mb-2 ">
											<div class="font-13">
												<h4 class="mb-1">Contestants</h4>
												<span>View, Delete and Modify<br>all Contestants</span>
											</div>
											<div class="">
												<?php $countContestants = mysqli_query($conn, "SELECT id FROM users");
												echo "<span class=\"h1\">" .mysqli_num_rows($countContestants). "</span>";
												?>
											</div>
										</div>
										<div class="d-flex justify-content-between">
											<div class="">
												<a href="contestants" class="btn btn-primary btn-sm mr-4">View Contestants</a>
											</div>
										</div>
									</div>
								</div>
                            </div>
						
							<!--<div class="col-sm-6">
								<div class="card-body">
									<div class="bg-light p-4 rounded-lg">
										<div class="d-flex justify-content-between mb-2">
											<div class="font-13">
												<h4 class="mb-1">Messages</h4>
												<span>Read,View, and Delete<br>all Messages</span>
											</div>
											<div class="">
												<?php $countMessages = mysqli_query($conn, "SELECT id FROM messages");
												echo "<span class=\"h1\">" .mysqli_num_rows($countMessages). "</span>";
												?>
											</div>
										</div>
										<div class="d-flex justify-content-between">
											<div class="">
												<a href="messages" class="btn btn-dark btn-sm mr-4">View Messages</a>
											</div>
										</div>
									</div>
								</div>
                            </div>-->
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include ('./components/footer.php'); ?>