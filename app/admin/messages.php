<?php
$page = 'Messages'; 
include ('./components/header.php');
include ('./config/auth_controller.php');
?>

    <!-- pageheader section -->
    <div class="bg-shape bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="pt-lg-9 pb-lg-15 pt-6 pb-10 mb-4 ">
                        <h1 class="h2 text-white"><?php echo $page; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include ('./components/navbar.php'); ?>

					<!-- dahboard payment method -->
					<div class="col-lg-9 col-md-8 col-12">
						<div class="card rounded-lg mb-4 ">
							<!-- card header -->
							<div class="card-header bg-white p-4 border-bottom-0">
								<h3 class="mb-0 h4"><?php echo $page ?></h3>
              </div>
              
							<!-- Messages Table Start -->
							<div class="table-responsive border-0">
								<table class="table mb-0 text-nowrap ">
									<thead class="bg-light ">
										<tr>
											<th scope="col" class="py-2 border-bottom-0">Date</th>
											<th scope="col" class="py-2 border-bottom-0">Full Name</th>
											<th scope="col" class="py-2 border-bottom-0">Phone</th>
                      <th scope="col" class="py-2 border-bottom-0">Email</th>
                      <th scope="col" class="py-2 border-bottom-0">Purpose</th>
										</tr>
									</thead>
                    <tbody>
                    <?php
                      $query = "SELECT * FROM messages order by date DESC";
                      $result = mysqli_query($conn, $query);
                      if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {
                              $id           = $row['id'];
                              $firstName    = $row['firstName'];
                              $lastName     = $row['lastName'];
                              $phoneNum     = $row['phoneNum'];
                              $email        = $row['email'];
                              $purpose      = $row['purpose'];
                              $date         = $row['date'];
                                           
                      echo "<tr>";
                        echo "<td class=\"align-middle\">" .date('d/m/Y', strtotime($date)). "</td>";
                        echo "<td class=\"align-middle\">" .$firstName. '                                                                                                                                                                                                                                                                                                                                                                                                                                                    ' .$lastName. "</td>";
                        echo "<td class=\"align-middle\">" .$phoneNum. "</td>";
                        echo "<td class=\"align-middle\">" .$email. "</td>";
                        echo "<td class=\"align-middle\">" .$purpose. "</td>";
                        echo "<div>
                                <span class=\"dropdown\">
                                    <a class=\"text-muted text-decoration-none\" href=\"#!\" role=\"button\" id=\"dropdownOne\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false">
                                    "<i class=\"fe fe-more-vertical\"></i>
                                    </a>
                                    <span class=\"dropdown-menu  dropdown-menu-right dropdown-menu-md-left\" aria-labelledby=\"dropdownOne\">
                                    <a class=\"dropdown-item\" href=\"#!\"> .View. </a>
                                    <a class=\"dropdown-item\" href=\"#!\">Delete</a>
                                    </span>
                                </span>
                            </div>";
                      "</tr>";
                    }
                }
                ?>
                    </tbody>
                </table>
              </div>
              <!-- Messages Table End -->

            </div>
        </div>
    </div>
    </div>
    </div>

<?php
include ('./components/footer.php'); 
?>