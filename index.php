<?php include("header.php");?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Static Slider 1  -->
                <!-- ============================================================== -->
                <div class="bg-light">
                    <section>
                        <div id="banner2" class="banner spacer" style="background-image:url(images/background-2.svg);">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-7 col-lg-7 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                                       
                                        <div class="m-t-40">
                                          <div class="card card-nav-tabs rellax" data-rellax-speed="2">
											<div class="header header-primary">
												<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
												<div class="nav-tabs-navigation">
													<div class="nav-tabs-wrapper">
														<ul class="nav nav-tabs" data-tabs="tabs">
															<li class="">
																<a class="active show" href="#profile" data-toggle="tab">
																	<i class="material-icons">book</i>
																	Book
																</a>
															</li>
															<li>
																<a href="#messages" data-toggle="tab">
																	<i class="material-icons">assignment</i>
																	Article
																</a>
															</li>
															
														</ul>
													</div>
												</div>
											</div>
											<div class="card-content">
												<div class="tab-content text-center">
													<div class="tab-pane active" id="profile">
														<div class="form-group mb-0">
															<input list="books" class="form-control" id="book" placeholder="Search Book" name="book"/>
															<div class="results">
																<ul>
																																	
																</ul>
															</div>
														</div>
														<div class="manual">
															<a href="<?php echo BASE_URL;?>cite-book.php">Manually Cite <i class="material-icons">keyboard_arrow_right</i></a>
														</div>
														<div class="form-group">
															<button id="sb" class="btn btn-danger-gradiant">Submit</button>
														</div>
													</div>
													<div class="tab-pane" id="messages">
														<div class="form-inline w-100">
															<div class="form-group w-75">
																<input list="article" class="form-control w-100" id="article" placeholder="Search Article" name="article"/>
																<div class="article-results w-100">
																	<ul>
																																		
																	</ul>
																</div>
															</div>
															<div class="form-group w-25">
																<select class="form-control w-100" id="article-search-type">
																	<option value="keyword" selected>Keyword</option>
																	<option value="doi">DOI</option>
																</select>
															</div>
														</div>
														<div class="manual">
															<a href="<?php echo BASE_URL;?>cite-article.php">Manually Cite <i class="material-icons">keyboard_arrow_right</i></a>
														</div>
														<div class="form-group m-t-10">
																<button id="sb-article" class="btn btn-danger-gradiant">Submit</button>
														</div>
													</div>
													
												</div>
											</div>
										</div>
											</div> 
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
					<section>
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-6">
									
								</div>
						</div>
					</section>
					<section>
						<div class="bg-light spacer feature5">
							<div class="container">
								<!-- Row  -->
								<div class="row justify-content-center">
									<div class="col-md-7 text-center">
										<h2 class="title">Create Your Own Citation</h2>
										<h6 class="subtitle">By Following Below Steps</h6>
									</div>
								</div>
								<!-- Row  -->
								<div class="row m-t-40">
									<!-- Column -->
									<div class="col-md-4 wrap-feature5-box">
										<div class="card card-shadow" data-aos="fade-right" data-aos-duration="1200">
											<div class="card-body d-flex">
												<div class="icon-space"><i class="text-danger-gradiant icon-Stopwatch"></i></div>
												<div class="">
													<h6 class="font-medium"><a href="javascript:void(0)" class="linking">Choose Type</a></h6>
													<p class="m-t-20">You can relay on our amazing features list and also our customer services.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- Column -->
									<!-- Column -->
									<div class="col-md-4 wrap-feature5-box">
										<div class="card card-shadow" data-aos="fade-down" data-aos-duration="1200">
											<div class="card-body d-flex">
												<div class="icon-space"><i class="text-danger-gradiant icon-Information"></i></div>
												<div class="">
													<h6 class="font-medium"><a href="javascript:void(0)" class="linking">Powerful Tech </a></h6>
													<p class="m-t-20">You can relay on our amazing features list and also our customer services.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- Column -->
									<!-- Column -->
									<div class="col-md-4 wrap-feature5-box">
										<div class="card card-shadow" data-aos="fade-left" data-aos-duration="1200">
											<div class="card-body d-flex">
												<div class="icon-space"><i class="text-danger-gradiant icon-Leo-2"></i></div>
												<div class="">
													<h6 class="font-medium"><a href="javascript:void(0)" class="linking">100% Satisfaction </a></h6>
													<p class="m-t-20">You can relay on our amazing features list and also our customer services.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- Column -->
									<!-- Column -->
									<div class="col-md-4 wrap-feature5-box">
										<div class="card card-shadow" data-aos="fade-right" data-aos-duration="1200">
											<div class="card-body d-flex">
												<div class="icon-space"><i class="text-danger-gradiant icon-Target-Market"></i></div>
												<div class="">
													<h6 class="font-medium"><a href="javascript:void(0)" class="linking">Targeting Market</a></h6>
													<p class="m-t-20">You can relay on our amazing features list and also our customer services.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- Column -->
									<!-- Column -->
									<div class="col-md-4 wrap-feature5-box">
										<div class="card card-shadow" data-aos="fade-up" data-aos-duration="1200">
											<div class="card-body d-flex">
												<div class="icon-space"><i class="text-danger-gradiant icon-Sunglasses-Smiley"></i></div>
												<div class="">
													<h6 class="font-medium"><a href="javascript:void(0)" class="linking">Goal Achievement </a></h6>
													<p class="m-t-20">You can relay on our amazing features list and also our customer services.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- Column -->
									<!-- Column -->
									<div class="col-md-4 wrap-feature5-box">
										<div class="card card-shadow" data-aos="fade-left" data-aos-duration="1200">
											<div class="card-body d-flex">
												<div class="icon-space"><i class="text-danger-gradiant  icon-Laptop-Phone"></i></div>
												<div class="">
													<h6 class="font-medium"><a href="javascript:void(0)" class="linking">Fully Responsive</a></h6>
													<p class="m-t-20">You can relay on our amazing features list and also our customer services.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- Column -->
									<div class="col-md-12 m-t-20 text-center">
										<a class="btn btn-success-gradiant btn-md btn-arrow"><span>View Feature5 code <i class="ti-arrow-right"></i></span></a>
									</div>
								</div>
							</div>
						</div>
					</section>
					<footer>
					
					</footer>
                </div>
                
<?php include('footer.php');?>