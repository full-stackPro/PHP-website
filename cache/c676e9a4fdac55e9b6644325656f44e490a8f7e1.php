<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<?php echo $__env->make("shared.header-meta", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<link href="/css/listing.css" rel="stylesheet" type="text/css" />
		<link href="/css/header.css" rel="stylesheet" type="text/css" />
		<link href="/css/spinner.css" rel="stylesheet" type="text/css" />
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
									<div class="tab-pane active show" id="details_content" aria-expanded="true">
										<table cellspacing="10" cellpadding="15" class="table-striped" style="width: 100%">
											<tbody id="items" class="item">
												<tr>
													<input type="hidden" name="id" value="<?php echo e($contact["id"]); ?>">
													<td>
														<div class="row">
															<div class="col title">
																Pipeline Status
															</div>
														</div>
														<div class="row">
															<div class="col">
																<select name="pipeline_status">
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
													</td>
													<td>
														<div class="row">
															<div class="col title">
																Transaction Type
															</div>
														</div>
														<div class="row">
															<div class="col">
																<select name="transaction_type">
																	<option disabled <?php if( empty( $contact["lead_source"] ) ): ?> selected <?php endif; ?> value> -- select an option -- </option>
																	<?php $__currentLoopData = $transaction_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																		<option value="<?php echo e($type["id"]); ?>" <?php if( $contact["transaction_type"] == $type["id"] ): ?> selected="selected" <?php endif; ?> autocomplete="off"><?php echo e($type["name"]); ?></option>
																	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																</select>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td colspan="2">
														<div class="row">
															<div class="col title">
																Contact Type
															</div>
														</div>
														<div class="row">
															<div class="col">
																<select name="contact_type">
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
													</td>
												</tr>
												<tr>
													<td style="min-width:100px;">
														<div class="row">
															<div class="col title">
																Name
															</div>
														</div>
														<div class="form-row">
															<input type="text" class="form-control" name="name_first" placeholder="First" value="<?php echo e($contact["name_first"]); ?>">
														</div>
														<div class="form-row">
															<input type="text" class="form-control" name="name_last" placeholder="Last" value="<?php echo e($contact["name_last"]); ?>">
														</div>
													</td>
													<td style="min-width:100px;">
														<div class="row">
															<div class="col title">
																Spouse
															</div>
														</div>
														<div class="form-row">
															<input type="text" class="form-control" name="spouse_first" placeholder="First" value="<?php echo e($contact["spouse_first"]); ?>">
														</div>
														<div class="form-row">
															<input type="text" class="form-control" name="spouse_last" placeholder="Last" value="<?php echo e($contact["spouse_last"]); ?>">
														</div>
													</td>
												</tr>
												<tr>
													<td style="min-width:142px;" colspan="2">
														<div class="row">
															<div class="col title">
																Company
															</div>
														</div>
														<div class="form-row">
															<input type="text" class="form-control" name="company" placeholder="Company" value="<?php echo e($contact["company"]); ?>">
														</div>
													</td>
												</tr>
												<tr>
													<td colspan="2">
														<div class="row">
															<div class="col title">
																Lead Source
															</div>
														</div>
														<select name="lead_source">
															<option disabled <?php if( empty( $contact["lead_source"] ) ): ?> selected <?php endif; ?> value> -- select an option -- </option>
															<?php $__currentLoopData = $lead_source_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<option value="<?php echo e($type["id"]); ?>" <?php if( $contact["lead_source"] == $type["id"] ): ?> selected="selected" <?php endif; ?> autocomplete="off"><?php echo e($type["name"]); ?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</select>
													</td>
												</tr>
												<tr>
													<td style="min-width:190px;">
														<div class="row">
															<div class="col title">
																Phone / Email
															</div>
														</div>
														<div class="form-row">
															<input type="tel" class="form-control" name="mobile_phone" placeholder="Mobile phone" value="<?php echo e($contact["mobile_phone"]); ?>">
														</div>
														<div class="form-row">
															<input type="tel" class="form-control" name="home_phone" placeholder="Home phone" value="<?php echo e($contact["home_phone"]); ?>">
														</div>
														<div class="form-row">
															<input type="tel" class="form-control" name="business_phone" placeholder="Business phone" value="<?php echo e($contact["business_phone"]); ?>">
														</div>
														<div class="form-row">
															<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e($contact["email"]); ?>">
														</div>
													</td>
													<td style="min-width:190px;">
														<div class="row">
														<div class="col title">
															Address
														</div>
													</div>
														<div class="form-row">
															<input type="text" class="form-control" name="street" placeholder="Street" value="<?php echo e($contact["street"]); ?>">
														</div>
														<div class="form-row">
															<input type="text" class="form-control" name="city" placeholder="City" value="<?php echo e($contact["city"]); ?>">
														</div>
														<div class="form-row">
															<input type="text" class="form-control" name="state" placeholder="State" value="<?php echo e($contact["state"]); ?>">
														</div>
														<div class="form-row">
															<input type="text" class="form-control" name="zip" placeholder="Zip" value="<?php echo e($contact["zip"]); ?>">
														</div>
													</td>
												</tr>
												<tr style="display: none;">
													<td colspan="2">
														<div class="row">
															<div class="col title">
																Notes
															</div>
														</div>
														<div class="row">
															<div class="col">
																<textarea class="form-control rounded-0 notes_textarea" name="notes" rows="10"><?php echo e($contact["notes"]); ?></textarea>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td colspan="2">
														<div class="row">
															<div class="col" style="text-align: center;">
																<button class="btn btn-primary" type="submit" data-action="/api/updateContact.php" data-type="save" style="margin-right: 20px;">Save</button>
																<button class="btn btn-warning" type="submit" data-action="/api/deleteContact.php" data-type="delete">Delete</button>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="tab-pane" id="workflow_content" aria-expanded="false">
										WorkFlow
									</div>
								</div>
							</div>
						</div>
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
								<form id="form_activity" method="post">
										<input type="hidden" name="id" value="<?php echo e($contact["id"]); ?>">
										<div class="card" style="margin-top: 55px;">
											<div class="card-header">Activity</div>
											<div class="card-body">

												<div class="row">
													<div class="col-md-12">
														<label>Activity Note</label>
														<select name="activity_note" class="form-control">
															<option value="Called Left VM">Called Left VM</option>
															<option value="Appointment">Appointment</option>
															<option value="Task">Task</option>
															<option value="Bad Number">Bad Number</option>
															<option value="Emailed">Emailed</option>
															<option value="Met in Person">Met in Person</option>
															<option value="Note">Note</option>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<label>Additional Note</label>
														<textarea class="form-control" name="additional_notes"></textarea>
													</div>
												</div>
												<div class="row at-div">
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
												<div class="row">
													<div class="col-md-7">														<label>Date</label>
														<input type="date" name="activity_date" class="form-control">
													</div>
													<div class="col-md-5">														<label>Time</label>
														<input type="time" name="activity_time" class="form-control">
													</div>
												</div>
											</div>
											<div class="card-footer">
												<button class="btn btn-primary float-right" type="button" id="save_activity" data-action="/api/createActivity.php" data-type="save" style="margin-right: 20px;">Save</button>
											</div>
										</div>										
								</form>
								<form id="form_activity2" method="post">
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
													<div class="col-md-7">														<label>Date</label>
														<input type="date" name="activity_date" class="form-control">
													</div>
													<div class="col-md-5">														<label>Time</label>
														<input type="time" name="activity_time" class="form-control">
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<label>Additional Note</label>
														<textarea class="form-control" name="note"></textarea>
													</div>
												</div>

												<div class="row at-call">
													<div class="col-md-12">
														<label for="">Reminder </label>
														<select name="activity_call" class="form-control">
															<option>Select Activity</option>
															<option value="App">App</option>
															<option value="Email">Email</option>
															<option value="SMS with date">SMS with date</option>
															<option value="In Person">In Person</option>
															<option value="time picker">time picker</option>
														</select>
													</div>
												</div>
												
											</div>
											<div class="card-footer">
												<button class="btn btn-primary float-right" type="button" id="save_activity" data-action="" data-type="save" style="margin-right: 20px;">Save</button>
											</div>
										</div>										
								</form>
								<br>

								<!--Begin::Portlet-->
								<div class="m-portlet  m-portlet--full-height " >
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<select name="activity" class="form-control">
												<option>Select Activity</option>
												<option value="call">Call</option>
												<option value="website">Website</option>
												<option value="email">Email</option>
												<option value="sms">SMS</option>
											</select>
										</div>
		
									</div>
									<div class="m-portlet__body mt-0">
										<div class="m-scrollable" data-scrollable="true" data-height="380" data-mobile-height="300">

											<!--Begin::Timeline 2 -->
											<div class="m-timeline-2">
												<div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
													<div class="m-timeline-2__item">
														<span class="m-timeline-2__item-time">02:00<br> Mon</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-danger"></i>
														</div>
														<div class="m-timeline-2__item-text  m--padding-top-5">
															Call Activity
														</div>
													</div>
													
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">05:13<br> Tue</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-success"></i>
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Website Activity
														</div>
														
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">11:50<br> Wed</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-brand"></i>
														</div>
														<div class="m-timeline-2__item-text  m--padding-top-5">
															Email Activity
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">07:38<br> Fri</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-warning"></i>
														</div>
														<div class="m-timeline-2__item-text  m--padding-top-5">
															SMS Activity
														</div>
													</div>
													
													
													
												</div>
											</div>

											<!--End::Timeline 2 -->
										</div>
									</div>
								</div>

		

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

		});



	</script>

	</body>
	<!-- end::Body -->
</html>
