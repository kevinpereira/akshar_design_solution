<section id="main">
	<!-- START Bootstrap Navbar -->
	<div class="navbar navbar-static-top">
		<div class="navbar-inner">
			<!-- Breadcrumb -->
			<ul class="breadcrumb">
				<li>
					<a href="#">Dashboard</a><span class="divider"></span>
				</li>
				<li class="active">
					Profile
				</li>
			</ul>
			<!--/ Breadcrumb -->
		</div>
	</div>
	<!--/ END Bootstrap Navbar -->

	<!-- START Content -->
	<div class="container-fluid">
		<!-- START Row -->
		<div class="row-fluid">
			<!-- START Page/Section header -->
			<div class="span12">
				<div class="page-header line1">
					<h4>Profile <small>Manage your profile over here.</small></h4>
				</div>
			</div>
			<!--/ END Page/Section header -->
		</div>
		<!--/ END Row -->
		<!--Page Content Here  -->
		<div id="StudentProfile">
			<!-- START Row -->
			<div class="row-fluid profile">
				<!-- Start Tabs -->
				<div class="tabbable" style="margin-bottom: 25px;">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#tab1" data-toggle="tab">Overview</a>
						</li>
						<li>
							<a href="#tab2" data-toggle="tab">Account Setting </a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<ul class="unstyled profile-nav span3">
								<li><img src="<?php echo base_url() . "images/avatar/avatar2.jpg"; ?>" alt="" /><a href="#" class="profile-edit">edit</a>
								</li>
								<li>
									<a href="#">201212046</a>
								</li>
								<li>
									<a href="#">DAIICT</a>
								</li>

							</ul>
							<div class="span9">
								<div class="row-fluid">
									<div class="span8 profile-info">
										<h1><strong>Twitter, Inc.</strong>Jenifer</h1>

										<div class="">
											<h4>Address</h4>
											<address>
												<strong>Loop, Inc.</strong>
												<br>
												795 Park Ave, Suite 120
												<br>
												San Francisco, CA 94107
												<br>
												<abbr title="Phone">P:</abbr> (234) 145-1810
											</address>
											<address>
												<strong>Email</strong>
												<br>
												<a href="mailto:#">first.last@email.com</a>
											</address>
										</div>

										<ul class="unstyled inline">
											<li>
												<i class="icon-map-marker"></i> Spain
											</li>
											<li>
												<i class="icon-calendar"></i> 18 Jan 1982
											</li>
										</ul>
									</div>
									<!--end span8-->
									<div class="span4">
										<div class="portlet sale-summary">
											<div class="portlet-body">
												<ul class="unstyled">
													<li>
														<span class="sale-info">Performance<i class="icon-img-down"></i></span>
														<span class="sale-num">84%</span>
													</li>
													<li>
														<span class="sale-info"><i class="icon-img-down"></i></span>
														<span class="sale-num"></span>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<!--end span4-->
								</div>
								<!--end row-fluid-->
								<div class="tabbable tabbable-custom tabbable-custom-profile">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_1_11" data-toggle="tab">Batches</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="tab_1_11">
											<div class="portlet-body" style="display: block;">
												<table class="table table-striped table-bordered table-advance table-hover">
													<thead>
														<tr>
															<th><i class="icon-star"></i>Batch</th>
															<th class="hidden-phone"><i class="icon-question-sign"></i>Strength</th>
															<th><i class="icon-bookmark"></i> Course</th>
															<th><i class="icon-bookmark"></i> Performance</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><a href="#">Pixel Ltd</a></td>
															<td class="hidden-phone">Server hardware purchase</td>
															<td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
															<td class="hidden-phone">Server hardware purchase</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<!--tab-pane-->
										<div class="tab-pane" id="tab_1_22">
											<div class="portlet-body" style="display: block;">
												<table class="table table-striped table-bordered table-advance table-hover">
													<thead>
														<tr>
															<th><i class="icon-star"></i> Course</th>
															<th class="hidden-phone"><i class="icon-question-sign"></i> Attendence</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><a href="#">Pixel Ltd</a></td>
															<td class="hidden-phone">Server hardware purchase</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<!--tab-pane-->
									</div>
								</div>

								<div class="row-fluid" style="height:20px;"></div>
							</div>
							<!--end span9-->
						</div>
						<div class="tab-pane tabs-left profile-account" id="tab2">
							<div class="tabbable tabs-left" style="margin-bottom: 25px;">
								<ul class="nav nav-tabs span3">
									<li class="active">
										<a data-toggle="tab" href="#tab_1-1"> <i class="icon-cog"></i> Personal info </a>
										<span class="after"></span>
									</li>
									<li >
										<a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Change Avatar</a>
									</li>
									<li >
										<a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a>
									</li>
								</ul>
								<div class="tab-content span9">
									<div class="tab-content">
										<div id="tab_1-1" class="tab-pane active">
											<div style="height: auto;" id="accordion1-1" class="accordion collapse">
												<form action="#" id="form_studet_profile">
													<div class="alert alert-error hide">
														<button class="close" data-dismiss="alert"></button>
														You have some form errors. Please check below.
													</div>
													<div class="alert alert-success hide">
														<button class="close" data-dismiss="alert"></button>
														Your form validation is successful!
													</div>

													<h3 class="form-section">Student Info</h3>
													<!-- Name -->
													<div class="control-group">
														<label class="control-label">First Name:</label>
														<div class="controls" >
															<input type="text" name="first_name" id="first_name" class="span6">
														</div>
													</div></td>
													<td>
													<div class="control-group">
														<label class="control-label">Middle Name:</label>
														<div class="controls" >
															<input type="text" name="middle_name" id="middle_name" class="span6">
														</div>
													</div></td>
													<td>
													<div class="control-group">
														<label class="control-label">Last Name:</label>
														<div class="controls" >
															<input type="text" name="last_name" id="last_name" class="span6">
														</div>
													</div><!--/ Name--><!-- Date of Birth -->
													<div class="control-group">
														<label class="control-label">Date of Birth</label>
														<div class="input-append" id="dob_datepicker">
															<input type="text" readonly="" name="date_of_birth" id="date_of_birth" class="m-wrap span6.">
															<span class="add-on"><i class="icon-calendar"></i></span>
														</div>
													</div><!--/ Date of Birth --><!-- Mobile No -->
													<div class="control-group">
														<label class="control-label">Mobile No.</label>
														<div class="controls">
															<input type="text" name="mobile_no" id="mobile_no" class="span6">
														</div>
													</div><!--/ Mobile No--><!-- E-mail -->
													<div class="control-group">
														<label class="control-label">E-mail</label>
														<div class="controls">
															<input type="text" name="email" id="email" class="span6">
														</div>
													</div><!--/ E-mail --><!-- Qualification -->
													<div class="control-group">
														<label class="control-label">Qualification</label>
														<div class="controls">
															<input type="text" name="qualification" id="qualification" class="span6">
														</div>
													</div><!--/ Qualification --><h3 class="form-section">Address</h3><!-- Street -->
													<div class="control-group">
														<label class="control-label">Street<span class="required">*</span></label>
														<div class="controls">
															<input type="text" name="street_1" id="street_1" class="span6"/>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label"><span class="required"></span></label>
														<div class="controls">
															<input type="text" name="street_2" id="street_2" class="span6"/>
														</div>
													</div><!--/ Street --><!-- City -->
													<div class="control-group">
														<label class="control-label">Postal Code<span class="required">*</span></label>
														<div class="controls">
															<input type="text" name="pin_code" id="pin_code" class="span4"/>
														</div>
													</div><!--/ City --><!-- State -->
													<div class="control-group">
														<label class="control-label">State<span class="required">*</span></label>
														<div class="controls">
															<select class="span4" name="state" id="state">
																<option value="">Select...</option>
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div><!--/ StateState --><!-- City -->
													<div class="control-group">
														<label class="control-label">City<span class="required">*</span></label>
														<div class="controls">
															<select class="span4" name="city" id="city">
																<option value="">Select...</option>
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div><!--/ City --><!-- Form Action -->
													<div class="form-actions">
														<button type="submit" class="btn blue">
															Edit Profile
														</button>
													</div><!--/ Form Action -->
												</form>
											</div>
										</div>
										<div id="tab_2-2" class="tab-pane">
											<div style="height: auto;" id="accordion2-2" class="accordion collapse">
												<form class="form-horizontal" action="#" id="form_change_avtar">
													<div class="alert alert-error hide">
														<button class="close" data-dismiss="alert"></button>
														You have some form errors. Please check below.
													</div>
													<div class="alert alert-success hide">
														<button class="close" data-dismiss="alert"></button>
														Your form validation is successful!
													</div>
													<div class="control-group">
														<label class="control-label">Select Avtar</label>
														<div class="controls">
															<div class="fileupload fileupload-new" data-provides="fileupload">
																<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
																	<img src="" alt="" />
																</div>
																<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
																<div>
																	<span class="btn btn-file"><span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
																		<input type="file" id="student_avtar" name="student_avtar" class="default" />
																	</span>
																	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
																</div>
															</div>
															<span class="label label-important">NOTE!</span>
															<span> Attach file should be less than 2MB and jpg, jpeg and png format. </span>
														</div>
													</div>
													<!-- Form Action -->
													<div class="form-actions">
														<button type="submit" class="btn yellow">
															Change Avtar
														</button>
													</div><!--/ Form Action -->
												</form>
											</div>
										</div>
										<div id="tab_3-3" class="tab-pane">
											<div style="height: auto;" id="accordion3-3" class="accordion collapse">
												<form action="#" id="form_change_password">
													<div class="alert alert-error hide">
														<button class="close" data-dismiss="alert"></button>
														You have some form errors. Please check below.
													</div>
													<div class="alert alert-success hide">
														<button class="close" data-dismiss="alert"></button>
														Your form validation is successful!
													</div>
													<!-- password -->
													<div class="control-group">
														<label class="control-label">Current Password<span class="required">*</span></label>
														<div class="controls">
															<input type="password" name="current_password" id="currentpassword" class="span8"/>
														</div>
													</div><!--/ password -->
													<!-- New password -->
													<div class="control-group">
														<label class="control-label">New Password<span class="required">*</span></label>
														<div class="controls">
															<input type="password" name="new_password" id="new_password" class="span8"/>
														</div>
													</div><!--/ New password -->
													<!-- Re-type New password -->
													<div class="control-group">
														<label class="control-label">Re-type New Password<span class="required">*</span></label>
														<div class="controls">
															<input type="password" name="re_new_password" id="re_new_password" class="span8"/>
														</div>
													</div><!--/ Re-type New password -->
													<!-- Form Action -->
													<div class="form-actions">
														<button type="submit" class="btn green">
															Change Password
														</button>
													</div><!--/ Form Action -->
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Tabs -->
			</div>
			<!--/ END Row -->
		</div>
		<!--Page Content End  -->
	</div>
	<!--/ END Content -->
</section>
