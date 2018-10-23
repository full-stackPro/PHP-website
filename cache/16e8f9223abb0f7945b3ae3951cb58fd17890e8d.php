<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<?php echo $__env->make("shared.header-meta", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<link href="/css/listing.css" rel="stylesheet" type="text/css" />
		<link href="/css/header.css" rel="stylesheet" type="text/css" />
		<link href="/css/spinner.css" rel="stylesheet" type="text/css" />
		<link href="/css/custom.css" rel="stylesheet" type="text/css" />
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
				
				<div class="full-width" style="width: 100% !important;">

					<div class="m-subheader header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Create Contact
								</h3>
							</div>
						</div>
					</div>

					<div class="m-content">
						<div class="m-portlet">
							<div class="m-portlet__body tab-content content_box" style="width: 100%;padding:0px;">
							<!---<div class="tab-content">---->
								<div class="tab-pane active show" id="details_content" aria-expanded="true">
									<table cellspacing="10" cellpadding="15" class="table-striped" style="width: 100% !important;">
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
																<option disabled selected value> -- select an option -- </option>
																<?php $__currentLoopData = $pipeline_status_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	<?php if( $group["name"] ): ?> <optgroup label="<?php echo e($group["name"]); ?>"> <?php endif; ?>
																		<?php $__currentLoopData = $group["types"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																			<option value="<?php echo e($type["id"]); ?>" autocomplete="off"><?php echo e($type["name"]); ?></option>
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
																<option disabled selected value> -- select an option -- </option>
																<?php $__currentLoopData = $transaction_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	<option value="<?php echo e($type["id"]); ?>" autocomplete="off"><?php echo e($type["name"]); ?></option>
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
																<option disabled selected value> -- select an option -- </option>
																<?php $__currentLoopData = $contact_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	<?php if( $group["name"] ): ?> <optgroup label="<?php echo e($group["name"]); ?>"> <?php endif; ?>
																		<?php $__currentLoopData = $group["types"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																			<option value="<?php echo e($type["id"]); ?>" autocomplete="off"><?php echo e($type["name"]); ?></option>
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
														<input type="text" class="form-control" name="name_first" placeholder="First">
													</div>
													<div class="form-row">
														<input type="text" class="form-control" name="name_last" placeholder="Last">
													</div>
												</td>
												<td style="min-width:100px;">
													<div class="row">
														<div class="col title">
															Spouse
														</div>
													</div>
													<div class="form-row">
														<input type="text" class="form-control" name="spouse_first" placeholder="First">
													</div>
													<div class="form-row">
														<input type="text" class="form-control" name="spouse_last" placeholder="Last">
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
														<input type="text" class="form-control" name="company" placeholder="Company">
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
														<option disabled selected value> -- select an option -- </option>
														<?php $__currentLoopData = $lead_source_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($type["id"]); ?>" autocomplete="off"><?php echo e($type["name"]); ?></option>
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
														<input type="tel" class="form-control" name="mobile_phone" placeholder="Mobile phone">
													</div>
													<div class="form-row">
														<input type="tel" class="form-control" name="home_phone" placeholder="Home phone">
													</div>
													<div class="form-row">
														<input type="tel" class="form-control" name="business_phone" placeholder="Business phone">
													</div>
													<div class="form-row">
														<input type="email" class="form-control" name="email" placeholder="Email">
													</div>
												</td>
												<td style="min-width:190px;">
													<div class="row">
													<div class="col title">
														Address
													</div>
												</div>
													<div class="form-row">
														<input type="text" class="form-control" name="street" placeholder="Street">
													</div>
													<div class="form-row">
														<input type="text" class="form-control" name="city" placeholder="City">
													</div>
													<div class="form-row">
														<input type="text" class="form-control" name="state" placeholder="State">
													</div>
													<div class="form-row">
														<input type="text" class="form-control" name="zip" placeholder="Zip">
													</div>
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<div class="row">
														<div class="col title">
															Notes
														</div>
													</div>
													<div class="row">
														<div class="col">
															<textarea class="form-control rounded-0 notes_textarea" name="notes" rows="10"></textarea>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<div class="row">
														<div class="col" style="text-align: center;">
															<button class="btn btn-primary" type="submit" data-action="/api/createContact.php" data-type="save"">Create</button>
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

	</script>

	</body>
	<!-- end::Body -->
</html>
