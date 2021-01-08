    <!-- dashboard nav -->
    <div class="pb-12 mt-lg-n14 mt-n9">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <nav class="navbar navbar-expand-md navbar-light  dashboard-nav mb-3 mb-lg-0 ">
                        <a class="d-xl-none d-lg-none d-md-none text-inherit  font-weight-bold" href="#!">Menu</a
							>
							<button
								class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light"
								type="button"
								data-toggle="collapse"
								data-target="#navbarNavDropdown"
								aria-controls="navbarNavDropdown"
								aria-expanded="false"
								aria-label="Toggle navigation"
							>
								<span class="fas fa-bars"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNavDropdown">
								<div class="navbar-nav flex-column w-100 ">
									<div
										class="border-bottom p-4 d-flex justify-content-between text-reset"
									>
										<div class="d-flex align-items-center">
											<img
												src="https://i.imgur.com/WKOInUn.png"
												alt=""
												class="rounded-circle avatar-lg"
											/>
											<div class="ml-3">
												<h5 class="mb-0 "><?php echo $_SESSION['username']?></h5>
												<small>Administrator</small>
											</div>
										</div>
									</div>
									<div class="p-4">
										<span class="heading ">Dashboard</span>
										<ul class="list-unstyled  mb-4 mt-2">
                                            <li class="nav-item <?php if($page=='Dashboard'){echo 'active';}?>">
												<a class="nav-link" href="dashboard">Dashboard</a>
											</li>
											<li class="nav-item <?php if($page=='Contestants'){echo 'active';}?>">
												<a class="nav-link" href="contestants">Contestants</a>
											</li>
											<!--<li class="nav-item <?php if($page=='Messages'){echo 'active';}?>">
												<a class="nav-link" href="messages">Messages</a>
											</li>-->
                                        </ul>

                                        <span class="heading border-top pt-4 d-block">Settings</span>

                                        <ul class="list-unstyled mb-0">
                                            
											<li class="nav-item <?php if($page=='Security'){echo 'active';}?>">
												<a class="nav-link" href="security">Security</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="https://www.voteonline.com.ng" target="_blank">Support</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="logout">Log Out</a>
                                            </li>
										</ul>
									</div>
								</div>
							</div>
						</nav>
					</div>