<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<?php echo $__env->make("shared.header-meta", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<link href="../css/listing.css" rel="stylesheet" type="text/css" />
		<link href="css/header.css" rel="stylesheet" type="text/css" />
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
				
				<div>

					<div class="m-subheader header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Leads
								</h3>
							</div>
						</div>
					</div>

					<div class="m-content">
						<div class="m-portlet">
							<div class="m-portlet__body tab-content content_box" style="width: 100%;padding:0px;">
							<!---<div class="tab-content">---->
								<div class="tab-pane active show" id="details_content" aria-expanded="true">
										<table cellspacing="10" cellpadding="15" class="table-striped">
											<thead>
												<tr>
													<th>Pipeline Status</th>
													<th>Transaction Type</th>
													<th>Contact Type</th>
													<th>Name</th>
													<th>Spouse</th>
													<th>Company</th>
													<th>Lead Source</th>
													<th>Contact</th>
													<th>Address</th>
													<th>Notes</th>
													<th>Save</th>
												</tr>
											</thead>
											<tbody>

												<?php for( $i = 0; $i < 5; $i++ ): ?>
													<form>
														<tr>
															<td>
																<select name="pipline_status">
																	<optgroup label="Future client">
																		<option value="1">Estimate requested</option>
																		<option value="2">Manually entered</option>
																	</optgroup>
																	<optgroup label="Active client">
																		<option value="3">Offer requested</option>
																		<option value="4">Manually entered</option>
																	</optgroup>
																	<optgroup label="Past client">
																		<option value="5">Buyer</option>
																		<option value="6">Seller</option>
																	</optgroup>
																	<option value="0">None</option>
																</select>
															</td>
															<td>
																<select name="transaction_type">
																	<option value="1">Fast Track</option>
																	<option value="2">Traditional</option>
																	<option value="3">Buyer</option>
																	<option value="0">None</option>
																</select>
															</td>
															<td>
																<select name="contact_type">
																	<optgroup label="LEADS">
																		<option value="1">Expired listing</option>
																		<option value="2">Cancelled listing</option>
																		<option value="3">First time buyer</option>
																		<option value="4">For sale by owner</option>
																		<option value="5">Foreclosure</option>
																	</optgroup>
																	<optgroup label="PARTNERS">
																		<option value="6">Divorce attorney</option>
																		<option value="7">Bankruptcy attorney</option>
																		<option value="8">Probate attorney</option>
																		<option value="9">Loan officer</option>
																		<option value="10">Title officer</option>
																		<option value="11">Moving company</option>
																		<option value="12">Realtor</option>
																		<option value="13">Investor</option>
																	</optgroup>
																	<optgroup label="SERVICE PROVIDERS">
																		<option value="14">Termite inspector</option>
																		<option value="15">Home inspector</option>
																		<option value="16">Appraiser</option>
																		<option value="17">Home warranty</option>
																		<option value="18">Insurance agent</option>
																		<option value="19">Landscaper</option>
																	</optgroup>
																	<optgroup label="PERSONAL">
																		<option value="20">Friend</option>
																		<option value="21">Relative</option>
																	</optgroup>
																	<optgroup label="AUTOMATED">
																		<option value="22">Estimate requested</option>
																		<option value="23">Offer requested</option>
																	</optgroup>
																</select>
															</td>
															<td style="min-width:100px;">
																<div class="form-row">
																	<input type="text" class="form-control" name="name_first" placeholder="First">
																</div>
																<div class="form-row">
																	<input type="text" class="form-control" name="name_last" placeholder="Last">
																</div>
															</td>
															<td style="min-width:100px;">
																<div class="form-row">
																	<input type="text" class="form-control" name="spouse_first" placeholder="First">
																</div>
																<div class="form-row">
																	<input type="text" class="form-control" name="spouse_last" placeholder="Last">
																</div>
															</td>
															<td style="min-width:142px;">
																<div class="form-row">
																	<input type="text" class="form-control" name="company" placeholder="Company">
																</div>
															</td>
															<td>
																<select name="transaction_type">
																	<option value="1">Website</option>
																	<option value="2">Other</option>
																</select>
															</td>
															<td style="min-width:190px;">
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
															<td>
																<textarea class="form-control rounded-0 notes_textarea" name="notes" rows="10"></textarea>
															</td>
															<td>
																<button class="btn btn-primary" type="submit">Save</button>
															</td>
														</tr>
													</form>
												<?php endfor; ?>

											</tbody>
										</table>
									</form>
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

<!--
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js" integrity="sha256-BEqTcxuDdEftl1gxpORMY6kS6tR8RJIL3WxfXKKTI+g=" crossorigin="anonymous"></script>
-->

	</body>
	<!-- end::Body -->
</html>
