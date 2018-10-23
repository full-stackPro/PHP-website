<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<?php echo $__env->make("shared.header-meta", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<link href="/css/listing.css" rel="stylesheet" type="text/css" />
		<link href="/css/header.css" rel="stylesheet" type="text/css" />
		<link href="/css/spinner.css" rel="stylesheet" type="text/css" />
		<link href="/css/custom.css" rel="stylesheet" type="text/css" />
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

		<style>

			.form-row {
				padding: 2px 0px;
			}

			.notes_textarea {
				min-width: 230px;
			}

			.bootstrap-select {
				background: rgb( 255,255,255 );
			}

			.bootstrap-select .dropdown-toggle::before {
				display: none;
			}
			.m-timeline-2 .m-timeline-2__items .m-timeline-2__item .m-timeline-2__item-time {
				font-size: 1rem;
			}
			.at-email, .at-sms, .at-call {
				display: none;
			}
			.at-div {
				padding: 10px 0;
			}
			.iconsize{
				font-size: 36px;
			}
			.minpadding{
				padding: 3px;
			}
			.reminder_design{
				height: 30px;
				background: #f5f5f5;
				border: 0;
				text-align:center;
			}
		</style>
		<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css" integrity="sha256-sJQnfQcpMXjRFWGNJ9/BWB1l6q7bkQYsRqToxoHlNJY=" crossorigin="anonymous">
		-->
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default"  >

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<?php echo $__env->make( "shared.header" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>

				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
					<!-- BEGIN: Brand -->
					<?php echo $__env->make("shared.logo", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<!-- END: Brand -->

					<!-- BEGIN: Aside Menu -->
					<?php echo $__env->make( "shared.sidebar" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<!-- END: Aside Menu -->

				</div>

				<div style="width: 100%">

					<div class="m-subheader header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Edit Contact
								</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
						<div class="m-content">
							<div class="m-portlet">
								<div class="m-portlet__body tab-content content_box" style="width: 100%;padding:0px;">
								<!---<div class="tab-content">---->
									<div class="tab-pane active show" id="details_content" aria-expanded="true" style="padding: 25px;">
										<div class="row">
											<div class="col-md-4 text-center">
												<img src="https://via.placeholder.com/200x200" style="width: 200px; height: 200px; border-radius: 50%">


											</div>
											<div class="col-md-8">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control" name="name_first" placeholder="First" value="<?php echo e($contact["name_first"]); ?>">
												</div>
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control" name="name_last" placeholder="Last" value="<?php echo e($contact["name_last"]); ?>">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">

															<a href="#" style="color:rgb( 34,185,255 )"><i class="fa fa-facebook-square iconsize"></i></a>
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<a href="#" style="color:rgb( 34,185,255 )"><i class="fa fa-twitter-square iconsize"></i></a>
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<a href="#" style="color:rgb( 34,185,255 )"><i class="fa fa-instagram iconsize"></i></a>
														</div>
													</div>

												</div>



													<!--<div class="row">
														<input type="text" name="facebook" class="form-control col-md-3" placeholder="Facebook">


														<input type="text" name="twitter" class="form-control col-md-3" placeholder="Twitter">


														<input type="text" name="instagram" class="form-control col-md-3" placeholder="Instagram">
													</div>-->

											</div>
										</div>
										<hr>
										<div class="text-center">
										<div class="row">

													<div class="col-md-4">
														<a href="#" class="btn btn-primary" style="width: 200px;">Transaction</a>
													</div>
													<div class="col-md-4">
														<a href="#" class="btn btn-primary" style="width: 200px;">Listing</a>
													</div>
													<div class="col-md-4">
														<a href="#" class="btn btn-primary" style="width: 200px;">Offers</a>
													</div>

										 </div>
										</div>
										<hr>
										<h3>Contact Information</h3>
										<br>
										<div class="text-center">
											<div class="row">
												<div class="col-md-4">
														<a href="#" class="btn btn-primary" style="width: 200px;">Call</a>
													</div>
													<div class="col-md-4">
														<a href="#" class="btn btn-primary" style="width: 200px;">Email</a>
													</div>
													<div class="col-md-4">
														<a href="#" class="btn btn-primary" style="width: 200px;">Text</a>
													</div>
											</div>
										</div>
										<br><br>
										<?php for($i=1; $i<=5; $i++): ?>
										<?php $display = ($i > 1) ? "hidden":"" ?>
										<div class="row <?= $display; ?>">
											<div class="col-md-4">
												<div class="form-group">
													<label>Phone <?= $i; ?></label>
													<input type="text" name="phone<?= $i; ?>" value="<?php echo e($contact["mobile_phone"]); ?>" class="form-control">
												</div>
											</div>
                                                                                        <div class="col-md-4">
												<div class="form-group">
													<label>Phone <?= $i; ?></label>
													<input type="text" name="phone<?= $i; ?>" value="<?php echo e($contact["home_phone"]); ?>" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Address <?= $i; ?></label>
													<input type="text" name="address<?= $i; ?>" value="<?php echo e($contact["street"]); ?>" class="form-control">
												</div>
											</div>
										</div>
										<?php endfor; ?>


									<div class="row ">
											<div class="col-md-4">
												<div class="form-group">
													<label>City </label>
													<input type="text" name="city" value="<?php echo e($contact["city"]); ?>" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>State </label>
													<input type="text" name="state<?= $i; ?>" value="<?php echo e($contact["state"]); ?>" class="form-control">
												</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<label>Zip Code </label>
													<input type="text" name="zip" value="<?php echo e($contact["zip"]); ?>" class="form-control">
												</div>
											</div>
									</div>

									<div class="row ">
											<div class="col-md-4">
												<div class="form-group">
													<label>Spouse Frist Name </label>
													<input type="text" name="spousefname" value="<?php echo e($contact["spouse_first"]); ?>" class="form-control">
												</div>
											</div>
                                                                                        <div class="col-md-4">
												<div class="form-group">
													<label>Spouse Last Name </label>
													<input type="text" name="spouselname" value="<?php echo e($contact["spouse_last"]); ?>" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Lead Source (Google, Facebook, Direct) </label>
													<input type="text" name="leadsource" value="<?php echo e($contact["lead_source"]); ?>" class="form-control">
												</div>
											</div>


									</div>

										<div class="row ">
											<div class="col-md-12">
												<div class="form-group">
													<label>Tags </label>
													<input type="text" name="spousename" class="form-control" value="<?php echo e($contact["tag"]); ?>" placeholder="Like: Sale, Bill, Year">
												</div>
											</div>
										</div>
										<div class="row ">
											<div class="col-md-12">
												<button class="btn btn-primary float-right" type="button" id="save_contact"  style="margin-right: 20px;">Save</button>
											</div>
										</div>

									


										<!--<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Street</label>
													<input class="form-control" type="text" name="street" value="<?php echo e($contact["street"]); ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>City</label>
													<input class="form-control" type="text" name="city" value="<?php echo e($contact["city"]); ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>State</label>
													<input class="form-control" type="text" name="state" value="<?php echo e($contact["state"]); ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>ZIP</label>
													<input class="form-control" type="text" name="zip" value="<?php echo e($contact["zip"]); ?>">
												</div>
											</div>
										</div>
										<br>

-->
									</div><!--body-->
									<div class="tab-pane" id="workflow_content" aria-expanded="false">
										WorkFlow
									</div>
								</div>
							</div>
						</div>

							<div class="col-lg-12" style="padding: 30px; padding-top: 0px;">
								<form method="post">
								<input type="hidden" name="contact_id" value="<?=$_GET['id'] ?>">
										<div class="col-lg-12" style="padding: 30px; padding-top: 0px;">

													<!--Begin::Portlet-->

													<div class="m-portlet  m-portlet--full-height " >
                             <div class="card-header">Follow Up</div>
														<div class="m-portlet__head">

															<div class="m-portlet__head-caption">
																<select name="activity" class="form-control">
																	<option>Follow up</option>
																	<option value="call">Call</option>
																	<option value="website">Emails</option>
																	<option value="email">Texts</option>
																	<option value="sms">Notes</option>
																	<option value="sms">Tasks</option>
																	<option value="sms">Web</option>
																	<option value="sms">Activity</option>
																	<option value="sms">Drips</option>
																	<option value="sms">Site Alerts</option>
																</select>
															</div>

														</div>
														<div class="m-portlet__body mt-0">
															<div class="m-scrollable" data-scrollable="true" data-height="380" data-mobile-height="300">

																<!--Begin::Timeline 2 -->
																<div class="m-timeline-2">
																	<div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">


																		<?php $__currentLoopData = $followups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $followupData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																		<?php //echo "<pre>"; print_r($activity['']); ?>



																		<?php if($followupData['followup_type'] == 'Call'): ?>
																		<div class="m-timeline-2__item">
																			<span class="m-timeline-2__item-time">02:00<br> Mon</span>
																			<div class="m-timeline-2__item-cricle">
																				<i class="fa fa-genderless m--font-danger"></i>
																			</div>
																			<div class="m-timeline-2__item-text  m--padding-top-5">
																				<?php echo $followupData['followup_note'] ; ?>
																			</div>
																		</div>
																		<?php endif; ?>

																		<?php if($followupData['followup_type'] == 'Appointment'): ?>
																		<div class="m-timeline-2__item m--margin-top-30">
																			<span class="m-timeline-2__item-time">05:13<br> Tue</span>
																			<div class="m-timeline-2__item-cricle">
																				<i class="fa fa-genderless m--font-success"></i>
																			</div>
																			<div class="m-timeline-2__item-text m--padding-top-5">
																				<?php echo $followupData['followup_note'] ; ?>
																			</div>

																		</div>
																		<?php endif; ?>
																		<?php if($followupData['followup_type']  == 'Task'): ?>
																		<div class="m-timeline-2__item m--margin-top-30">
																			<span class="m-timeline-2__item-time">11:50<br> Wed</span>
																			<div class="m-timeline-2__item-cricle">
																				<i class="fa fa-genderless m--font-brand"></i>
																			</div>
																			<div class="m-timeline-2__item-text  m--padding-top-5">
																				<?php echo $followupData['followup_note'] ; ?>
																			</div>
																		</div>
																		<?php endif; ?>
																		<!-- <?php if($activityData['action_type'] == 'sms'): ?>
																		<div class="m-timeline-2__item m--margin-top-30">
																			<span class="m-timeline-2__item-time">07:38<br> Fri</span>
																			<div class="m-timeline-2__item-cricle">
																				<i class="fa fa-genderless m--font-warning"></i>
																			</div>
																			<div class="m-timeline-2__item-text  m--padding-top-5">
																				<?php //echo $activityData['activity_note'] ; ?>
																			</div>
																		</div>
																		<?php endif; ?> -->


																		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																	</div>
																</div>

																<!--End::Timeline 2 -->
															</div>
														</div>
													</div></div>
									<div class="card-footer">
										<button style="display:none;" name="btn_followup" type="submit" class="btn btn-primary pull-right">Save</button>
									</div>
								
								</form>
							</div>

							<div class="col-lg-12" style="padding: 30px; padding-top: 0px;">

													<!--Begin::Portlet-->

													<div class="m-portlet  m-portlet--full-height " >
                                                                                                                <div class="card-header">Activity History</div>
														<div class="m-portlet__head">

															<div class="m-portlet__head-caption">
																<select name="activity" class="form-control">
																	<option>Select Activity</option>
																	<option value="call">Call</option>
																	<option value="website">Emails</option>
																	<option value="email">Texts</option>
																	<option value="sms">Notes</option>
																	<option value="sms">Tasks</option>
																	<option value="sms">Web</option>
																	<option value="sms">Activity</option>
																	<option value="sms">Drips</option>
																	<option value="sms">Site Alerts</option>
																</select>
															</div>

														</div>
														<div class="m-portlet__body mt-0">
															<div class="m-scrollable" data-scrollable="true" data-height="380" data-mobile-height="300">

																<!--Begin::Timeline 2 -->
																<div class="m-timeline-2">
																	<div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">


																		<?php $__currentLoopData = $activity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activityData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																		<?php //echo "<pre>"; print_r($activity['']); ?>



																		<?php if($activityData['action_type'] == 'call'): ?>
																		<div class="m-timeline-2__item">
																			<span class="m-timeline-2__item-time">02:00<br> Mon</span>
																			<div class="m-timeline-2__item-cricle">
																				<i class="fa fa-genderless m--font-danger"></i>
																			</div>
																			<div class="m-timeline-2__item-text  m--padding-top-5">
																				<?php echo $activityData['activity_note'] ; ?>
																			</div>
																		</div>
																		<?php endif; ?>

																		<?php if($activityData['action_type'] == 'website'): ?>
																		<div class="m-timeline-2__item m--margin-top-30">
																			<span class="m-timeline-2__item-time">05:13<br> Tue</span>
																			<div class="m-timeline-2__item-cricle">
																				<i class="fa fa-genderless m--font-success"></i>
																			</div>
																			<div class="m-timeline-2__item-text m--padding-top-5">
																				<?php echo $activityData['activity_note'] ; ?>
																			</div>

																		</div>
																		<?php endif; ?>
																		<?php if($activityData['action_type'] == 'email'): ?>
																		<div class="m-timeline-2__item m--margin-top-30">
																			<span class="m-timeline-2__item-time">11:50<br> Wed</span>
																			<div class="m-timeline-2__item-cricle">
																				<i class="fa fa-genderless m--font-brand"></i>
																			</div>
																			<div class="m-timeline-2__item-text  m--padding-top-5">
																				<?php echo $activityData['activity_note'] ; ?>
																			</div>
																		</div>
																		<?php endif; ?>
																		<?php if($activityData['action_type'] == 'sms'): ?>
																		<div class="m-timeline-2__item m--margin-top-30">
																			<span class="m-timeline-2__item-time">07:38<br> Fri</span>
																			<div class="m-timeline-2__item-cricle">
																				<i class="fa fa-genderless m--font-warning"></i>
																			</div>
																			<div class="m-timeline-2__item-text  m--padding-top-5">
																				<?php echo $activityData['activity_note'] ; ?>
																			</div>
																		</div>
																		<?php endif; ?>


																		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																	</div>
																</div>

																<!--End::Timeline 2 -->
															</div>
														</div>
													</div></div>

							<!-- Follow up section starts -->


							<!-- follow up section ended -->

						<div class="col-lg-12" style="padding: 30px; padding-top: 0px;">
						<form method="post">
						<div class="card">
							<div class="card-header">
								Add Note
							</div>
							<div class="card-body">
								<label>Additional Note</label>
								<textarea class="form-control" name="note"></textarea>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary float-right" name="add_note" >Add Note</button>
							</div>

						</div>
						</form>
						</div>









						<div class="col-lg-12" style="padding: 30px; padding-top: 0px;">
								<!--begin:: Widgets/Support Tickets -->

								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Notes
												</h3>
											</div>
										</div>

									</div>
									<div class="m-portlet__body">
										<div class="m-widget3">
											<?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="m-widget3__item">
												<div class="m-widget3__header">

													<h5><?= convertDate2($n['date']) ?></h5>
												</div>
												<div class="m-widget3__body">
													<p class="m-widget3__text">
														<?= $n['note'] ?>
													</p>
												</div>
											</div>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


										</div>
									</div>
								</div>

								<!--end:: Widgets/Support Tickets -->
						</div>




						</div>


						<div class="col-md-4">
							<div class="col-xl-12 col-lg-12">


								<div class="m-portlet  m-portlet--full-height " style="margin-top: 60px;display:none;">
										<div class="m-portlet__body mt-0">

												<div class="row">

													<?php if($previous !=''): ?>
													<div class="col-md-6">
														<a href="https://portal.theoffercompany.com/contact_edit.php?id=<?php echo e($previous); ?>" class="btn btn-primary" style="width: 160px;">Previous</a>
													</div>
													<?php else: ?>
													<div class="col-md-6">
														<a href="#" class="btn btn-primary" style="width: 160px;opacity:0.5" disabled>Previous</a>
													</div>
													<?php endif; ?>

													<?php if($next !=''): ?>
													<div class="col-md-6">
														<a href="https://portal.theoffercompany.com/contact_edit.php?id=<?php echo e($next); ?>" class="btn btn-primary" style="width: 160px;">Next</a>
													</div>
													<?php else: ?>
													<div class="col-md-6">
														<a href="#" class="btn btn-primary"  style="width: 160px;opacity:0.5">Next</a>
													</div>
													<?php endif; ?>






											</div>



										</div>
										</div>



		






						<div class="m-portlet  m-portlet--full-height "  style="margin-top: 60px;" >
								<div class="m-portlet__body mt-0">
								<div class="m-scrollable mCustomScrollbar _mCS_4 mCS-autoHide" data-scrollable="true" data-height="380" data-mobile-height="300" style="position: relative; overflow: visible;"><div id="mCSB_4" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0" style="max-height: none;"><div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Pipeline Status</label>
												<select name="pipeline_status" class="form-control">
													<option disabled <?php if( empty( $contact["lead_source"] ) ): ?> selected <?php endif; ?> value> -- select an option -- </option>
													<?php $__currentLoopData = $pipeline_status_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php if( $group["name"] ): ?> <optgroup label="<?php echo e($group["name"]); ?>"> <?php endif; ?>
															<?php $__currentLoopData = $group["types"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<option value="<?php echo e($type["id"]); ?>" <?php if( $contact["pipeline_status"] == $type["id"] ): ?> selected="selected" <?php endif; ?> autocomplete="off"><?php echo e($type["name"]); ?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<?php if( $group["name"] ): ?> </optgroup> <?php endif; ?>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<label>Transaction Type</label>
											<select name="transaction_type" class="form-control">
												<option disabled <?php if( empty( $contact["lead_source"] ) ): ?> selected <?php endif; ?> value> -- select an option -- </option>
												<?php $__currentLoopData = $transaction_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($type["id"]); ?>" <?php if( $contact["transaction_type"] == $type["id"] ): ?> selected="selected" <?php endif; ?> autocomplete="off"><?php echo e($type["name"]); ?></option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<label>Contact Type</label>
											<select name="contact_type" class="form-control">
												<option disabled <?php if( empty( $contact["lead_source"] ) ): ?> selected <?php endif; ?> value> -- select an option -- </option>
												<?php $__currentLoopData = $contact_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<?php if( $group["name"] ): ?> <optgroup label="<?php echo e($group["name"]); ?>"> <?php endif; ?>
														<?php $__currentLoopData = $group["types"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($type["id"]); ?>" <?php if( $contact["contact_type"] == $type["id"] ): ?> selected="selected" <?php endif; ?> autocomplete="off"><?php echo e($type["name"]); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php if( $group["name"] ): ?> </optgroup> <?php endif; ?>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
										</div>
									</div>

									

								</div></div>
								</div>
								</div>
								</div>



<div class="m-portlet  m-portlet--full-height " >
								<div class="m-portlet__body mt-0">
								<div class="m-scrollable mCustomScrollbar _mCS_4 mCS-autoHide" data-scrollable="true" data-height="380" data-mobile-height="300" style="position: relative; overflow: visible;"><div id="mCSB_4" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0" style="max-height: none;"><div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">

									

									
								<div class="row">
										<div class="col-md-12">
											<h5>Buyers Agent</h5>
																								
										</div>
								</div>
								<br/>
								<div class="row">
										<div class="col-md-12">
											<h5>Listing Agent</h5>
																								
										</div>
								</div>
								<br/>
								<div class="row">
										<div class="col-md-12">
											<h5>Lender</h5>
																								
										</div>
								</div>
								<br/>
								<div class="row">
										<div class="col-md-12">
											<h5>Title</h5>
																								
										</div>
								</div>

								</div></div>
								</div>
								</div>
								</div>







								<form id="form_activity" method="post">
										<input type="hidden" name="id" value="<?php echo e($contact["id"]); ?>">
										<div class="card" style="margin-top: 55px;">
											<div class="card-header">Activity</div>
											<div class="card-body">

												<div class="row">
													<div class="col-md-12">
														<label>Activity Note</label>
														<select name="activity_note" class="form-control">
															<option value="Called">Called</option>
															<option value="Left Voicemail">Left Voicemail</option>
															<option value="Bad Number">Bad Number</option>
															<option value="Met In Person">Met In Person</option>
															<option value="Emailed">Emailed</option>
															<option value="Texted Note">Texted Note</option>

														</select>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														&nbsp;
													</div>
												</div>
												<!--<div class="row at-div">
													<div class="col-md-12">
														<label>Action Type</label>
														<select id="action_type" name="action_type" class="form-control">
															<option>Select Activity</option>
															<option value="call">Call</option>
															<option value="email">Email</option>
															<option value="sms">SMS</option>
														</select>
													</div>
												</div>

												<div class="row at-call">
													<div class="col-md-12">
														<select name="activity_call" class="form-control">
															<option>Select Activity</option>
															<option value="call">Called</option>
															<option value="Left Voicemail">Left Voicemail</option>
															<option value="Bad Number">Bad Number</option>
															<option value="In Person">In Person</option>
															<option value="Note">Note</option>
														</select>
													</div>
												</div>
												<div class="row at-email">
													<div class="col-md-12">
														<select name="activity_email" class="form-control">
															<option>Select Activity</option>
															<option value="Followup">Followup</option>
															<option value="Schedule Call">Schedule Call</option>
														</select>
													</div>
												</div>
												<div class="row at-sms">
													<div class="col-md-12">
														<input type="text" class="form-control" name="activity_sms" placeholder="" value="">
													</div>
												</div>
												-->

												<div class="row">
													<div class="col-md-7">														<label>Date</label>
														<input type="date" name="activity_date" class="form-control">
													</div>
													<div class="col-md-5">														<label>Time</label>
														<input type="time" name="activity_time" class="form-control">
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														&nbsp;
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<label>Description</label>
														<textarea class="form-control" name="additional_notes"></textarea>
													</div>
												</div>


											</div>
											<div class="card-footer">
												<button class="btn btn-primary float-right" type="button" id="save_activity" data-action="/api/createActivity.php" data-type="save" style="margin-right: 20px;">Save</button>
											</div>
										</div>
								</form>
								<form id="followup" method="post">
										<input type="hidden" name="id" value="<?php echo e($contact["id"]); ?>">
										<div class="card" style="margin-top: 55px;">
											<div class="card-header">Follow up</div>
											<div class="card-body">

												<div class="row at-div">
													<div class="col-md-12">
														<label>Action Type</label>
														<select id="action_type" name="action_type" class="form-control">
															<option>Select Activity</option>
															<option value="Call">Call</option>
															<option value="Appointment">Appointment</option>
															<option value="Task">Task</option>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														&nbsp;
													</div>
												</div>
												<div class="row">
													<div class="col-md-7">														<label>Date</label>
														<input type="date" name="activity_date" class="form-control">
													</div>
													<div class="col-md-5">														<label>Time</label>
														<input type="time" name="activity_time" class="form-control">
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														&nbsp;
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<label>Description</label>
														<textarea class="form-control" name="note"></textarea>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														&nbsp;
													</div>
												</div>
												<div class="row at-calls" style="display:block !important;">
													<div class="col-md-12">
														<label for="">Reminder </label><br>
														<div class="row">
														<div class="col-md-1 minpadding" style="text-align: center;"> <i class="fa fa-bell " style="    color: #767676;
    margin-top: 10px;"></i>	</div>
														<div class="col-md-2 minpadding">	
															<select id="reminder_type" name="reminder_type" class="reminder_design">
																<option value="email">Email</option>
																<option value="Call">Call</option>
																<option value="sms">SMS</option>
																
															</select>
														</div>
														<div class="col-md-1 minpadding">	<input type="number" name="after_day" value="1" class="reminder_design" style="width:30px;"> </div>
														<div class="col-md-2 minpadding">	<select id="reminder_days" name="reminder_days" class="reminder_design">
																<option value="Day">Day</option>
																<option value="Month">Month</option>
																<option value="Year">Year</option>
																
															</select>	</div>
														<div class="col-md-3 minpadding" style="text-align: center;"> <p style="margin-top: 5px;">before at</p>	</div>
														<div class="col-md-2 minpadding"> <input type="time" name="activity_time" class="reminder_design">	</div>
														
														
														
														
													</div>
													</div>
												</div>

											</div>
											<div class="card-footer">
												<button class="btn btn-primary float-right" type="button" data-action="/api/createFollowUp.php" id="save_followup" data-action="" data-type="save" style="margin-right: 20px;">Save</button>
											</div>
										</div>
								</form>
								<br>


								<form id="form_activity2" method="post">
										<input type="hidden" name="id" >
										<div class="card" style="margin-top: 55px;">
											<div class="card-header">DRIP CAMPAIGN</div>
											<div class="card-body">


												<div class="row">
													<div class="col-md-12">
														&nbsp;
													</div>
												</div>


											</div>

										</div>
								</form>


								<form id="form_activity2" method="post">
										<input type="hidden" name="id" >
										<div class="card" style="margin-top: 55px;">
											<div class="card-header">Registed Date</div>
											<div class="card-body">


												<div class="row">
													<div class="col-md-12">
														<div class="m-portlet__body">
															<div class="m-widget3">
															<div class="m-widget3__item">
															<div class="m-widget3__header">
															<h5>September 9, 2018 12:50</h5>
															</div>

															</div>
															</div>
															</div>
																												</div>
												</div>


											</div>

										</div>
								</form>



									<form id="form_activity2" method="post">
										<input type="hidden" name="id" >
										<div class="card" style="margin-top: 55px;">
											<div class="card-header">Last Login</div>
											<div class="card-body">


												<div class="row">
													<div class="col-md-12">
														<div class="m-portlet__body">
															<div class="m-widget3">
															<div class="m-widget3__item">
															<div class="m-widget3__header">
															<h5>September 13, 2018 01:50</h5>
															</div>

															</div>
															</div>
															</div>
																												</div>
												</div>


											</div>

										</div>
								</form>


								<br>








							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end:: Body -->

				<?php echo $__env->make( "shared.footer" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		</div>
		<!-- end:: Page -->

		<!-- begin::Quick Sidebar -->
		<?php echo $__env->make( "shared.quickSidebar" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- end::Quick Sidebar -->
		<?php echo $__env->make( "shared.quickNav" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->


		<!-- begin::Quick Nav -->
		<!--begin::Base Scripts -->
		<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/demo/demo7/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->
		<!--begin::Page Vendors -->
		<script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<!--end::Page Vendors -->
		<!--begin::Page Snippets -->
		<script src="assets/app/js/dashboard.js" type="text/javascript"></script>
		<!--end::Page Snippets -->

		<div id="spinner"></div>

	<script>

		const items_container = $( "#items" );

		$( "#items" ).on( "click", 'button[type="submit"]', function(){
			let el = $(this);
			let action = el.attr( "data-action" );
			let data = $( ".item" ).find( ":input" ).serialize();
			let type = el.attr( "data-type" );

			showSpinner();

			$.ajax({
				type: "POST",
				url: action,
				data: data,
				success: function( response ) {
					console.log( "success", response );
					window.location.href = "/contacts.php";
				},
				error: function( response ) {
					console.error( "error", response );
					hideSpinner( el );
					let message = ( type === "delete" ) ? "Failed to delete contact" : "Failed to save contact";
					alert( message );
				},
				dataType: "json",
			});

		});

		function showSpinner() {
			$( "#spinner" ).addClass( "loading" );
		}

		function hideSpinner() {
			$( "#spinner" ).removeClass( "loading" );
		}

		$(document).ready(function() {
		    $('.at-call').css('display', 'none');
		    $('.at-sms').css('display', 'none');
		    $('.at-email').css('display', 'none');
		});

		$("#action_type").change(function() {

		    $('.at-call').css('display', 'none');
		    $('.at-sms').css('display', 'none');
		    $('.at-email').css('display', 'none');

			switch($(this).val()) {
			    case 'call':
			        $('.at-call').css('display', 'block');
			        break;
			    case 'sms':
			        $('.at-sms').css('display', 'block');
			        break;
			    case 'email':
			        $('.at-email').css('display', 'block');
			        break;
			}
		});

		$( "#save_activity" ).on( "click", function(){
			let el = $(this);
			let action = el.attr( "data-action" );
			let data = $( "#form_activity" ).serialize();
			let type = el.attr( "data-type" );

			//alert(action);
			showSpinner();

			$.ajax({
				type: "POST",
				url: action,
				data: data,
				success: function( response ) {
					console.log( "success", response );
					window.location.href = "/contacts.php";
				},
				error: function( response ) {
					console.error( "error", response );
					hideSpinner( el );
					let message = ( type === "delete" ) ? "Failed to delete contact" : "Failed to save contact";
					alert( message );
				},
				dataType: "json",
			});

		});$( "#save_activity" ).on( "click", function(){
			let el = $(this);
			let action = el.attr( "data-action" );
			let data = $( "#form_activity" ).serialize();
			let type = el.attr( "data-type" );

			//alert(action);
			showSpinner();

			$.ajax({
				type: "POST",
				url: action,
				data: data,
				success: function( response ) {
					console.log( "success", response );
					window.location.href = "/contacts.php";
				},
				error: function( response ) {
					console.error( "error", response );
					hideSpinner( el );
					let message = ( type === "delete" ) ? "Failed to delete contact" : "Failed to save contact";
					alert( message );
				},
				dataType: "json",
			});

		});$( "#save_activity" ).on( "click", function(){
			let el = $(this);
			let action = el.attr( "data-action" );
			let data = $( "#form_activity" ).serialize();
			let type = el.attr( "data-type" );

			//alert(action);
			showSpinner();

			$.ajax({
				type: "POST",
				url: action,
				data: data,
				success: function( response ) {
					console.log( "success", response );
					window.location.href = "/contacts.php";
				},
				error: function( response ) {
					console.error( "error", response );
					hideSpinner( el );
					let message = ( type === "delete" ) ? "Failed to delete contact" : "Failed to save contact";
					alert( message );
				},
				dataType: "json",
			});

		});$( "#save_activity" ).on( "click", function(){
			let el = $(this);
			let action = el.attr( "data-action" );
			let data = $( "#form_activity" ).serialize();
			let type = el.attr( "data-type" );

			//alert(action);
			showSpinner();

			$.ajax({
				type: "POST",
				url: action,
				data: data,
				success: function( response ) {
					console.log( "success", response );
					window.location.href = "/contacts.php";
				},
				error: function( response ) {
					console.error( "error", response );
					hideSpinner( el );
					let message = ( type === "delete" ) ? "Failed to delete contact" : "Failed to save contact";
					alert( message );
				},
				dataType: "json",
			});

		});

		$( "#save_followup" ).on( "click", function(){
			let el = $(this);
			let action = el.attr( "data-action" );
			let data = $( "#followup" ).serialize();
			let type = el.attr( "data-type" );

			//alert(action);
			showSpinner();

			$.ajax({
				type: "POST",
				url: action,
				data: data,
				success: function( response ) {
					 console.log( "success", response );
					window.location.href = "/contacts.php";
				},
				error: function( response ) {
					hideSpinner( el );
					 if(response.status == 'success'){
			        alert("Follow Up Saved");
			    }else{
			    	alert("Follow Up Saved");
			    }
				},
				dataType: "json",
			});

		});



	</script>

	</body>
	<!-- end::Body -->
</html>
