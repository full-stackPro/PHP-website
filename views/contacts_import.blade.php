<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		@include("shared.header-meta")
		<link href="/css/listing.css" rel="stylesheet" type="text/css" />
		<link href="/css/header.css" rel="stylesheet" type="text/css" />
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

			td {
				padding: 15px 25px;
			}

			.nowrap {
				white-space: nowrap;
			}

		</style>
		-->
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default"  >

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			@include( "shared.header" )
			<!-- END: Header -->		

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>

				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
					<!-- BEGIN: Brand -->
					@include("shared.logo")
					<!-- END: Brand -->

					<!-- BEGIN: Aside Menu -->
					@include( "shared.sidebar" )
					<!-- END: Aside Menu -->

				</div>
				
				<div class="col-md-12">

					<!-- <div class="m-subheader header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Contacts
								</h3>
							</div>
							<div>
								<a class="btn btn-primary" href="/contact_create.php">Create</a>
								<button class="btn btn-primary" id="show_more">Show More</button>
							</div>
						</div>
					</div> -->

					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6 offset-md-3">
										
										<form class="form-horizontal" action="contacts_upload.php" method="post">
										<input type="hidden" name="file_name" value="<?= $file_name ?>">
										<div class="card">
											<div class="card-header">Client Import</div>
												<div class="card-body">
														<div class="form-group">
															<label>Contact Type</label>
															<select name="contact_type" class="form-control">
																<!---<option value="Leads">Leads</option>
																<option value="Partners">Partners</option>
																<option value="Service">Service</option>
																<option value="Providers">Providers</option>
																<option value="Personal">Personal</option>---->
													<option disabled @if ( empty( $contact["lead_source"] ) ) selected @endif value> -- select an option -- </option>
												@foreach ( $contact_groups as $group )
													@if ( $group["name"] ) <optgroup label="{{ $group["name"] }}"> @endif
														@foreach ( $group["types"] as $type )
															<option value="{{ $type["id"] }}" @if ( $contact["contact_type"] == $type["id"] ) selected="selected" @endif autocomplete="off">{{ $type["name"] }}</option>
														@endforeach
													@if ( $group["name"] ) </optgroup> @endif
												@endforeach
															</select>

														</div>

														<div class="form-group">
															<label>Tags</label>
															<textarea name="tag" class="form-control"></textarea>

														</div>
														
														@foreach($columns as $key=> $col)
															<div class="form-group cols">
																<label><?= $col ?></label>
																<?php dropDown($db_cols,$key) ?>
															</div>											
														@endforeach
														

														
												</div>
											<div class="card-footer">
												<button type="submit" class="btn btn-primary float-right" name="upload">Upload</button>
											</div>
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- just a hidden template for populating cols -->
			
			<!-- end:: Body -->
			
				@include( "shared.footer" )

		</div>
		<!-- end:: Page -->

		<!-- begin::Quick Sidebar -->
		@include( "shared.quickSidebar" )
		<!-- end::Quick Sidebar -->
		@include( "shared.quickNav" )
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

	</body>
	<!-- end::Body -->
</html>
