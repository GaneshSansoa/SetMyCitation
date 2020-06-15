<?php 
include_once('config/config.php');
include(ROOT_PATH ."header.php");?>
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
                        <div id="banner2" class="banner spacer" style="background-image:url(images/background-4.svg);">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-9 col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                                       
                                        <div class="m-t-40">
                                         
										<div class="card card-signup">
											<h2 class="card-title text-center">Register</h2>
											<div class="row">
												<div class="col-md-6">
													<div class="info info-horizontal">
														<div class="icon icon-rose">
															<i class="material-icons">timeline</i>
														</div>
														<div class="description">
															<h4 class="info-title">Control Your Citations</h4>
															<p class="description">
																We've created the marketing campaign of the website. It was a very interesting collaboration.
															</p>
														</div>
													</div>

													<div class="info info-horizontal">
														<div class="icon icon-primary">
															<i class="material-icons">code</i>
														</div>
														<div class="description">
															<h4 class="info-title">Save and Use Anytime</h4>
															<p class="description">
																We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
															</p>
														</div>
													</div>

													<div class="info info-horizontal">
														<div class="icon icon-info">
															<i class="material-icons">group</i>
														</div>
														<div class="description">
															<h4 class="info-title">Create Different Groups</h4>
															<p class="description">
																There is also a Fully Customizable CMS Admin Dashboard for this product.
															</p>
														</div>
													</div>
												</div>
												<div class="col-md-5">
											<form class="form" id="signup_form" method="post" action="" onsubmit="return false;">
												
												
												<div class="card-content">

													<div class="input-group">
														<label class="" for="inlineFormInputGroup">Username</label>
													  <div class="input-group mb-2">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="material-icons">face</i>
															</div>
														</div>
															<input type="text" class="form-control" name="username" id="username" placeholder="Username" data-toggle="popover" data-html="true" data-trigger="manual" data-placement="right">
														</div>
													</div>
													<div class="input-group">
														<label class="" for="inlineFormInputGroup">Email</label>
													  <div class="input-group mb-2">
														<div class="input-group-prepend">
														  <div class="input-group-text">
															<i class="material-icons">email</i>
														
														  </div>
														</div>
														<input type="text" class="form-control" name="email" id="email" placeholder="Email" data-toggle="popover" data-html="true" data-trigger="manual" data-content="lola" data-placement="right">
													</div>
													</div>
													<div class="input-group">
														<label class="" for="inlineFormInputGroup">Password</label>
													  <div class="input-group mb-2">
														<div class="input-group-prepend">
														  <div class="input-group-text">
															<i class="material-icons">lock_outline</i>
														
														  </div>
														</div>
														<input type="password" class="form-control" name="password" id="password" placeholder="Password" data-toggle="popover" data-html="true" data-trigger="manual" data-placement="right">
													</div>
													</div>
													<div class="input-group">
														<label class="" for="inlineFormInputGroup">Re-Password</label>
													  <div class="input-group mb-2">
														<div class="input-group-prepend">
														  <div class="input-group-text">
															<i class="material-icons">lock_outline</i>
														
														  </div>
														</div>
														<input type="password" class="form-control" name="re-password" id="re-password" placeholder="Re-Enter Password" data-toggle="popover" data-html="true" data-trigger="manual" data-placement="right">
													</div>
													</div>
													<!-- If you want to add a checkbox to this form, uncomment this code

													<div class="checkbox">
														<label>
															<input type="checkbox" name="optionsCheckboxes" checked>
															Subscribe to newsletter
														</label>
													</div> -->
												</div>
												<div class="footer text-center">
													<button type="submit" id="form-submit" class="btn btn-primary btn-simple btn-wd btn-blue-gradiant">Get Started</button>
												</div>
											</form>

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
					
				</div>
				<script>
                if(localStorage.token){
                    window.location = '<?php echo BASE_URL;?>dashboard';
                }
            </script>
<?php include('footer.php');?>